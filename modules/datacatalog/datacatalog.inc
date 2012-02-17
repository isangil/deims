<?php
// $Id $

function pre($string, $return_result=true) {
	if (is_array($string) || is_object($string)) {
		$string = print_r($string, true);
	}
	$result = "<pre>$string</pre>";
	if ($return_result) {
		return $result;
	} else {
		echo $result;
	}
}
 
function data_access_policy() {
  $dap = node_load(array('title' => 'Data Access Policy'));
  return $dap->body;
}

function _isemail($email){
  return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}
function _get_querysource($df_node) {
  if (property_exists($df_node, 'field_datafile_external_source') && !empty($df_node->field_datafile_external_source[0]['value'])) {
    $source = $df_node->field_datafile_external_source[0]['value'];
    
    //check if source is a URL
    if (preg_match('/^(http)|(ftp)s?:\/\//', $source)) {
      //return array(url($source, $options = array('absolute' => true)), 'url');
      drupal_goto(url($source, $options = array('absolute' => true)));
    }

    //check if source is a table
    $check_table_exists= "DESC $source";
    @(mysql_query($check_table_exists));
    if (!mysql_errno()) {
      return $source;
    }
  } //done looking at external_source field

  //check for an uploaded data_file
  if (isset($df_node->field_data_file[0]['filepath'])) {
    $filepath = $df_node->field_data_file[0]['filepath'];
    //return array(url($filepath, $options = array('absolute' => true)), 'url');
    drupal_goto(url($filepath, $options = array('absolute' => true)));
  } else {
    return NULL;
  }
}

function _get_database_info() {
  $info['projects'] = _get_projects();
  $info['themes'] = _get_themes();

  $info['locations'] = array('all' => '<All Locations>');
  include 'local.settings.php';

  // Add individual locations, garnerned from a SELECT DISTINCT
  // on the Research Site content type.
  $query = db_select('node', 'n')->distinct()
    ->fields('n', array('title'))
    ->condition('n.type', 'research_site', '=');
  $query->join('content_type_research_site', 'rs', 'n.nid = rs.nid AND n.vid = rs.vid');
  $query->fields('rs', array('field_research_site_siteid_value'));

  $result = $query->execute();

  foreach($result as $record) {
    $name = $record->title;
    $lakeid = $record->field_research_site_siteid_value;
    if (!empty($lakeid)) $info['locations'][$lakeid] = $name;
  }

	return $info;
}

