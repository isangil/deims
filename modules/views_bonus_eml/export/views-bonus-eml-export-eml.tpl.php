<?php
// $Id: views-bonus-eml-export-eml.tpl.php, v 3.0 11/09/10 ashipunova Exp $
/*
 * Template to display a view as an eml.
 */                                                                
 
require_once("eml_variables.php");
 
/*
 * 3) create and populate a template
 */
print '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
?>
<eml:eml xmlns:eml='eml://ecoinformatics.org/eml-2.1.0'
         xmlns:stmml='http://www.xml-cml.org/schema/stmml'
         xmlns:sw='eml://ecoinformatics.org/software-2.1.0'
         xmlns:cit='eml://ecoinformatics.org/literature-2.1.0'
         xmlns:ds='eml://ecoinformatics.org/dataset-2.1.0'
         xmlns:prot='eml://ecoinformatics.org/protocol-2.1.0'
         xmlns:doc='eml://ecoinformatics.org/documentation-2.1.0'
         xmlns:res='eml://ecoinformatics.org/resource-2.1.0'
         xmlns:xs='http://www.w3.org/2001/XMLSchema'
         xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance'
         xsi:schemaLocation='eml://ecoinformatics.org/eml-2.1.0 file://c:/eml/eml.xsd'
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
  eml_print_all_values('pubDate',  $dataset_publication_date);

  eml_print_line('language', $last_settings['last_language']);

  if ($dataset_abstract[0]['value']) {
    eml_open_tag('abstract');
     eml_open_tag('para');
      eml_print_all_values('literalLayout', $dataset_abstract);
     eml_close_tag('para');
    eml_close_tag('abstract');
  }

  // TODO: add if, depend of structure
  //TODO: implement. -P
//        eml_open_tag('keywordSet');
    // dpr($node->taxonomy);
    // eml_print_all_values('keyword', node->taxonomy->term);
    // eml_print_all_values('keywordThesaurus', node->taxonomy->vocabularyName);
