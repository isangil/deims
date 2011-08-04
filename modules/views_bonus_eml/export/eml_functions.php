<?php
// $Id: views-bonus-eml-export-eml-functions.tpl.php, v 1.0 2010-11-29 ashipunova Exp $
// TODO add @file etc

/*
 * public functions and variables
 * An extra variables in the beginning of some functions are there, 
 * because field names could change, easier to keep them in fewer places
 *
 */

global $eml_indent; $eml_indent = 0;
function eml_indent ($inc = 0) {
  global $eml_indent;
  if ($inc < 0) $eml_indent += $inc;
  echo str_repeat("  ", $eml_indent);
  if ($inc > 0) $eml_indent += $inc;
}

function eml_value($variable) {
  if (isset($variable[0]['value'])) {
    $items = array();
    foreach ($variable as $inner_array);
        $items[] = $inner_array['value'];
    if (count($items) > 1)
      return $items;
    else return $items[0];
  }

  if (!is_array($variable))
    return $variable;

  $parent = $variable;
  @($child = reset($parent));
  while (is_array($parent)) {
    if (count($parent) > 1)
      return $parent;

    $parent = $child;
    if (isset($parent['value'])) {
      $child = $parent['value'];
    } else {
      @($child = reset($parent));
    }
  }
  if (!is_array($parent)) {
    return $parent;
  } else if (!empty($child)) {
    return $child;
  } else {
   // drupal_set_message("eml_view: could not determine value for: $variable", 'error');
    return NULL;
  }
}
function prepare_settings() {
  unset($last_settings);

  $default_setting = '';
  $last_settings   = array (
    'last_acronym'               => variable_get('eml_settings_acronym',                $default_setting),
    'last_language'              => variable_get('eml_settings_language',               $default_setting),
    'last_intellectual_rights'   => variable_get('eml_settings_intellectual_rights',    $default_setting),
    'last_data_policies'         => variable_get('eml_settings_data_policies',          $default_setting),
    'last_metadata_provider_ref' => variable_get('eml_settings_metadata_provider_ref',  $default_setting),
    'last_publisher_ref'         => variable_get('eml_settings_publisher_ref',          $default_setting),
  );

  return $last_settings;
}

// add allowed HTML tags here
function eml_strip_tags($content = '') {
  $content = str_replace('&nbsp;', ' ', $content);  
  $content = str_replace('&amp;', ' and ', $content); 
  $content = str_replace(' & ', ' and ', $content); 
//  return strip_tags($content, '<p><h1><h2><h3><h4><h5><a><pre><para>');
  return strip_tags($content, '<para>');
}

function eml_open_tag($tag) {
  print eml_indent(1) . '<' . $tag . ">\n";
}

function eml_close_tag($tag) {
  print eml_indent(-1) . '</' . $tag . ">\n";
}

function eml_print_line($label, $content, $attribute_name = '', $attribute_value = '') {
  if (trim($content)) {
    $attribute_value ? $attribute = ' ' . $attribute_name . '="' . $attribute_value . '"' : $attribute = '';
    
    print eml_indent() . '<' . $label .  $attribute . '>' . eml_strip_tags($content) . '</' . $label . ">\n";
  }
}

function eml_print_all_values($tag, $content) {
  $values = eml_value($content);
  if (!is_array($values))
    $values = array($values);

  foreach ($values as $inner) {
    eml_print_line($tag, eml_strip_tags($inner));
  }

}

function eml_print_all_methods($tag, $content) {
  
  if (!is_array($content))
    $content = array($content);

  foreach ($content as $inner) {
    eml_print_line($tag, eml_strip_tags($inner['value']));
  }

}