// This performs a search; it's called by the form below.
function datacatalog_dosearch($input) {
  $form = $input['form'];
  $values = $input['values'];
  $r = '';

  $r .= "<ul>";

  $query = db_select('node', 'n')->distinct()
    ->fields('n', array('nid', 'title'))
    ->condition('n.type', 'data_set', '=');

  $query->join('content_type_data_set', 'ds', 'n.nid = ds.nid AND n.vid = ds.vid');

  if (db_column_exists('content_type_data_set', 'field_dataset_query_visible_value')) {
    // This column is used by NTL to hide some datasets from being searchable
    // with this module.  Other sites may not need it, so we make it optional.
    $query->condition('ds.field_dataset_query_visible_value', 'N', '!=');
  }
  
  $projects = $values["project"];
  if(!empty($projects) && $projects != 'all') {
    $query->where("EXISTS (SELECT tn.vid FROM {term_node} tn WHERE n.vid = tn.vid AND tn.tid IN ($projects))");
  }

  $themes = $values["theme"];
  if(!empty($themes) && $themes != 'all') {
    foreach ($themes as $theme) {
      //add any children, for when a parent theme like "biological (all)" is selected
      $children = taxonomy_get_children($theme);
      $children = array_keys($children);
      if (!empty($children)) {
        $themes = array_merge($themes, $children);
      }
    }
    $tids = mysql_real_escape_string(implode($themes, ", "));
    $query->where("EXISTS (SELECT tn.vid FROM {term_node} tn WHERE n.vid = tn.vid AND tn.tid IN ($tids))");
  }

  $locations = $values['location'];
  if (!empty($locations) && $locations != 'all' ) {
    $query->join("content_field_dataset_datafile_ref", "file_ref",
                  "ds.vid = file_ref.vid AND ds.nid = file_ref.nid");

    $query->join("content_field_datafile_site_ref", "site_ref",
                  "file_ref.field_dataset_datafile_ref_nid = site_ref.nid");

    $query->join("content_type_research_site", "table_site",
                  "site_ref.field_datafile_site_ref_nid = table_site.nid");
  
   
    $loc_array = explode(',', mysql_real_escape_string($locations));
    $query->condition("table_site.field_research_site_siteid_value", $loc_array, "IN");
  }

  $year = mysql_real_escape_string($values['year']);
  if (!empty($year)) {
    $table = "content_field_beg_end_date";
    $query->join($table, "begend", "ds.nid = begend.nid AND ds.vid = begend.vid");
  
    $query->where("left(begend.field_beg_end_date_value,4) <= $year"
        . " AND (begend.field_beg_end_date_value2 IS NULL OR begend.field_beg_end_date_value2 >= $year)");
  }

  // PARSE METADATA SEARCH CRITERIA
  //     first, see whether they should be joined by AND or OR
  if ($values['metadata'] == 'AND') {
    $metacond = db_and();
  } else {
    $metacond = db_or();
  }
  //    next, iterate over list of criteria values
  $numcond = 0;

  $keyword_tids = array();

  for ($i = 1; $i <= $values['num_criteria']; $i++) {
    $val = mysql_real_escape_string($values["contains$i"]);
    if(!empty($val)) {
    switch($values["field$i"]) {
      case 'title':
        $metacond->condition("n.title", "%$val%", "LIKE");
        $numcond++;
        break;
      case 'abstract':
        $metacond->condition("ds.field_dataset_abstract_value", "%$val%", "LIKE");
        $numcond++;
        break;
      case 'keyword':
        $term_array = taxonomy_get_term_by_name($val);
        $tids = array();
        foreach ($term_array as $term) {
          $tids[] = $term->tid;
        }
        $tids = mysql_real_escape_string(implode($tids, ", "));
        $query->where("EXISTS (SELECT tn.vid FROM {term_node} tn WHERE n.vid = tn.vid AND tn.tid IN ($tids))");
        break;
      case 'column_description':
        //We add $i to tables aliases in these joins to distinguish them from subsequent criteria of the same type
        $query->leftJoin("content_field_dataset_datafile_ref", "file_ref_$i",
                      "ds.vid = file_ref_$i.vid AND ds.nid = file_ref_$i.nid");

        $query->leftJoin("content_field_datafile_variable_ref", "var_ref_$i",
                      "file_ref_$i.field_dataset_datafile_ref_nid = var_ref_$i.nid");

        $query->leftJoin("content_type_variable", "table_var_$i",
                      "var_ref_$i.field_datafile_variable_ref_nid = table_var_$i.nid");

        $subcond = db_or();
        $subcond->condition("table_var_$i.field_var_definition_value", "%$val%", "LIKE");
        $subcond->condition("table_var_$i.field_attribute_label_value", "%$val%", "LIKE");
        $metacond->condition($subcond);
        $numcond++;
        break;
      case 'location':
        drupal_set_message("Warning: Location search is unimplemented", 'warning');
        break;
      case 'species':
        drupal_set_message("Warning: Species search is unimplemented", 'warning');
        break;
      case 'investigator':
        //crimeny!
        $query->leftJoin("content_field_dataset_contact_ref", "contact_ref_$i",
                      "ds.vid = contact_ref_$i.vid AND ds.nid = contact_ref_$i_$i.nid");
        $query->leftJoin("node", "person_contact_$i",
                      "contact_ref_$i.field_dataset_contact_ref_nid = person_contact_$i.nid");

        $query->leftJoin("content_field_dataset_datamanager_ref", "datamanager_ref_$i",
                      "ds.vid = datamanager_ref_$i.vid AND ds.nid = datamanager_ref_$i_$i.nid");
        $query->leftJoin("node", "person_datamanager_$i",
                      "datamanager_ref_$i.field_dataset_datamanager_ref_nid = person_datamanager_$i.nid");

        $query->leftJoin("content_field_dataset_ext_assoc_ref", "ext_assoc_ref_$i",
                      "ds.vid = ext_assoc_ref_$i.vid AND ds.nid = ext_assoc_ref_$i_$i.nid");
        $query->leftJoin("node", "person_ext_assoc_$i",
                      "ext_assoc_ref_$i.field_dataset_ext_assoc_ref_nid = person_ext_assoc_$i.nid");

        $query->leftJoin("content_field_dataset_fieldcrew_ref", "fieldcrew_ref_$i",
                      "ds.vid = fieldcrew_ref_$i.vid AND ds.nid = fieldcrew_ref_$i_$i.nid");
        $query->leftJoin("node", "person_fieldcrew_$i",
                      "fieldcrew_ref_$i.field_dataset_fieldcrew_ref_nid = person_fieldcrew_$i.nid");

        $query->leftJoin("content_field_dataset_labcrew_ref", "labcrew_ref_$i",
                      "ds.vid = labcrew_ref_$i.vid AND ds.nid = labcrew_ref_$i_$i.nid");
        $query->leftJoin("node", "person_labcrew_$i",
                      "labcrew_ref_$i.field_dataset_labcrew_ref_nid = person_labcrew_$i.nid");

        $query->leftJoin("content_field_dataset_owner_ref", "owner_ref_$i",
                      "ds.vid = owner_ref_$i.vid AND ds.nid = owner_ref_$i_$i.nid");
        $query->leftJoin("node", "person_owner_$i",
                      "owner_ref_$i.field_dataset_owner_ref_nid = person_owner_$i.nid");
        
        $subcond = db_or();
        $subcond->condition("person_contact_$i.title", "%$val%", "LIKE");
        $subcond->condition("person_datamanager_$i.title", "%$val%", "LIKE");
        $subcond->condition("person_ext_assoc_$i.title", "%$val%", "LIKE");
        $subcond->condition("person_fieldcrew_$i.title", "%$val%", "LIKE");
        $subcond->condition("person_labcrew_$i.title", "%$val%", "LIKE");
        $subcond->condition("person_owner_$i.title", "%$val%", "LIKE");
        $metacond->condition($subcond);
        $numcond++;
        break;
      case 'dataset_id':
        $metacond->condition("ds.field_dataset_id", "%$val%", "LIKE");
        $numcond++;
    } //switch
    } //if
  }

  if ($numcond > 0) {
    $query->condition($metacond);
  }
  
  $query->orderBy("title", "ASC");

  $result = $query->execute();
  
  $count = 0;
  foreach($result as $record) {
    $nid = $record->nid;
    $path = "node/$nid";

    $title = $record->title;
    $meta_link = l('meta', $path);
    $data_link = l('data' , "data/filter/$nid");

    $r .= "<li> $title - $meta_link $data_link</li>";
    $count++;
  }

  $r .= "</ul>\n";
  return $r;
}

