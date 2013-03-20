<?php
    // $Id: views-bonus-eml-export-eml.tpl.php, v 3.0 2012/08/17 eneko1907 Exp $
    /*
    * Template to display a view as an eml.
    */                                                                

    require_once("eml_variables.php");

    /*
    * 3) create and populate a template
    */
    $urlBase = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    print '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";

?>

<eml:eml xmlns:eml='eml://ecoinformatics.org/eml-2.1.0'
    xmlns:stmml='http://www.xml-cml.org/schema/stmml-1.1'
    xmlns:ds='eml://ecoinformatics.org/dataset-2.1.0'
    xmlns:xs='http://www.w3.org/2001/XMLSchema'
    xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
    xsi:schemaLocation='eml://ecoinformatics.org/eml-2.1.0 http://nis.lternet.edu/schemas/EML/eml-2.1.0/eml.xsd'
    packageId='<?php print($package_id)?>'
    system='knb'>

<access scope="document" order="allowFirst" authSystem="knb">
    <?php

        //TODO: access tag group - from config file, or from site variable, or... here is my take !!!
        eml_indent(1);
        if ($acr) {
            eml_open_tag('allow');
            $access_string = "uid=$acr, o=lter, dc=ecoinformatics, dc=org";
            eml_print_line('principal',  $access_string);
            $access_string = 'all';
            eml_print_line('permission', $access_string);
            eml_close_tag('allow');
        }
    ?>
    <allow>
        <principal>public</principal>
        <permission>read</permission>
    </allow>
</access>
<?php
eml_indent(-1);
/*
* dataset start
*/


eml_open_tag('dataset');
eml_print_all_values('shortName', $dataset_short_name);
eml_print_line('title', $dataset_title);

// Person refs start
eml_print_person('creator', $dataset_node['dataset_owner']);
// metadataProvider from settings
eml_print_person('metadataProvider', $metadata_provider_arr);

$associated_party_arr = array (
'data manager'         => 'dataset_datamanager',
'field crew'           => 'dataset_fieldcrew',
'labcrew'              => 'dataset_labcrew',
'associate researcher' => 'dataset_ext_assoc',
);

if ($associated_party_arr) {
    foreach ($associated_party_arr as $key => $value) {
        if (isset($dataset_node[$value][0]->nid)) {
            eml_print_person($key, $dataset_node[$value]);
        }
    }
}    

//pubDate
if (strtotime($dataset_publication_date[0]['value'])) {
    $dataset_publication_date = date("Y",  strtotime($dataset_publication_date[0]['value'])); 
    eml_print_all_values('pubDate',  $dataset_publication_date);
}

eml_print_line('language', $last_settings['last_language']);

if ($dataset_abstract[0]['value']) {
    eml_open_tag('abstract');
    eml_open_tag('section');
    eml_print_all_values('para', $dataset_abstract);
    eml_close_tag('section');
    eml_close_tag('abstract');
}

//Check for recognized keyword vocabularies
$all_vocabularies = taxonomy_get_vocabularies();
$keyword_vids = array();
foreach ($all_vocabularies as $voc) {
    // terms in drupal 6 taxonomy core
    $voc_terms = taxonomy_node_get_terms_by_vocabulary($dataset->node, $voc->vid);
    $keywords = array();
    foreach ($voc_terms as $term){
        $keywords[] = $term->name;


    }
    if(!empty($keywords)) {
        natcasesort($keywords);
        eml_open_tag('keywordSet');
        //eml_print_all_values('keyword', $keywords);
        foreach ($keywords as $keyword){
            eml_print_line('keyword', $keyword);
        }
        eml_print_line('keywordThesaurus',$voc->name );
        eml_close_tag('keywordSet');
    }
    // terms in drupal 6 content taxonomy cck
    //  i have all the term vids in $dataset_keywordscck, 
    //  need the subset of terms in this vocabulary
    unset($terms);
    foreach ( $dataset_keywordscck as  $keywordcck_id){
        $terms=keywordscck_node_get_terms_by_vocabulary($voc->vid,$keywordcck_id);
    }
    if(!empty($terms)) {
        eml_open_tag('keywordSet');
        foreach ( $dataset_keywordscck as  $keywordcck_id){    
            $terms=keywordscck_node_get_terms_by_vocabulary($voc->vid,$keywordcck_id);
            foreach ($terms  as  $cckkeyword){
                eml_print_all_values('keyword',$cckkeyword);
            }
        }
        eml_print_line('keywordThesaurus',$voc->name );
        eml_close_tag('keywordSet');
    }
}