function eml_print_person($person_tag, $content) {
  if ($content[0]->nid) {
    foreach ($content as $person_node) {
      $person_first_name    = $person_node->field_person_first_name;
      $person_last_name     = $person_node->field_person_last_name;
      $person_organization  = $person_node->field_person_organization;
      $person_address       = $person_node->field_person_address;
      $person_city          = $person_node->field_person_city;
      $person_state         = $person_node->field_person_state;
      $person_zipcode       = $person_node->field_person_zipcode;
      $person_country       = $person_node->field_person_country;
      $person_phone         = $person_node->field_person_phone;
      $person_fax           = $person_node->field_person_fax;
      $person_email         = $person_node->field_person_email;
      $person_personid      = $person_node->field_person_personid;
      $person_role_arr      = $person_node->field_person_role;
      $person_role          = $person_role_arr[0]['value'];

      $not_show_role        = array ('metadataProvider', 'creator', 'contact', 'publisher');

      if (in_array($person_tag, $not_show_role)) {
        eml_open_tag($person_tag);
      } else {
        eml_open_tag('associatedParty');
      }
      if($person_last_name[0]['value']){
        eml_open_tag('individualName');
          eml_print_all_values('givenName',        $person_first_name);
          eml_print_all_values('surName',          $person_last_name);
        eml_close_tag('individualName');
      }
      if ($person_organization[0]['value']) {
        eml_print_all_values('organizationName',       $person_organization);
      }
      if ($person_address[0]['value'] ||
          $person_city[0]['value']    ||
          $person_country[0]['value']) {
        eml_open_tag('address');
          eml_print_all_values('deliveryPoint',      $person_address);
          eml_print_all_values('city',               $person_city);
          eml_print_all_values('administrativeArea', $person_state);
          eml_print_all_values('postalCode',         $person_zipcode);
          eml_print_all_values('country',            $person_country);
        eml_close_tag('address');
      }
      eml_print_line('phone', $person_phone[0]['value'],
                                            'phonetype', 'voice');
      eml_print_line('phone', $person_fax[0]['value'],
                                            'phonetype', 'fax');
      if ($person_email[0]['email']) {
        foreach($person_email as $email) {
          eml_print_line('electronicMailAddress', $email['email']);
        }
      }
      eml_print_all_values('userId', $person_personid);
      if (in_array($person_tag, $not_show_role)) {
        eml_close_tag($person_tag);
      } else {
        eml_print_line('role', $person_tag);
        eml_close_tag('associatedParty');
      }
    }
  }
} // end of function "eml_print_person"


function eml_print_temporal_coverage($beg_end_date) {
  if ($beg_end_date[0]['value']) {
    eml_open_tag('temporalCoverage');
    foreach($beg_end_date as $dataset_date) {
      $first_date = preg_replace('/T.*/', '', $dataset_date['value']);
      $second_date = preg_replace('/T.*/', '', $dataset_date['value2']);
      if ($first_date == $second_date) {
         eml_open_tag('singleDateTime');
           eml_print_line('calendarDate', $first_date);
         eml_close_tag('singleDateTime');
      }
      else {
        eml_open_tag('rangeOfDates');
          eml_open_tag('beginDate');
            eml_print_line('calendarDate', $first_date);
          eml_close_tag('beginDate');
          eml_open_tag('endDate');
            eml_print_line('calendarDate', $second_date);
          eml_close_tag('endDate');
        eml_close_tag('rangeOfDates');
      }
    }
    eml_close_tag('temporalCoverage');
  }
} // end of function "eml_print_temporal_coverage"

// take research_site as geographicCoverage
function eml_print_geographic_coverage($content) {
  if (isset($content[0]['site_node']->nid)) {
    foreach ($content as $research_site_node) {
	    $research_site_location   = $research_site_node['site_node']->body;
        $research_site_landform   = $research_site_node['site_node']->field_research_site_landform;
        $research_site_geology    = $research_site_node['site_node']->field_research_site_geology;
        $research_site_soils      = $research_site_node['site_node']->field_research_site_soils;
        $research_site_hydrology  = $research_site_node['site_node']->field_research_site_hydrology;
        $research_site_vegetation = $research_site_node['site_node']->field_research_site_vegetation;
        $research_site_climate    = $research_site_node['site_node']->field_research_site_climate;
        $research_site_history    = $research_site_node['site_node']->field_research_site_history;
        $research_site_siteid     = $research_site_node['site_node']->field_research_site_siteid;
        $research_site_elevation  = $research_site_node['site_node']->field_research_site_elevation;
        $research_site_longitude  = $research_site_node['longitude'];
        $research_site_latitude   = $research_site_node['latitude'];
        if ($research_site_location               ||
		    $research_site_landform[0]['value']   ||
            $research_site_geology[0]['value']    ||
            $research_site_soils[0]['value']      ||
            $research_site_hydrology[0]['value']  ||
            $research_site_vegetation[0]['value'] ||
            $research_site_climate[0]['value']    ||
            $research_site_history[0]['value']    ||
            $research_site_siteid[0]['value']     ||
            $research_site_longitude              ||
            $research_site_latitude               ||
            $research_site_elevation[0]['value']) {
          eml_open_tag('geographicCoverage');
            $geographic_coverage_terms = array (
                                    'Landform',
                                    'Geology',
                                    'Soils',
                                    'Hydrology',
                                    'Vegetation',
                                    'Climate',
                                    'History',
                                    'siteid',
            );       
            $geoDesc = 'Location: '.$research_site_location;
            foreach ($geographic_coverage_terms as $geographic_coverage_term) {
              $geo_var_name = 'research_site_' . strtolower($geographic_coverage_term);
              $geo_var      = $$geo_var_name;
              if (!empty($geo_var[0]['value'])) {
              $geoDesc     .= $geographic_coverage_term . ': ' . $geo_var[0]['value'];
              if ($geographic_coverage_term != end($geographic_coverage_terms)) {
               $geoDesc    .= ', ';
              }
             }                              
            }                              
            eml_print_line('geographicDescription', $geoDesc);

            if ($research_site_longitude || $research_site_latitude) {
              eml_open_tag('boundingCoordinates');
                eml_print_line('westBoundingCoordinate',  $research_site_longitude);
                eml_print_line('eastBoundingCoordinate',  $research_site_longitude);
                eml_print_line('northBoundingCoordinate', $research_site_latitude);
                eml_print_line('southBoundingCoordinate', $research_site_latitude);
              if ($research_site_elevation[0]['value']) {
                  eml_open_tag('boundingAltitudes');
                    eml_print_all_values('altitudeMinimum',  $research_site_elevation);
                    eml_print_all_values('altitudeMaximum',  $research_site_elevation);
					eml_print_all_values('altitudeUnits','meter');
                  eml_close_tag('boundingAltitudes');
              }
              eml_close_tag('boundingCoordinates');
            }
          eml_close_tag('geographicCoverage');
        } // endif; check if values exist
    } // endforeach; research_site_nid
  } // endif; $research_site_nid[0]['nid']
} // end of function eml_print_geographic_coverage