function _get_themes() {
  $theme_tid = taxonomy_get_term_by_name('theme');

  if(empty($theme_tid)) return NULL;

  $theme_tid = $theme_tid[0]->tid;
  $top_themes = taxonomy_get_children($theme_tid);

  $all_themes = array();
  foreach($top_themes as $t_tid => $top_theme) {
    $all_themes[$t_tid] = $top_theme->name;

    $children = taxonomy_get_children($t_tid);
    if(!empty($children)) {
      foreach ($children as $child) {
        $parent_name = preg_replace("/ ?(all)/", '', $top_theme->name);
        $shortname = preg_replace("/$parent_name ?-? ?/", '... ', $child->name);
        $all_themes[$child->tid] = $shortname;
      }
    }
  }
  return $all_themes;
}
function _get_projects() {
  $project_tid = taxonomy_get_term_by_name('project');

  if(empty($project_tid)) return NULL;

  $project_tid = $project_tid[0]->tid;
  $children = taxonomy_get_children($project_tid);
  $ret = array('all' => t('<All Projects>'));
  foreach($children as $c_tid => $child) {
    $ret[$c_tid]=$child->name;
  }
  return $ret;
}

/**
 * Main search form accessible at the URL 'datacatalog/search'
 */
function datacatalog_datasearch_form(&$form_state) {
  if (!isset($form_state['storage']['num_criteria'])) {
		$form_state['storage']['num_criteria'] = 2;
  }

	$dbinfo = _get_database_info();
  $form['debuginfo'] = array(
    '#type' => 'hidden',
		'#title' => 'devel info',
    '#description' => pre($dbinfo['locations'], true),
  );
  
  $last = $_SESSION['datasearch'];
  unset($_SESSION['datasearch']);
  if (!empty($last)) {
    $form['last'] = array(
      '#type' => 'fieldset',
      '#title' => t('Search results'),
    );

    $form['last']['output'] = array(
      '#type' => 'markup',
      '#value' => datacatalog_dosearch($last),
    );
  }

	$form['source'] = array(
		'#type' => 'fieldset',
		'#title' => t('New search'),
	);
 

  if (!empty($dbinfo['projects'])) {
    $el = 'project';
    $form['source'][$el] = array(
      '#prefix' => '<div class="form-radios-horiz">',
      '#suffix' => '<div class="clear"></div></div>',
      '#type' => 'select',
      '#title' => t('Project'),
      '#options' => $dbinfo['projects'],
      '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : '',
    );
  }

  if (!empty($dbinfo['themes'])) {
    $el = 'theme';
    $form['source'][$el] = array(
      '#prefix' => '<div class="form-radios-horiz">',
      '#suffix' => '<div class="clear"></div></div>',
      '#type' => 'select',
      '#title' => t('Theme'),
      '#options' => $dbinfo['themes'],
      '#multiple' => TRUE,
      '#description' => t('(hold CTRL and click to select multiple)'),
      '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : '',
    );
  }
  
  /* attempt to replace above 'theme' using  multiselect module ... as yet doesn't parse allowed_values properly
  $el = 'theme';
  $element = array(
    '#field_name' => 'theme',
    '#columns' => array('value'),
    'module' => 'datacatalog',
    '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : '',
	);
  $form['#field_info']['theme'] = $element;
  
  require_once drupal_get_path('module','multiselect') . '/multiselect.module';
  $element = multiselect_select_process($element, NULL, $form_state, $form);
  $form['source']['theme'] = $element['value'];
  
  //end attempt to use multiselect module */
  
  $el = 'location';
	$form['source'][$el] = array(
    '#prefix' => '<div class="form-radios-horiz">',
    '#suffix' => '<div class="clear"></div></div>',
		'#type' => 'select',
		'#title' => t('Location'),
		'#options' => $dbinfo['locations'],
    '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : '',
	);

  $el = 'year';
  $form['source'][$el] = array(
    '#prefix' => '<div class="form-radios-horiz">',
    '#suffix' => '<div class="clear"></div></div>',
    '#type' => 'textfield',
    '#title' => t('Year'),
    '#size' => 4,
    '#maxlength' => 4,
    '#attributes' => array('class' =>'container-inline'),
    '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : '',
  );

  $el = 'metadata';
  $form[$el] = array(
    '#prefix' => '<div class="form-radios-horiz">',
    '#suffix' => '<div class="clear"></div></div>',
    '#type' => 'radios',
    '#title' => t('Metadata text search'),
    '#options' => array('AND' => 'AND', 'OR' => 'OR'),
    '#description' => t('(add criteria below)'),
    '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : 'AND',
  );

	//multiple criteria
	for ($i = 1; $i <= $form_state['storage']['num_criteria']; $i++) {
    $el = "criteria$i";
		$form[$el] = array(
			'#type' => 'fieldset',
			'#title' => t("Criteria #$i"),
			'#collapsible' => TRUE,
			'#collapsed' => FALSE,
	  );

    $el = "field$i";
    if ($i == 1 && empty($form_state['values'][$el]))
      $form_state['values'][$el] = 'abstract'; //just a useful default for the first criteria, methinks

 		$form["criteria$i"][$el] = array(
			'#type' => 'select',
			'#options' => array(
				'none' => t('<none>'),
				'title' => t('Title'),
				'abstract' => t('Abstract'),
				'keyword' => t('Keyword'),
				'column_description' => t('Column Description'),
// (disabled)				'location' => t('Location'),
				'species' => t('Species'),
				'investigator' => t('Investigator'),
// (disabled)				'dataset_id' => t('Dataset ID')
        /* end options */ ),
      '#default_value' => !empty($form_state['values'][$el]) ? $form_state['values'][$el] : '',
	  );
 
    $el = "contains$i";
  	$form["criteria$i"][$el] = array(
      '#prefix' => '<div class="form-radios-horiz">',
      '#suffix' => '<div class="clear"></div></div>',
    	'#type' => 'textfield',
	    '#title' => t('contains'),
  	  '#size' => 30,
	    '#maxlength' => 300,
      '#default_value' => !empty($form_state['values']["contains$i"]) ? $form_state['values']["contains$i"] : '',
  	);
	} //end criteria for

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Search',
  );

  $form['add_criteria'] = array(
    '#type' => 'submit',
    '#value' => t('Add criteria'),
    '#validate' => array('datacatalog_datasearch_form_add_criteria'),
  );

  $form['clear'] = array(
    '#type' => 'submit',
    '#value' => 'Reset',
    '#validate' => array('datacatalog_datasearch_form_clear'),
  );

  return $form;
}