//       eml_close_tag('keywordSet');

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

  // if there is one and only one file take path from it
  $dataset_datafile_path = $dataset_node['dataset_datafiles'][0]['datafile']->field_data_file[0]['filepath'];
  if (isset($dataset_datafile_path) && !isset($dataset_node['dataset_datafiles'][1])) {
    eml_open_tag('distribution');
      eml_print_line('url', $urlBase . dirname($dataset_datafile_path));
    eml_close_tag('distribution');
  }

  if ($dataset->geodesc || $dataset->has_coor() || $dataset->site_ref || $dataset->beg_end_date) {
    eml_open_tag('coverage');
    
    if($dataset->geodesc) {
      //NTL added field_dataset_description and field_dataset_coor_# to the dataset content type
      eml_open_tag('geographicCoverage');
      eml_print_line('geographicDescription', $dataset->geodesc);
      if ($dataset->has_coor()) {
        eml_open_tag('boundingCoordinates');
        eml_print_line('westBoundingCoordinate', $dataset->coor_w);
        eml_print_line('eastBoundingCoordinate',  $dataset->coor_e);
        eml_print_line('northBoundingCoordinate', $dataset->coor_n);
        eml_print_line('southBoundingCoordinate', $dataset->coor_s);
        eml_close_tag('boundingCoordinates');
      }
      eml_close_tag('geographicCoverage');
    } elseif ($dataset->site_ref) {
      //(non-NTL) get the info from the referenced Site content type instead
      eml_print_geographic_coverage($dataset_node['dataset_site']);
    }

    if ($dataset->beg_end_date) {
      eml_print_temporal_coverage($datafile_date);
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

  eml_print_person('contact', $dataset_node['dataset_contact']);
  //publisher, specific for every given site from config file,
  eml_print_person('publisher', $publisher_arr);
  eml_print_line('pubPlace', $eml_site_name);

  if ($dataset_methods[0]['value']) {
    eml_open_tag('methods');
      eml_open_tag('methodStep');
        eml_open_tag('description');  
           eml_open_tag('section');
             eml_open_tag('para');    // TODO: !!! ISG in the future, we may need to parse HTML (like h1,h2,h3, and translate it to EML markup)
                                                        //!!! if we could detect paragraphs, and translate them into <para>s, better...
                eml_print_all_values('literalLayout', $dataset_methods);
             eml_close_tag('para');
           eml_close_tag('section');
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
  if ($dataset_node['dataset_datafiles'] && $dataset_node['dataset_datafiles'][0]['datafile']->nid) {
    foreach ($dataset_node['dataset_datafiles'] as $file_var_array) {

      // Collect all data_file values here to use in a conditions  
      $file_data_file         = $file_var_array['datafile']->field_data_file;
      $datafile_description   = $file_var_array['datafile']->field_datafile_description;
      $file_num_header_line   = $file_var_array['datafile']->field_num_header_line;
      $file_num_footer_lines  = $file_var_array['datafile']->field_num_footer_lines;
      $file_record_delimiter  = $file_var_array['datafile']->field_record_delimiter;
      $file_orientation       = $file_var_array['datafile']->field_orientation;
      $file_delimiter         = $file_var_array['datafile']->field_delimiter;
      $file_quote_character   = $file_var_array['datafile']->field_quote_character;
      $datafile_date          = $file_var_array['datafile']->field_beg_end_date;
      $file_instrumentation   = $file_var_array['datafile']->field_instrumentation;
      $file_methods           = $file_var_array['datafile']->field_methods;
      $file_quality           = $file_var_array['datafile']->field_quality;   
      $file_entity_name       = $file_var_array['datafile']->field_datafile_entity_name[0]['value'];
      $file_external_source   = $file_var_array['datafile']->field_datafile_external_source[0]['value'];
      $file_title             = $file_var_array['datafile']->title;

      eml_open_tag('dataTable');

      if ( !empty($field_entity_name)) { 
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
      // Here some tags are obligate: textFormat, attributeOrientation,
      // simpleDelimited, fieldDelimiter, complex
       eml_open_tag('textFormat');
         eml_print_all_values('numHeaderLines',       $file_num_header_line);
         eml_print_all_values('numFooterLines',       $file_num_footer_lines);
         eml_print_all_values('recordDelimiter',      $file_record_delimiter);
         eml_print_all_values('attributeOrientation', $file_orientation);
         eml_open_tag('simpleDelimited');                 
           $file_delimiter[0]['value'] ? $file_delimiter = $file_delimiter[0]['value'] : $file_delimiter = ',';        
           eml_print_line('fieldDelimiter',  $file_delimiter);
           eml_print_all_values('quoteCharacter',     $file_quote_character);
         eml_close_tag('simpleDelimited');
       eml_close_tag('textFormat');
      eml_close_tag('dataFormat');
      if ($file_data_file && $file_data_file[0]['filepath']) {
       foreach ($file_data_file as $file_data) {
         eml_open_tag('distribution');
           eml_print_line('url', $urlBase . $file_data['filepath']);
         eml_close_tag('distribution');
       }
      }
      eml_close_tag('physical');

      if (isset($file_var_array['datafile_sites'][0]['site_node']->nid) || isset($datafile_date[0]['value'])) {
        eml_open_tag('coverage');
        //     eml_print_geographic_coverage($file_var_array['datafile_sites']);

        eml_open_tag('geographicCoverage');
        eml_print_line('geographicDescription', $dataset->geodesc);
        if ($dataset->has_coor()) {
          eml_open_tag('boundingCoordinates');
          eml_print_line('westBoundingCoordinate', $dataset->coor_w);
          eml_print_line('eastBoundingCoordinate',  $dataset->coor_e);
          eml_print_line('northBoundingCoordinate', $dataset->coor_n);
          eml_print_line('southBoundingCoordinate', $dataset->coor_s);
          eml_close_tag('boundingCoordinates');
        }
        eml_close_tag('geographicCoverage');


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
      // Take variables here to use in conditions
      eml_open_tag('attributeList');

      foreach ($file_var_array['variables'] as $var_node) {
        if ($var_node->nid) {                                     
          $var_title              = $var_node->title;
          $var_name               = eml_value($var_node->field_var_name);
          $attribute_label        = $var_node->field_attribute_label;
          $var_definition         = $var_node->field_var_definition;
          $attribute_formatstring = $var_node->field_attribute_formatstring;
          $attribute_maximum      = $var_node->field_attribute_maximum;
          $attribute_minimum      = $var_node->field_attribute_minimum;
          $attribute_precision    = $var_node->field_attribute_precision;
          $attribute_unit         = $var_node->field_attribute_unit;
          $code_definitions       = Array();
          if (isset($var_node->field_code_definition)) {
            $code_definitions     = $var_node->field_code_definition;
          }     
          $var_missingvalues      = Array();
          if (isset($var_node->field_var_missingvalues)) {
            $var_missingvalues    = $var_node->field_var_missingvalues;
          }

            eml_open_tag('attribute');
              if (!empty($var_name)) {
                eml_print_line('attributeName',    $var_name);
              } else {
                eml_print_line('attributeName',    $var_title);
              }
              eml_print_all_values('attributeLabel',      $attribute_label);
              eml_print_all_values('attributeDefinition', $var_definition);

              if (true || $var_definition == 'replicate number') {
                (array(
                $var_title              ,
                $attribute_label        ,
                $var_definition         ,
                $attribute_formatstring ,
                $attribute_maximum      ,
                $attribute_minimum      ,
                $attribute_precision    ,
                $attribute_unit         ,
                $code_definitions     ,
                $var_missingvalues    ,)
                );
              }
              if ($attribute_formatstring[0]['value'] ||
                 $attribute_maximum[0]['value'] ||
                 $attribute_minimum[0]['value'] ||
                 $attribute_precision[0]['value'] ||
                 $attribute_unit[0]['value']) {
              eml_open_tag('measurementScale');
              if ($attribute_formatstring[0]['value']) {
                eml_open_tag('dateTime');
                 eml_print_all_values('formatString',   $attribute_formatstring);
                eml_close_tag('dateTime');
              }    
            // ratio:     
                                         
            // if ($attribute_maximum[0]['value'] ||
            //     $attribute_minimum[0]['value'] ||
            //     $attribute_precision[0]['value'] ||
            //     $attribute_unit[0]['value']) {
            //   eml_open_tag('ratio');
            //   if ($attribute_unit[0]['value']) {
            //     eml_open_tag('unit');
            //       eml_print_all_values('customUnit', $attribute_unit);
            //     eml_close_tag('unit');
            //   }
            //   if ($attribute_precision[0]['value']) {
            //     eml_print_all_values('precision',      $attribute_precision);
            //   }
            //   if ($attribute_maximum[0]['value'] ||
            //       $attribute_minimum[0]['value']) {
            //     eml_open_tag('numericDomain');  
            //       eml_print_all_values('numberType', $realNumber); 
            //       eml_open_tag('bounds');
            //         eml_print_all_values('maximum',    $attribute_maximum);
            //         eml_print_all_values('minimum',    $attribute_minimum);
            //       eml_close_tag('bounds');
            //     eml_close_tag('numericDomain');
            //   }
            //   eml_close_tag('ratio');
            // }         
            // TODO: ask Inigo if he want 'numericDomain' always, even if it is empty. If not - use code just above this line. What to check here? 

              if ($attribute_unit[0]['value'] && $attribute_unit[0]['value'] != 'dimensionless' ) {
                eml_open_tag('ratio');
                  eml_open_tag('unit');
                    eml_print_all_values('customUnit', $attribute_unit);
                  eml_close_tag('unit');
                  if ($attribute_precision[0]['value']) {
                    eml_print_all_values('precision',      $attribute_precision);
                  }
                  eml_open_tag('numericDomain');
                    eml_print_line('numberType', $realNumber);
                    if ($attribute_maximum[0]['value'] ||
                    $attribute_minimum[0]['value']) {
                      eml_open_tag('bounds');
                      eml_print_all_values('maximum',    $attribute_maximum);
                      eml_print_all_values('minimum',    $attribute_minimum);
                      eml_close_tag('bounds');
                    }
                  eml_close_tag('numericDomain');
                eml_close_tag('ratio');
              }
              if (isset($code_definitions[0]['value'])) {
               eml_open_tag('nominal');
                 eml_open_tag('nonNumericDomain');
                   foreach ($code_definitions as $code_definition) {      
                     eml_open_tag('enumeratedDomain');
                       if (preg_match("/(.+)=(.+)/", $code_definition['value'], $matches)) {     
                        eml_open_tag('codeDefinition');
                         eml_print_line('code',       $matches[1]);
                         eml_print_line('definition', $matches[2]);
                        eml_close_tag('codeDefinition');
                        }
                        else {
                          eml_print_line('codeDefinition', $code_definition['value']);
                        }
                     eml_close_tag('enumeratedDomain');
                   }
                 eml_close_tag('nonNumericDomain');
               eml_close_tag('nominal');
              }
             eml_close_tag('measurementScale');
           } // endif; if ($attribute_formatstring ||
             //            $attribute_maximum || $attribute_minimum ||
             //            $attribute_precision || $attribute_unit)

           if (isset($var_missingvalues[0]['value'])) {
             eml_open_tag('missingValueCode');
             foreach ($var_missingvalues as $var_missingvalue) {
                if (preg_match("/(.+)=(.+)/", $var_missingvalue['value'], $matches)) {
                  eml_print_line('code',       $matches[1]);
                  eml_print_line('definition', $matches[2]);
                }
                else {
                  eml_print_line('missingValues', $var_missingvalue['value']);
                }
             }
             eml_close_tag('missingValueCode');
           }
           eml_close_tag('attribute');
        }
      }
        eml_close_tag('attributeList');
      eml_close_tag('dataTable');
    }
  }
eml_close_tag('dataset');
eml_indent(1);
eml_close_tag('eml:eml');