if ($dataset_add_info[0]['value']) {
    eml_open_tag('additionalInfo');
    eml_open_tag('para');
    eml_print_all_values('literalLayout', $dataset_add_info);
    eml_print_all_values('related_links', $dataset_related_links);
    eml_close_tag('para');
    eml_close_tag('additionalInfo');
}

// $intellectual_rights from config file
eml_open_tag('intellectualRights');
eml_open_tag('section');
eml_print_line('title', 'Data Policies');
eml_open_tag('para');
eml_print_line('literalLayout', $last_settings['last_intellectual_rights']);
eml_close_tag('para');
eml_close_tag('section');
eml_close_tag('intellectualRights');

// distribution element
//at this place it should only be an information link. I am commenting out the old code in case someone wants it back (CG)

// if there is one and only one file take path from it
//$dataset_datafile_path = $dataset_node['dataset_datafiles'][0]['datafile']->field_data_file[0]['filepath'];
//if (isset($dataset_datafile_path) && !isset($dataset_node['dataset_datafiles'][1])) {
//  eml_open_tag('distribution');
//    eml_open_tag('online');
//      eml_print_line('url', $urlBase . $dataset_node['dataset']->path, 'function', 'download');
//    eml_close_tag('online');
//  eml_close_tag('distribution');
//}else{

eml_open_tag('distribution');
eml_open_tag('online');
eml_print_line('url', 'http://' . $_SERVER['HTTP_HOST'] . '/node/'. $dataset_node['dataset']->nid, 'function', 'information');
eml_close_tag('online');
eml_close_tag('distribution');	
//}

if ($dataset->geodesc || $dataset->has_coor() || $dataset->site_ref || $dataset->beg_end_date) {
    eml_open_tag('coverage');

    if ($dataset->site_ref) {
        eml_print_geographic_coverage($dataset_node['dataset_site']);
    }elseif($dataset->geodesc || $dataset->has_coor()) {
        //NTL added field_dataset_description and field_dataset_coor_# to the dataset content type
        eml_open_tag('geographicCoverage');
        if($dataset->geodesc) eml_print_line('geographicDescription', $dataset->geodesc);
        if ($dataset->has_coor()) {
            eml_open_tag('boundingCoordinates');
            eml_print_line('westBoundingCoordinate', $dataset->coor_w);
            eml_print_line('eastBoundingCoordinate',  $dataset->coor_e);
            eml_print_line('northBoundingCoordinate', $dataset->coor_n);
            eml_print_line('southBoundingCoordinate', $dataset->coor_s);
            eml_close_tag('boundingCoordinates');
        }
        eml_close_tag('geographicCoverage');
    }

    if ($dataset->beg_end_date) {
        //    eml_print_temporal_coverage($datafile_date);
        eml_print_temporal_coverage($dataset_beg_end_date);
    }

    // taxonomic coverage here
    eml_close_tag('coverage');
}

if ($dataset_purpose[0]['value']) {
    eml_open_tag('purpose');
    eml_open_tag('para');
    eml_print_all_values('literalLayout', $dataset_purpose);
    eml_close_tag('para');
    eml_close_tag('purpose');
}

if ($dataset_maintenance[0]['value']) {
    eml_open_tag('maintenance');
    eml_open_tag('description');
    eml_open_tag('para');
    eml_print_all_values('literalLayout', $dataset_maintenance);
    eml_close_tag('para');
    eml_close_tag('description');
    eml_close_tag('maintenance');
}

if (isset($dataset_node['dataset_contact'][0]->nid)) {
    eml_print_person('contact', $dataset_node['dataset_contact']);
}
else {
    eml_print_person('contact', $metadata_provider_arr);
}
//publisher, specific for every given site from eml_config page (variable),
eml_print_person('publisher', $publisher_arr);
eml_print_line('pubPlace', $eml_site_name);