function theme_datacatalog_datasearch_form($form) {
  $output = '';
  foreach(element_children($form) as $element) {

  switch($element) {
    /*
    case 'fieldselection':  //format these as a table
      $header = array('Selection', 'Definition', 'Units');

      $allrows = array();
      foreach(element_children($form['fieldselection']) as $key ){

        $newrow = array();
        foreach (element_children($form['fieldselection'][$key]) as $col) {
          $newrow[] = drupal_render($form['fieldselection'][$key][$col]);
        }

        $newrow[] = drupal_render($form['fieldselecteion'][$key]);
        $allrows[] = $newrow;
      }

      $table = theme('table', $header, $allrows);
      $output .= $table;
      break;
    */

    default:
      if (preg_match('/criteria.+/',$element)) {
          //this is a criteria, and we want to render its elements inline
          $output .= '<div class="form-inline">';

          $children = element_children($form[$element]);
          foreach($children as $arg) $output .= drupal_render($form[$element][$arg]);

          $output .= '</div>';
          $output .= '<div style="clear:both;"></div>';
          break;
      } else {
        //do the normal drupal thing
        $output .= drupal_render($form[$element]);
      }
      break;
  }//switch
  }//foreach
  return $output;
}

function datacatalog_datasearch_form_add_criteria($form, &$form_state) {
    $form_state['storage']['num_criteria']++;
    // Setting $form_state['rebuild'] = TRUE causes the default submit
    // function to be skipped and the form to be rebuilt.
    $form_state['rebuild'] = TRUE;
}

function datacatalog_datasearch_form_clear($form, &$form_state) {
  // Ensures fields are blank after the reset button is clicked.
  unset ($form_state['values']);
  // Ensures the reset button removes the new_name button.
  unset ($form_state['storage']);
  // Setting $form_state['rebuild'] = TRUE causes the default submit
  // function to be skipped and the form to be rebuilt.

  $form_state['rebuild'] = TRUE;
}

/**
 * Adds logic to validate the form to check the validity of the new fields,
 * if they exist.
 */
function datacatalog_datasearch_form_validate($form, &$form_state) {
  /*
  $year_of_birth = $form_state['values']['year_of_birth'];
  $first_name = $form_state['values']['first'];
  $last_name = $form_state['values']['last'];
  if (!$first_name) {
    form_set_error('first', 'Please enter your first name.');
  }
  if (!$last_name) {
    form_set_error('last', 'Please enter your last name.');
  }
  if ($year_of_birth && ($year_of_birth < 1900 || $year_of_birth > 2000)) {
    form_set_error('year_of_birth', 'Enter a year between 1900 and 2000.');
  }
  if ($form_state['storage']['new_name']) {
  $year_of_birth = $form_state['values']['year_of_birth2'];
  $first_name = $form_state['values']['first2'];
  $last_name = $form_state['values']['last2'];
  if (!$first_name) {
    form_set_error('first2', 'Please enter your first name.');
  }
  if (!$last_name) {
    form_set_error('last2', 'Please enter your last name.');
  }
  if ($year_of_birth && ($year_of_birth < 1900 || $year_of_birth > 2000)) {
    form_set_error('year_of_birth2', 'Enter a year between 1900 and 2000.');
  }
}
*/
}

/**
* Submit function.
*
* Commenting out unset($form_state['storage'] and
* then adding a new set of name fields and submitting the form,
* would cause the form to rebuilt with the existing values, because in
* Drupal 6 if $form_state['storage'] is set, $form_state['rebuild'] is also
* automatically set, causing the form fields to get rebuilt with the
* values found in $form_state['values'].
*/
function datacatalog_datasearch_form_submit($form, &$form_state) {
  $form_state['values']['num_criteria'] = $form_state['storage']['num_criteria'];
  unset($form_state['storage']);
  $_SESSION['datasearch'] = array('form' => $form, 'values' => $form_state['values']);

/*  if (!empty($form_state['values']['first2'])) {
    drupal_set_message(t('Second name: name="@first @last", year of birth=@year_of_birth',
  array('@first' => $form_state['values']['first2'], '@last' => $form_state['values']['last2'], '@year_of_birth' => $form_state['values']['year_of_birth2'])));
}
*/
}