function eml_get_geo($site_nid) {
  unset($geo_lon_lat_point);
    $mysql_connection = db_set_active();
    if (!$mysql_connection) {
      die($errDbConn . mysql_error() . " :: " . mysql_errno());
    }

   $sql = "SELECT X(field_research_site_pt_coords_geo) as longitude,
                 Y(field_research_site_pt_coords_geo) as latitude,
                 AsText(field_research_site_pt_coords_geo) as geo_point
                 FROM {content_type_research_site}
                 WHERE vid=(SELECT max(vid)
                            FROM {content_type_research_site}
                            WHERE nid = '%d')";

  $query = db_query($sql, $site_nid);
  $geo_lon_lat_point =  db_fetch_array($query);
  return $geo_lon_lat_point;
}

  function eml_get_site_information($content) {
    unset($site_nodes);
    foreach ($content as $value) {
      foreach ($value as $site_nid) {
        $site_node = node_load($site_nid);
        $dataset_geo_lon_lat_point = eml_get_geo($site_nid);
        $site_nodes[] = array('site_node' => $site_node,
                              'longitude' => $dataset_geo_lon_lat_point['longitude'],
                              'latitude'  => $dataset_geo_lon_lat_point['latitude'],
                              'geo_point' => $dataset_geo_lon_lat_point['geo_point']);
      }
    }
    return $site_nodes;
  }

function flatten_array($array, $preserve_keys = 0, &$out = array()) {
  if ($array) {
    foreach($array as $key => $child)
        if (is_array($child))
            $out = flatten_array($child, $preserve_keys, $out);
        elseif ($preserve_keys + is_string($key) > 1)
            $out[$key] = $child;
        else
            $out[] = $child;
  }
  return $out;
}

// Url for datafile urls, using Drupal variable
$urlBase = 'http://' . $_SERVER['HTTP_HOST'] . '/';

function custom_unit_lookup($unitname){
  $uniturlbase = "http://unit.lternet.edu/services/unitformat/stmml/unit/name=";
  // query for "standard units"
  $uniturl = $uniturlbase.$unitname."ANDscopeId=1";
  $hdrs =  array( 'http' => array('method' => "GET", 'header' => "Accept: text/xml"));
  $context = stream_context_create ($hdrs);  // set up the context
  $unitoutput = file_get_contents($uniturl,FALSE,$context);
 
  $resultunits=explode('<stmml:unit ',$unitoutput);
  $findme='id="'.$unitname.'"';   

  foreach ($resultunits as $matchunits) {
   $pos = strpos($matchunits,$findme);
   if ($pos !== FALSE) {
	   return array(1,$matchunits);
   }
  }
  // non-standard, but in dictionary
  $uniturl = $uniturlbase.$unitname;
  $unitoutput = file_get_contents($uniturl,FALSE,$context);
  
  $resultunits=explode("<stmml:unit ",$unitoutput);
  foreach ($resultunits as $matchunits) {
   $pos = strpos($matchunits,$findme);
   if ($pos !== FALSE) {
       $matchunits = preg_replace('/<\/stmml:unitList>/','',$matchunits);
	   return array(0,$matchunits);
   }
  }
  // not in dictionary -> return minimalistic construct of unit if no match is evident.
  $unitout=' id="'.$unitname.'"/>';
  return array(0,$unitout);
}
// public functions end