if ($dataset_methods[0]['value']) {
    eml_open_tag('methods');
    eml_open_tag('methodStep');
    eml_open_tag('description');
    if(is_array($dataset_methods)){// NTL has multiple methods fields
        foreach($dataset_methods as $methodstep){
            eml_open_tag('section');
            eml_open_tag('para');    //  ISG  need to translate HTML to EML markup)
            eml_print_all_values('literalLayout',$methodstep['value']);
            eml_close_tag('para');
            eml_close_tag('section');
        }
    }else{
        eml_open_tag('section');
        eml_open_tag('para');    //  ISG  need to translate HTML to EML markup)
        eml_print_all_methods('literalLayout', $dataset_methods);
        eml_close_tag('para');
        eml_close_tag('section');
    }
    eml_close_tag('description');
    if (isset($dataset_instrumentation[0]['value'])) {
        eml_print_all_values('instrumentation', $dataset_instrumentation);
    }
    eml_close_tag('methodStep');
    if (isset($dataset_quality[0]['value'])) {
        eml_open_tag('qualityControl');
        eml_open_tag('description');
        eml_open_tag('para');
        eml_print_all_values('literalLayout', $dataset_quality);
        eml_close_tag('para');
        eml_close_tag('description');
        eml_close_tag('qualityControl');
    }
    eml_close_tag('methods');
}

//TODO:  project (from CCT research_project). !!! ISG