function datacatalog_audit($datafile_nid = NULL) {
  $audit = $_SESSION['audit'];
  $values = $audit['values'];
  $df_node = node_load($datafile_nid);
  $datafile = strtolower($df_node->title);

  //verify audit
  if (!empty($audit)) {
    if($audit == 'direct_download_skip') {
      return true;
    }

    //verify audit
    if (strpos($values['name'], ' ') === false) {
      drupal_set_message('Please enter a valid full name', 'warning');
      return false;
    }
    if (!_isemail($values['email'])) {
      drupal_set_message('Please enter a valid email address', 'warning');
      return false;
    }
    if (empty($values['purpose'])) {
      drupal_set_message('Please select a purpose', 'warning');
      return false;
    }

    //record audit into datacatalog_requests table
    $fields = array(
        'requestdate' => date('Y-m-d H:i:s'),
        'name' => $values['name'],
        'email' => $values['email'],
        'purpose' => $values['purpose'],
        'datafile_nid' => $datafile_nid,
      );
    db_insert('datacatalog_requests')->fields($fields)->execute();
    return true; //audit successfully recorded
  } else {
    return false; //unsuccessful, re-show audit form
  }
}

function datacatalog_audit_getform() {
  $field_size = 20;
  $form['auditinfo'] = array(
    '#type' => 'fieldset',
    '#title' => 'Please enter your information',
  );

  $form['auditinfo']['name'] = array(
    '#type' => 'textfield',
    '#title' => t('Full Name'),
    '#size' => 20,
  );

  $form['auditinfo']['email'] = array(
    '#type' => 'textfield',
    '#title' => t('Email Address'),
    '#size' => 20,
  ); 

  $form['auditinfo']['purpose'] = array(
    '#type' => 'select',
    '#title' => t('Purpose for which the data will be used'),
    '#options' => array (
      '' => '',
      'Academic Research' => 'Academic Research',
      'Education' => 'Education',
      'Commercial' => 'Commercial',
      ),
    '#default_value' => '',
  ); 
  
  $form['auditinfo']['dataaccesspolicy'] = array(
    '#value' => data_access_policy(),
  );


  $cookie = $_COOKIE['datacatalog_audit'];
  if (!empty($cookie)) {
    $cookie = json_decode($cookie);
    foreach($cookie as $key => $value) {
      $form['auditinfo'][$key]['#default_value'] = $value;
    }
  }

  $form['auditinfo']['submit'] = array(
    '#type' => 'submit',
    '#value' => 'Submit',
  );
  return $form;
}

function datacatalog_datadownload_form(&$form_state, $dataset_nid) {
  // Get a data file
  $ds_node = node_load($dataset_nid);
  if ($ds_node->type == "data_file") {
    //We were given a datafile.  That was easy.
    $df_nid = $dataset_nid;
  } else if ($ds_node->type == "data_set") {
    //It's actually a dataset, which may have 0 or more datafiles
    $datafiles = $ds_node->field_dataset_datafile_ref;
    if (count($datafiles) == 0) {
      // There are no data files in this data set.  Redirect to metadata page.
      $form['#redirect'] = "node/$dataset_nid";
      return $form;
    } else if (count($datafiles) == 1) {
      // There's only one data file in this data set.  Grab its nid.
      $df_nid = $datafiles[0][nid];
    } else {
      // There are multiple data files in this data set.  Generate selection form.
      $htmllist = '<ul>';
      foreach($datafiles as $datafile) {
        $df_nid = $datafile[nid];
        $df = node_load($df_nid);

        $path = "node/$df_nid";
        $title = $df->title;

        $meta_link = l('meta', $path);
        $data_link = l('data' , "data/filter/$df_nid");

        $htmllist .= "<li> $title - $meta_link $data_link</li>";
      };
      $htmllist .= '</ul>';

      $ds_link= l($ds_node->title, "node/$dataset_nid");
      $form['selected_dataset'] = array(
        '#value' => '<strong>Choosen Data Set:</strong> ' . $ds_link,
      );

      $form['dflist_fieldset'] = array(
        '#type' => 'fieldset',
        '#title' => 'Available Data Files',
      );

      $form['dflist_fieldset']['list'] = array(
        '#value' => $htmllist
      );
      return $form;
    }
  } else {
    drupal_set_message("Datacatalog Error: invalid argument $dataset_nid", 'error');
    return;
  }

  //We know the datafile and nid to use, but we need to audit the request
  $_SESSION['df_nid'] = $df_nid;

  assert(!empty($df_nid));
  //Attempt audit:
  if(!datacatalog_audit($df_nid)) {
    //Audit failed with stored session info, so we need to display the form
    return datacatalog_audit_getform();
  }
  // Audit was successful.  At this point we know the datafile nid to use.
  $df_node = node_load($df_nid);

  $db_source = _get_querysource($df_node); //may redirect to file/url, ending this code path
  if (empty($db_source)) {
    drupal_set_message("Datacatalog Error: Data source for $df_nid unavailable.", 'error');
    return '';
  }
  //at this point $db_source should be a valid mysql table/view

  // Save nid for use when query form is submitted
  $form['#datafile_nid'] = $df_nid;

  $datafile_link = l($df_node->title, "node/" . $df_node->nid );
  $form['selected source'] = array(
    '#type' => 'markup',
    '#value' => "<br/>Filtering from: $datafile_link",
  );

  $form['fieldselection'] = array(
    '#type' => 'fieldset',
    '#title' => t('Field selection'),
  );

  //populate list of variables
  $var_nid_array = $df_node->field_datafile_variable_ref;
  $variables = array();
  foreach ($var_nid_array as $var) {
    $variables[$var[nid]] = node_load($var[nid]);
  }

  foreach($variables as $var) {
    if (property_exists($var, 'field_var_name') && !empty($var->field_var_name[0]['value'])) {
      // NTL uses a more descriptive node title and stores the attribute name
      // in a separate field.
      $var->attribute_name = $var->field_var_name[0]['value'];
    } else {
      // That field doesn't exist or is empty, so use the node title as attribute name.
      $var->attribute_name = $var->title;
    }
    $field_definition = strip_tags($var->field_var_definition[0]['value']);
    $field_units = $var->field_attribute_unit[0]['value'];

    assert(!empty($var->attribute_name));

    $field_link = url('node/' . $var->nid);
    $field_link = "<a href=\"$field_link\" style=\"text-decoration:none\">$field_definition</a>";

    $form['fieldselection'][] = array(
      "chk_" . $var->attribute_name => array(
        '#type' => 'checkbox',
        '#title' => "$field_link",
        '#default_value' => "1",
      ),
/*      array(
        '#type' => 'markup',
        '#value' => "$field_link",
      ),*/
      array(
       '#type' => 'markup',
       '#value' => "$field_units",
      ),
    );
        
  } //done with variable checkboxes

  $form['viewfilter'] = array(
    '#type' => 'fieldset',
    '#title' => t('Filters'),
  );
  
  // loop over the variables again, this time putting together filters
  $has_ntl_ln = false; //for an NTL special case
  foreach ($variables as $var) {
    $name = strip_tags($var->field_var_definition[0]['value']);
    if ($name == 'lake name') $has_ntl_ln = true;
  }
  
  foreach($variables as $var) {
    if (property_exists($var, 'field_var_filter_widget')) 
      $widget_type = $var->field_var_filter_widget[0][value];
      switch($widget_type) {

        case 'multiselect':
          // poll database for distinct values
          $result = db_query("SELECT DISTINCT " . $var->attribute_name . " from $db_source"
              . " where $var->attribute_name is not NULL order by $var->attribute_name ASC"
              );
      
          $filter_options = array();
          while ($row = db_fetch_array($result)) {
            $filter_options[] = reset($row);
          }
          
          // Don't display a selection box if there's only 1 value option for the field.
          if (count($filter_options) <= 1) continue;

          $filter_human_name = strip_tags($var->field_var_definition[0]['value']);

          //NTL special case: skip Lake Name Abbreviation if Lake Name is present
              if($has_ntl_ln && $filter_human_name == 'lake name abbreviation') continue;

          $filter_human_name = "Which " . $filter_human_name . "s do you want? ";
          $filter_name = "filter_" . $var->attribute_name;
          

          //generate multiselect box
          $form['viewfilter'][$filter_name] = array(
            '#type' => 'select',
            '#filter_type' => 'select',
            '#title' => t($filter_human_name),
            '#options' => $filter_options,
            '#multiple' => TRUE,
            '#description' => t('Hold CTRL and click to select multiple values'),
          );
          break;

        case 'daterange':
          $attribute = $var->attribute_name;

          // poll database for max/min limits
          $result = db_query("SELECT MAX($attribute) max, MIN($attribute) min from $db_source");
          $limits = db_fetch_array($result);

          //chop off any decimal places on year values
          foreach($limits as $key => $value) {
            if (is_numeric($value)) {
              $limits[$key] = (int) $value;
            }
          }
          // calculate the range of years
          $low_year = date_format(date_create($limits['min']), 'Y');
          $high_year = date_format(date_create($limits['max']), 'Y');
          $this_year = date_format(date_now(), 'Y');
          $low_offset = $low_year - $this_year;
          $high_offset = $high_year - $this_year;
          $range = "$low_offset:$high_offset";

          // generate from widget
          $from_name = "filter_" . $var->attribute_name . "_from";
          $from_human_name = 'From this ' . strip_tags($var->field_var_definition[0]['value']);
          $form['viewfilter'][$from_name] = array(
            '#type' => 'date_popup',
            '#filter_type' => 'date_from',
            '#title' => t($from_human_name),
            '#default_value' => $limits['min'],
            '#date_year_range' => $range,
          );
          
          // generate to widget
          $to_name = "filter_" . $var->attribute_name . "_to";
          $to_human_name = 'To this ' . strip_tags($var->field_var_definition[0]['value']);
          $form['viewfilter'][$to_name] = array(
            '#type' => 'date_popup',
            '#filter_type' => 'date_to',
            '#title' => t($to_human_name),
            '#default_value' => $limits['max'],
            '#date_year_range' => $range,
          );
          break;

        case 'numericrange':
        //poll database for min/max
          $result = db_query(
            "SELECT MIN(" . $var->attribute_name . "), MAX(" . $var->attribute_name . ") from $db_source"
          );
          $row = db_fetch_array($result);

          //add zero to convert strings like '2004.00000000000000000' to sane float representation
          $min = 0.0 + reset($row); 
          $max = 0.0 + next($row);

        // poll database for distinct values
          $result = db_query("SELECT DISTINCT " . $var->attribute_name . " from $db_source"
              . " where $var->attribute_name is not NULL order by $var->attribute_name ASC"
            );
          $value_list = array();
          while ($row = db_fetch_array($result)) {
            $val = reset($row);
            if(is_numeric($val)) {
              $value_list[] = 0.0 + $val;
            } else {
              $value_list[] = $val;
            }
          }

          $filter_human_name = strtolower(strip_tags($var->field_var_definition[0]['value']));
          $filter_name = "filter_" . $var->attribute_name;
          $filter_units = $var->field_attribute_unit[0]['value'];
          if ($filter_units != 'dimensionless') {
//            if ($filter_units)
            $filter_human_name .= " ($filter_units)";
          }

          $textfield_size = max(strlen($max), strlen($min));
          if($textfield_size < 10) $textfield_size = 10;
          else $textfield_size = $textfield_size + 2;

      //set up textfields for default case
          $form['viewfilter'][$filter_name . '_min'] = array(
            '#prefix' => '<div class="form-radios-horiz">',
            '#suffix' => '<div class="clear"></div></div>',
            '#attributes' => array('class' =>'container-inline'),
            '#type' => 'textfield',
            '#filter_type' => 'numericrange',
            '#title' => t('Enter a minimum ' . $filter_human_name),
            '#default_value' => $min,
            '#size' => $textfield_size,
          );

          $form['viewfilter'][$filter_name . '_max'] = array(
            '#prefix' => '<div class="form-radios-horiz">',
            '#suffix' => '<div class="clear"></div></div>',
            '#attributes' => array('class' =>'container-inline'),
            '#type' => 'textfield',
            '#filter_type' => 'numericrange',
            '#title' => t('Enter a maximum ' . $filter_human_name),
            '#default_value' => $max,
            '#size' => $textfield_size,
          );

      //change to select box if few enough values for human scrolling
          if (count($value_list) <= 150) {
            $form['viewfilter'][$filter_name . '_min'] = array(
              '#title' => t('Select minimum ' . $filter_human_name),
              '#type' => 'select',
              '#options' => $value_list,
              '#filter_type' => 'numericrange',
            );
            $form['viewfilter'][$filter_name . '_max'] = array(
              '#title' => t('Select maximum ' . $filter_human_name),
              '#type' => 'select',
              '#options' => array_reverse($value_list),
              '#filter_type' => 'numericrange',
            );
          }
          break;
      }
  }
  
  $filters = element_children($form['viewfilter']);
  if (empty($filters)) unset($form['viewfilter']);
  
  $form['viewdownload'] = array(
    '#type' => 'fieldset',
    '#title' => t('Download as'),
  );

  $form['viewdownload']['webpreview'] = array(
    '#type' => 'submit',
    '#value' => 'Web Preview',
  );
  
  $form['viewdownload']['downloadcsv'] = array(
    '#type' => 'submit',
    '#value' => 'CSV',
  );

  return $form;
}