// Data_file start
unset($file_var_array);
if ($dataset_node['dataset_datafiles'] &&    $dataset_node['dataset_datafiles'][0]['datafile']->nid) {
    foreach ($dataset_node['dataset_datafiles'] as $file_var_array) {
        // Collect all data_file values here to use in a conditions  
        $file_data_file       = $file_var_array['datafile']->field_data_file;
        $datafile_description = $file_var_array['datafile']->field_datafile_description;
        $file_num_header_line = $file_var_array['datafile']->field_num_header_line;
        $file_num_footer_lines= $file_var_array['datafile']->field_num_footer_lines;
        $file_record_delimiter= $file_var_array['datafile']->field_record_delimiter;
        $file_orientation     = $file_var_array['datafile']->field_orientation;
        $file_delimiter       = $file_var_array['datafile']->field_delimiter;
        $file_quote_character = $file_var_array['datafile']->field_quote_character;
        $datafile_date        = $file_var_array['datafile']->field_beg_end_date;
        $file_instrumentation = $file_var_array['datafile']->field_instrumentation;
        $file_methods         = $file_var_array['datafile']->field_methods;
        $file_quality         = $file_var_array['datafile']->field_quality;   
        $file_entity_name     = $file_var_array['datafile']->field_datafile_entity_name[0]['value'];
        $file_external_source = $file_var_array['datafile']->field_datafile_external_source[0]['value'];
        $file_title           = $file_var_array['datafile']->title;
        $file_archive_url     = $file_var_array['datafile']->field_datatable_archiveurl[0]['value'];// NTL specific     
        eml_open_tag('dataTable');

        if ( !empty($file_entity_name)) { 
            eml_print_line('entityName', $file_entity_name);
        } elseif ( is_array($file_data_file) && !empty($file_data_file[0])) {
            foreach ($file_data_file as $file_data) {
                eml_print_line('entityName', $file_data['filename']);
            }
        } else {
            eml_print_line('entityName', $file_title);
        }

        eml_print_all_values('entityDescription', $datafile_description);

        eml_open_tag('physical');

        if (is_array($file_data_file) && !empty($file_data_file[0])) {
            foreach ($file_data_file as $file_data) {
                eml_print_line('objectName', $file_data['filename']);
            }
        } elseif (!empty($file_entity_name)) {
            //EML validation won't accept underscores in the objectName string
            $file_entity_name = preg_replace('/_/', '', $file_entity_name);
            eml_print_line('objectName', $file_entity_name);
        } else {
            eml_print_line('objectName', $file_title);
        }
        eml_open_tag('dataFormat');
        // Here some tags are mandatory: textFormat, attributeOrientation,
        // simpleDelimited, fieldDelimiter, complex
        eml_open_tag('textFormat');
        eml_print_all_values('numHeaderLines',       $file_num_header_line);
        eml_print_all_values('numFooterLines',       $file_num_footer_lines);
        eml_print_all_values('recordDelimiter',      $file_record_delimiter);
        if (isset($file_orientation[0]['value'])) {		 
            eml_print_all_values('attributeOrientation', $file_orientation);
        }else{
            eml_print_all_values('attributeOrientation', 'column');		
            print ('<!--the orientation was not set, default to column-->');
        }
        eml_open_tag('simpleDelimited');                 
        $file_delimiter[0]['value'] ? $file_delimiter = $file_delimiter[0]['value'] : $file_delimiter = ',';        
        eml_print_line('fieldDelimiter',  $file_delimiter);
        eml_print_all_values('quoteCharacter',     $file_quote_character);
        eml_close_tag('simpleDelimited');
        eml_close_tag('textFormat');
        eml_close_tag('dataFormat');
        if ($file_archive_url){
            eml_open_tag('distribution');
            eml_open_tag('online');
            eml_print_line('url',$file_archive_url,'function','download');
            eml_close_tag('online');
            eml_close_tag('distribution');
        }    
        elseif ($file_data_file && $file_data_file[0]['filepath']) {
            foreach ($file_data_file as $file_data) {
                eml_open_tag('distribution');
                eml_open_tag('online');
                //  eml_print_line('url', $urlDASBase . $dataset_id_sev[0]['value'] .'%26urlTail=' . $file_data['filepath']);// NO DAS
                eml_print_line('url', $urlBase .  $file_data['filepath'], 'function','download');
                eml_close_tag('online');
                eml_close_tag('distribution');
            }
        }
        eml_close_tag('physical');

        if (isset($file_var_array['datafile_sites'][0]['site_node']->nid) || isset($datafile_date[0]['value'])) {
            eml_open_tag('coverage');
            eml_print_geographic_coverage($file_var_array['datafile_sites']);
            eml_print_temporal_coverage($datafile_date);
            // taxonomic coverage here
            eml_close_tag('coverage');
        }
        if ($file_methods[0]['value']) {
            eml_open_tag('methods');
            eml_open_tag('methodStep');
            eml_open_tag('description');  
            eml_open_tag('section');
            eml_open_tag('para'); 
            eml_print_all_values('literalLayout', $file_methods);
            eml_close_tag('para');
            eml_close_tag('section');
            eml_close_tag('description');
            if (isset($file_instrumentation[0]['value'])) {
                eml_print_all_values('instrumentation', $file_instrumentation);
            }
            eml_close_tag('methodStep');
            if (isset($file_quality[0]['value'])) {
                eml_open_tag('qualityControl');
                eml_open_tag('description');
                eml_open_tag('para');
                eml_print_all_values('literalLayout', $file_quality);
                eml_close_tag('para');
                eml_close_tag('description');
                eml_close_tag('qualityControl');
            }
            eml_close_tag('methods');
        }

        // Variables start
        eml_open_tag('attributeList');
        foreach ($file_var_array['variables'] as $var_node) {
            $var = new EMLVariable($var_node);
            $code_definitions=$var->code_definition;  //maybe !!
            eml_open_tag('attribute');
            if (!isset($var->label)) {
                eml_print_all_values('attributeName', $var->label);

            }else{
                eml_print_line('attributeName', $var->title);
            }
            if (!isset($var->title)) {
                eml_print_line('attributeLabel', $var->title);
            } else {
                eml_print_line('attributeLabel', $var->name);//NTL
            }

            eml_print_all_values('attributeDefinition', $var->definition);
            $code_definitions=$var_node->field_code_definition;
            if (!is_array($code_definitions)){
                $code_definitions=array($code_definitions);
            }
            $missing_value_definitions=$var_node->field_var_missingvalues;

            if (!is_array($missing_value_definitions)){
                $missing_value_definitions=array($missing_value_definitions);
            }
            //check if formatstring present (if so, it is a date)
            if ($var->formatstring) {
                eml_print_all_values('storageType', 'date');
                eml_open_tag('measurementScale');
                eml_open_tag('dateTime');
                eml_print_all_values('formatString', $var->formatstring);
                eml_close_tag('dateTime');
                //check if there is a unit (it means it is a ratio)
            }elseif  ($var->unit ) {
                eml_open_tag('measurementScale');
                eml_open_tag('ratio');
                eml_open_tag('unit');
                list($is_standard,$eml_unit) = custom_unit_lookup($var->unit);
                if ($is_standard) {
                    eml_print_all_values('standardUnit', $var->unit);
                } else {
                    $stmmlunits[] = $eml_unit;   // accumulate custom units, already stmml formatted.
                    eml_print_all_values('customUnit', $var->unit);
                } 
                eml_close_tag('unit'); 
                if ($var->precision) {
                    eml_print_all_values('precision', $var->precision);
                }
                eml_open_tag('numericDomain');
                eml_print_line('numberType', $realNumber);
                if ($var->maximum || $var->minimum) {
                    eml_open_tag('bounds');
                    eml_print_line('minimum', $var->minimum,'exclusive','false');
                    eml_print_line('maximum', $var->maximum,'exclusive','false');
                    eml_close_tag('bounds');
                }
                eml_close_tag('numericDomain');
                eml_close_tag('ratio');
                //check if the code_definition is real
            } elseif (substr_count($code_definitions[0][value], '=')>0) {
                eml_print_all_values('storageType', 'string');
                eml_open_tag('measurementScale');
                eml_open_tag('nominal');
                eml_open_tag('nonNumericDomain');
                eml_open_tag('enumeratedDomain');
                foreach ($code_definitions as $code_definition) {
                    $parts = explode('=', $code_definition[value]);
                    eml_open_tag('codeDefinition');
                    eml_print_line('code', $parts[0]);
                    eml_print_line('definition', $parts[1]);
                    eml_close_tag('codeDefinition');
                }
                eml_close_tag('enumeratedDomain');
                eml_close_tag('nonNumericDomain');
                eml_close_tag('nominal');
            } else {  // any other case is a nonnumeric domain
                eml_print_all_values('storageType', 'string');
                eml_open_tag('measurementScale');
                eml_open_tag('nominal');
                eml_open_tag('nonNumericDomain');
                eml_open_tag('textDomain');
                eml_print_all_values('definition', $var->definition);
                eml_close_tag('textDomain');
                eml_close_tag('nonNumericDomain');
                eml_close_tag('nominal');
            }  
            eml_close_tag('measurementScale');
            if (substr_count($missing_value_definitions[0]['value'], '=')>0) {
                foreach ($missing_value_definitions as $missingvalue) {
                    $parts = explode('=', $missingvalue[value]);
                    eml_open_tag('missingValueCode');
                    eml_print_line('code',       $parts[0]);
                    eml_print_line('codeExplanation', $parts[1]);
                    eml_close_tag('missingValueCode');
                }
            }
            eml_close_tag('attribute');
        } //end foreach variable
        eml_close_tag('attributeList');
        eml_close_tag('dataTable');
    } //end foreach table
} // end if datafile check
eml_close_tag('dataset');

if(is_array ($stmmlunits)){
    eml_open_tag('additionalMetadata');
    eml_open_tag('metadata');
    eml_open_tag('stmml:unitList xsi:schemaLocation="http://www.xml-cml.org/schema/stmml-1.1 http://nis.lternet.edu/schemas/EML/eml-2.1.0/stmml.xsd"');
    $stmmlunits = array_unique($stmmlunits);
    foreach ($stmmlunits as $stmmlunit){
        // eml_print_line('stmml:unit'  $stmmlunit);  //Wouldnt work..
        print "<stmml:unit " .  $stmmlunit . "\n";
    }
    eml_close_tag('stmml:unitList');	
    eml_close_tag('metadata');
    eml_close_tag('additionalMetadata');
} //end if stmmlunits
eml_indent(1);
eml_close_tag('eml:eml');