function theme_datacatalog_datadownload_form($form) {
  $output = '';
  foreach(element_children($form) as $element) {

  switch($element) {
    case 'fieldselection':  //format these as a table
      //$header = array('Selected', 'Definition', 'Units');
      $header = array('Selected fields:', 'Units');

      $allrows = array();
      foreach(element_children($form['fieldselection']) as $key ){

        $newrow = array();
        foreach (element_children($form['fieldselection'][$key]) as $col) {
          $newrow[] = drupal_render($form['fieldselection'][$key][$col]);
        }

        $newrow[] = drupal_render($form['fieldselecteion'][$key]);
        $allrows[] = $newrow;
      }

      $table = theme('table', $header, $allrows);
      $output .= $table;
      break;

    default: //do the normal drupal thing
#      $output .= $form[$element]['#prefix'];
      $output .= drupal_render($form[$element]);
#     $output .= $form[$element]['#suffix'];
      break;
  }//switch
  }//foreach
  return $output;
}

function datacatalog_datadownload_form_submit($form, &$form_state) {
  if (!empty($form['auditinfo'])) {
    // They've submitted an audit form. (pre-selection)
    unset($_SESSION['audit']['cookie_sent']);
    $_SESSION['audit'] = array('form' => $form, 'values' => $form_state['values']);
  } else {
    // They've submitted a selection form.  Give them results.
    $_SESSION['datadownload'] = array('form' => $form, 'values' => $form_state['values']);
    $form['#redirect'] = 'data/download';
  }
  drupal_redirect_form($form);
}

function datacatalog_dataresults($df_nid = NULL) {
  //dpm($df_nid);
  $GLOBALS['devel_shutdown'] = FALSE; //suppress devel module footer

  if (empty($df_nid)) {
    $values = $_SESSION['datadownload']['values'];
    $input = $_SESSION['datadownload'];
    $df_nid =  $input['form']['#datafile_nid'];
  } else {
    if (empty($_SESSION['audit'])) {
      $_SESSION['audit'] = 'direct_download_skip';
    }

    /* What follows are ugly hacks to extract variable list from datadownload_form (filter) code path */
    $form_state = array();
    $form = datacatalog_datadownload_form($form_state, $df_nid);
    $input['form'] = $form;
    $almostvalues = element_children($form['fieldselection']);
    foreach($almostvalues as $key) {
      $value = $form['fieldselection'][$key];
      unset($value['0']);
      $field_name = element_children($value);
      $values[reset($field_name)] = 1;
    }
  }
  $df_node = node_load($df_nid);

  $db_source = _get_querysource($df_node);
  $datafile = strtolower($df_node->title);
  $datafile_link = l($df_node->title, "node/" . $df_node->nid );
  if(empty($db_source)) {
    drupal_set_message("Datacatalog Error: Data source for $datafile_link unavailable.", 'error');
    return '';
  }
  
  foreach($values as $key => $value) {
    $newkey = preg_replace('/^chk_/','',$key);
    if ($key != $newkey) {
      if (!empty($value)) {
        $field_names[] = $newkey;
      }
      $allnames[] = $newkey;
    }
  }

  if (empty($field_names)) {
    $field_names = $allnames; //if nothing selected, return everything
  }

  $export_type = $input['values']['op'];
  if(empty($export_type)) $export_type = 'CSV';
  switch($export_type) {
    case 'Web Preview':
      $limit_sql = ' LIMIT 500';
      break;
  }

  assert(!empty($field_names));
  $allfields = implode(", ", $field_names);
  $sql = "SELECT $allfields from $db_source";

  $viewfilter = $input['form']['viewfilter'];
  $form_filters = element_children($viewfilter);

  if (!empty($form_filters)) {
    $first_condition = true;
    foreach($form_filters as $filter_key) {
      $filter = $viewfilter[$filter_key]; 
      unset($filter['#post']);
      
      $attribute_name = preg_replace('/^filter_/', '', $filter_key);
      $ftype = $filter['#filter_type'];

      //skip empty filter values
      $filter_values = $values[$filter_key];
      
      if (is_array($filter_values)) {
        $first_val = reset($filter_values);
      } else {
        $first_val = $filter_values;
      }
      $trimmed_value = trim($first_val);
      if ($trimmed_value === false) continue;

      if ($ftype == 'select') {
        $selected = $values[$filter_key];
        if (empty($selected)) continue;

        $options = $filter['#options'];

        $in_str = '';
        foreach ($selected as $selection) {
          $in_str .= "'" . $options[$selection] . "',";
        }
        $in_str = substr($in_str,0,-1); //trim trailing comma
        if ($first_condition) {
          $sql .= ' WHERE'; $first_condition = false;
        } else $sql .= ' AND';
        $sql .= " $attribute_name IN ($in_str)";

      } elseif ($ftype == 'date_from') {
        // date range min
        $attribute_name = preg_replace('/_from$/', '', $attribute_name);
        if ($first_condition) {
          $sql .= ' WHERE'; $first_condition = false;
        } else $sql .= ' AND';
        $sql .= " $attribute_name >= '" . $values[$filter_key] . "'";
      } elseif ($ftype == 'date_to') {
        //date range max
        $attribute_name = preg_replace('/_to$/', '', $attribute_name);
        if ($first_condition) {
          $sql .= ' WHERE'; $first_condition = false;
        } else $sql .= ' AND';
        $sql .= " $attribute_name <= '" . $values[$filter_key] . "'";
      } elseif ($ftype == 'numericrange') {
        if ($first_condition) {
          $sql .= ' WHERE'; $first_condition = false;
        } else $sql .= ' AND';

        if (preg_match('/_max$/', $attribute_name)) {
          $lessorgreater = '<=';
        } else {
          $lessorgreater = '>=';
        }
        $attribute_name = preg_replace('/_.?.?.?$/', '', $attribute_name);

        if ($filter['#type'] == 'select') {
          $options = $filter['#options'];
          $inputed_limit = $options[$values[$filter_key]];
        } else {
          $inputed_limit = $values[$filter_key];
        }
        $sql .= " $attribute_name $lessorgreater " . $inputed_limit;

      }
    }

  }
  $sql .= $limit_sql;

  /*for debug purposes
  switch($export_type) {
    case 'Web Preview':
      $output .= "<p>$sql</p>";
  }*/

 	$result = db_query($sql);

  switch($export_type) {
    /* grr, hopefull we don't need this 
    case 'XLS':
      export_to_xls($result);
      return NULL;
    */
    case 'CSV':
      $filename = preg_replace('/[ ;:]/','_',$datafile) . '.csv';
      export_to_csv($result, $filename);
      return NULL;

    case 'Web Preview':
      $rows = array();
      while ($row = db_fetch_array($result)) {
        $rows[] = $row;
      }
      $count = count($rows);
      $datafile_link = l($df_node->title, "node/" . $df_node->nid );
      if ($count == 500)
        $output .= "Showing first $count records from $datafile_link";
      else
        $output .= "Showing $count records from $datafile_link";

      $table = theme('table', $field_names, $rows);

      $output .= $table;

      return $output;
  }
}

function export_to_csv($result, $filename="myfile.csv"){
  set_time_limit(0); //don't time out!
  drupal_set_header('Content-Type: text/csv');
  drupal_set_header('Content-Disposition: attachment; filename=' . $filename);
  $count = mysql_num_fields($result); 
  for($i = 0; $i < $count; $i++){
    $header[] = mysql_field_name($result, $i);
  }
  print implode(',', $header) ."\r\n";

  while($row = db_fetch_array($result)){
    foreach($row as $value){
    //put quotes around string values only
      if(is_numeric(trim($value)) || strlen(trim($value))< 1){ //check for numbers and empty fields
    	$values[] = trim($value);
      } 
      elseif(is_numeric(strtotime($value))) { //check for dates
      	$values[] = trim($value);
      }
      else {  //put quotes around text
      //#$values[] = '"' . str_replace('"', '""', decode_entities(strip_tags($value))) . '"';
      $values[] = '"' . str_replace('"', '""', decode_entities($value)) . '"';
      }
    }
    print implode(',', $values) ."\r\n";
    unset($values);
  }
}
