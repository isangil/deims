$content['type']  = array (
  'name' => 'Metadata Record',
  'type' => 'data_set',
  'description' => 'Basic information about a data set.  The information collected here enables the associated data to be discovered on the web. Here we capture the Data Set title, abstract, geo-temporal references and other high level details.  These information pieces are all part of the basics of a metadata collection',
  'title_label' => 'Title',
  'body_label' => '',
  'min_word_count' => '0',
  'help' => '',
  'node_options' => 
  array (
    'status' => true,
    'promote' => true,
    'sticky' => false,
    'revision' => false,
  ),
  'upload' => '1',
  'show_preview_changes' => 1,
  'show_diff_inline' => 0,
  'enable_revisions_page' => 1,
  'old_type' => 'data_set',
  'orig_type' => 'data_set',
  'module' => 'features',
  'custom' => '0',
  'modified' => '1',
  'locked' => '1',
  'reset' => 'Reset to defaults',
  'comment' => '2',
  'comment_default_mode' => '4',
  'comment_default_order' => '1',
  'comment_default_per_page' => '50',
  'comment_controls' => '3',
  'comment_anonymous' => 0,
  'comment_subject_field' => '1',
  'comment_preview' => '1',
  'comment_form_location' => '0',
);
$content['groups']  = array (
  0 => 
  array (
    'label' => 'Data Quality Information',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => '',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        2 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        3 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'token' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '12',
    'group_name' => 'group_people',
  ),
  1 => 
  array (
    'label' => 'Spatial Data ',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => '',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        2 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        3 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'token' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '13',
    'group_name' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
      ),
    ),
  ),
  2 => 
  array (
    'label' => 'Spatial Reference',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => '',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        2 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        3 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'token' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '14',
    'group_name' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
      ),
    ),
  ),
  3 => 
  array (
    'label' => 'Entity & Attributes',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => '',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        2 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        3 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'token' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '16',
    'group_name' => 'group_eainfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
      ),
    ),
  ),
  4 => 
  array (
    'label' => 'Distribution',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => '',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        2 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        3 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'token' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '17',
    'group_name' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
      ),
    ),
  ),
  5 => 
  array (
    'label' => 'Metadata Ref',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => '',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        2 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        3 => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'token' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
      ),
    ),
    'weight' => '18',
    'group_name' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
      ),
    ),
  ),
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Show All Fields?',
    'field_name' => 'field_flag_optional',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-19',
    'description' => 'Change value to "Yes" if you need to fill out more optional metadata fields.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Yes',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'No
Yes',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_add_info' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_securclasssys' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_securclass' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_securhandling' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_contact_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_analytcltool_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_ext_assoc_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_datamanager_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_labcrew_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_fieldcrew_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_nativeenv' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_browsegraph_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_biblio_ref' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_quality' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_qaa' => 
      array (
        'Yes' => 'Yes',
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-17',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  1 => 
  array (
    'label' => 'Author (Originator)',
    'field_name' => 'field_dataset_owner_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-17',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Start typing the name of the owner of this Data.  
If you do not see the organization or person you are looking for, please just enter the information in.  That is, enter the organization name or his/her first and last name.  If there is more than one person, please click the "Add another item" button right below to get another input field.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_owner_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_owner_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_owner_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_owner_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-16',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  2 => 
  array (
    'label' => 'Publication Date',
    'field_name' => 'field_dataset_publication_date',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '-16',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'Date when this data set was made available to the public. If unknown or unpublishable, please leave it blank',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-15',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'short',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'short',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  3 => 
  array (
    'label' => 'Data Presentation Form',
    'field_name' => 'field_dataset_geoform',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-15',
    'description' => 'The type of information resource being documented. The CERES online thesaurus tool may be utilized to specify a resource type. The following list are the CERES preferred terms. 
<ul><li><em>Archive</em>: Materials which have documentary value, i.e. Private papers, institutional records, memorabilia, photographs, etc.</li>
<li><em>Atlas</em>:A collection of tables, charts, illustrations, etc. on a specific subject or subjects.</li>
<li><em>Audio-visual materials</em>:Materials such as films, videos, flim-strips, recordings, radio, etc.</li>
<li><em>Bibliography</em>:A list of sources of information on a given subject, period, etc, or of the written works of a given author, publisher, etc.</li>
<li><em>Catalog</em>:An extensive alphabetical list of items, typically containing descriptive comments and often with illustrations.</li>
<li><em>Collection</em>:An accumulation of information resources.</li>
<li><em>Database</em>:A large collection of data in a computer, organized so that it can be expanded, updated, and retrieved rapidly for various uses.</li>
<li><em>Document</em>:A printed, written piece of information.</li>
<li><em>Drawing</em>:A picture, design, sketch, etc.</li>
<li><em>Expertise</em>:The skill, knowledge, judgment of an expert.</li>
<li><em>Image</em>:An imitation or representation of a person or thing, drawn, painted, photographed, digitized, etc.</li>
<li><em>Instructional materials</em>:A material for use in education such as lesson plans.</li>
<li><em>Map</em>:A drawing or other representation of all or part of the earth’s surface, ordinarily showing countries, bodies of waters, cities, mountains, etc.</li>
<li><em>Model</em>:A small copy or imitation of an existing object.</li>
<li><em>Multi-media</em>:A combination of media, either digital or analog, such as film, tape recordings, slides, and special lighting effects used for entertainment or education.</li>
<li><em>Organization</em>:A unified, consolidated group of elements; a systematized whole, especially a body of persons organized for some specific purpose.</li>
<li><em>Protocol</em>:A set of rules governing the communication and the transfer of data between machines, as in a computer system.</li>
<li><em>Remote sensing data</em>:Satellite images, Hyper-spectral datasets, etc.</li>
<li><em>Software</em>:The programs, routines, etc. for a computer.</li>
<li><em>Spatial data</em>:GIS/Vector datasets</li>
<li><em>Survey</em>:A detailed study or inspection, as by gathering information though observations, questionnaires, etc. and subsequent analysis. </li>
</ol>',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_geoform' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Archive
Atlas
Audio-visual materials
Book Chapter
CAD data
Catalog
Collection
Conference Proceedings
Database
Diagram
Document
Drawing
Expertise
Figure
Globe
Hologram
Image
Information service
Instructional materials
Journal Article
Map
Model
Multi-media
Organization
Panphlet
Profile
Protocol
Raster Digital Data
Remote sensing data
Software
Sound recording
Spatial data
Spreadsheet
Table (non-digital)
Survey
Tabular Digital Data
Vector Digital Datadatasets
Video
View',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  4 => 
  array (
    'label' => 'Abstract',
    'field_name' => 'field_dataset_abstract',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-14',
    'rows' => '3',
    'size' => 60,
    'description' => 'The abstract is a brief narrative summary of the information resource such as its intended use and limitations. The narrative should provide enough general information to allow the user to determine if the information resource has sufficient potential to warrant contacting the provider for further information. The abstract should not exceed 500 words in length.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        'format' => '1',
        '_error_element' => 'default_value_widget][field_dataset_abstract][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_abstract' => 
      array (
        0 => 
        array (
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_dataset_abstract][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '1',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'format' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-13',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  5 => 
  array (
    'label' => 'Purpose',
    'field_name' => 'field_dataset_purpose',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-13',
    'rows' => '3',
    'size' => 60,
    'description' => 'Summarize the intentions with which the information resource was developed. This element describes why the information resource is offered and identifies other programs, projects, and legislative actions responsible for the establishment or continued deliver of this information resource. It may include the origin, lineage and related information resources.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        'format' => '1',
        '_error_element' => 'default_value_widget][field_dataset_purpose][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_purpose' => 
      array (
        0 => 
        array (
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_dataset_purpose][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '1',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'format' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-12',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  6 => 
  array (
    'label' => 'Supplemental Information',
    'field_name' => 'field_dataset_add_info',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-12',
    'rows' => '2',
    'size' => 60,
    'description' => 'Include other descriptive information about the information resource (about the data set).',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        'format' => '1',
        '_error_element' => 'default_value_widget][field_dataset_add_info][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_add_info' => 
      array (
        0 => 
        array (
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_dataset_add_info][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '1',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'format' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-11',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  7 => 
  array (
    'label' => 'Time Period of Content',
    'field_name' => 'field_dataset_datetype',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '-11',
    'description' => 'The starting and ending dates that define the period for which the information resource corresponds to. Select whether this is a "single date", "multiple dates" or a "Range of Dates".  When the exact date is unknown, use an approximated date. 

',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Range of Dates',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_datetype' => 
      array (
        'value' => 'Range of Dates',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Single Date / Multiple Dates
Range of Dates
Unknown',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_beg_end_date' => 
      array (
        'Range of Dates' => 'Range of Dates',
      ),
      'field_dataset_sdates' => 
      array (
        'Single Date / Multiple Dates' => 'Single Date / Multiple Dates',
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-10',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  8 => 
  array (
    'label' => 'Date(s)',
    'field_name' => 'field_dataset_sdates',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '-10',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'The starting and ending dates that define the period for which the information resource corresponds to. Enter the date using a yyyy-mm-dd format. If instead a single date, the data was collected or reflects multiple dates, please press the Add another item buttom to enter as many date fields as needed.

',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 
        array (
          'Single Date / Multiple Dates' => 'Single Date / Multiple Dates',
        ),
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'medium',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-9',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  9 => 
  array (
    'label' => 'Date Range',
    'field_name' => 'field_beg_end_date',
    'type' => 'date',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '-9',
    'default_value' => 'now',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'Range of dates (time span) of your data set.   If you have just a single date, please repeat the values in the beginning and end dates ',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 
        array (
          'Range of Dates' => 'Range of Dates',
        ),
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'repeat' => 0,
    'todate' => 'required',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'medium',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => 20,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'value2' => 
      array (
        'type' => 'varchar',
        'length' => 20,
        'not null' => false,
        'sortable' => true,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-8',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  10 => 
  array (
    'label' => 'Currentness Reference',
    'field_name' => 'field_dataset_currentness',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-8',
    'description' => 'The basis for which the time period is determined. ”Ground Condition” indicates the data represents what was on the ground during the “Time Period”. ”Publication Date” indicates the data represents the data that was incorporated into the information resource during the “Time Period”.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Observed',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_currentness' => 
      array (
        'value' => 'Observed',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Ground Condition
Observed
Publication Date',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-7',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  11 => 
  array (
    'label' => 'Progress',
    'field_name' => 'field_dataset_maintenance',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-7',
    'description' => 'The current state of the information resource. ”Complete” indicates the information resource is complete for the “Time Period”. *”In Work” *indicates the information resource is incomplete and still being developed. ”Planned” indicates the information resource is not yet started but is pending development at a future date. Planned offers the opportunity to advertise for potential data development collaboration. ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Complete',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_maintenance' => 
      array (
        'value' => 'Complete',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '1',
    'max_length' => '',
    'allowed_values' => 'Planned 
In Work
Complete',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'format' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-6',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  12 => 
  array (
    'label' => 'Updating',
    'field_name' => 'field_dataset_updating',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-6',
    'description' => 'Update Frequency: The frequency with which changes and additions are made to the information resource after the initial information resource is completed. 
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'As Needed',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_updating' => 
      array (
        'value' => 'As Needed',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Daily
Weekly
Monthly
Annually
As Needed
None Planned
Unknown
Irregular',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-5',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  13 => 
  array (
    'label' => 'Spatial Domain Ref',
    'field_name' => 'field_dataset_site_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-5',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Start typing the site name and pick the core site where the data was gathered from the autofill list.  If you do not see the site, enter the name in the input field',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_site_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_site_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_site_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_site_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'research_site' => 'research_site',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-4',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  14 => 
  array (
    'label' => 'Access Constraints',
    'field_name' => 'field_dataset_accessconstraints',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-4',
    'rows' => '2',
    'size' => 60,
    'description' => 'Access limitations are restrictions and prerequisites for accessing the information resource. This field describes any constrains or legal prerequisites for accessing the information resource or its component products or services. This includes any access constraints applied to assure the protection of privacy or intellectual property and any other special restrictions or limitation on accessing the information.
Contractual obligations or fees necessary to gain access to the information resource should be referenced here.
Generic limitations (*No Restrictions, Public, Sensitive*) may be selected. Agencies should consider specific statements of access limitations that can be placed within the dialog area when Other is selected. A simple copy and paste command from a word document will simplify including verbose access limitation statements. ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'None',
        '_error_element' => 'default_value_widget][field_dataset_accessconstraints][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_accessconstraints' => 
      array (
        0 => 
        array (
          'value' => 'None',
          '_error_element' => 'default_value_widget][field_dataset_accessconstraints][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-3',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  15 => 
  array (
    'label' => 'Use Constraints',
    'field_name' => 'field_dataset_useconstraints',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-3',
    'rows' => '2',
    'size' => 60,
    'description' => 'Restrictions and prerequisites for using the information resource. This field describes any constrains or legal prerequisites for using the information resource or its component products or services. This includes any use constraints applied to assure the protection of privacy or intellectual property and any other special restrictions or limitation on using the information.
Generic limitations (*No Restrictions, Education Only, Non-Commercial Only, No Online Display, No restrictions*) may be selected. Agencies should consider specific statements of use limitations that can be placed within the dialog area when Other is selected. A simple copy and paste command from a word document will simplify including verbose use limitation statements. 
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'None',
        '_error_element' => 'default_value_widget][field_dataset_useconstraints][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_useconstraints' => 
      array (
        0 => 
        array (
          'value' => 'None',
          '_error_element' => 'default_value_widget][field_dataset_useconstraints][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-2',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  16 => 
  array (
    'label' => 'Point of Contact',
    'field_name' => 'field_dataset_contact_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-2',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'The person(s) you may want to contact about this data set.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_contact_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_contact_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_contact_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_contact_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'browse_graphics' => 0,
      'biblio' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'research_site' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => false,
      'source_info' => false,
      'planar_coordinate_system' => false,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => false,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-1',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  17 => 
  array (
    'label' => 'Security Classification System',
    'field_name' => 'field_dataset_securclasssys',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-1',
    'rows' => '2',
    'size' => 60,
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_securclasssys][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_securclasssys' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_securclasssys][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => 0,
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  18 => 
  array (
    'label' => 'Security Classification',
    'field_name' => 'field_dataset_securclass',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => 0,
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Unclassified',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_securclass' => 
      array (
        'value' => 'Unclassified',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Unclassified
Sensitive
Restricted
Confidential
Secret
Top Secret',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '1',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  19 => 
  array (
    'label' => 'Security Handling Description',
    'field_name' => 'field_dataset_securhandling',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '1',
    'rows' => '2',
    'size' => 60,
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_securhandling][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_securhandling' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_securhandling][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '2',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  20 => 
  array (
    'label' => 'Analytical Tool(s)',
    'field_name' => 'field_dataset_analytcltool_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '2',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Tools, models or statistical procedures that the data set is intrinsically bound to and are available for use in analysing the data set. I.e: reconstructions of phylogenies, atmospheric transport analyses, etc.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_analytcltool_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_analytcltool_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_analytcltool_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_analytcltool_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'software' => 'software',
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '3',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  21 => 
  array (
    'label' => 'Short Name',
    'field_name' => 'field_dataset_short_name',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '3',
    'rows' => 5,
    'size' => '40',
    'description' => 'A short name is usually the name used to refer in short to your dataset. Example:  meteo_2010  ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_short_name][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_short_name' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_short_name][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '100',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => '100',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '5',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  22 => 
  array (
    'label' => 'Related Links',
    'field_name' => 'field_dataset_related_links',
    'type' => 'link',
    'widget_type' => 'link',
    'change' => 'Change basic information',
    'weight' => '4',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'title' => '',
        'url' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_related_links' => 
      array (
        0 => 
        array (
          'title' => '',
          'url' => '',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'validate_url' => 1,
    'url' => 0,
    'title' => 'optional',
    'title_value' => '',
    'enable_tokens' => 0,
    'display' => 
    array (
      'url_cutoff' => '80',
    ),
    'attributes' => 
    array (
      'target' => 'default',
      'rel' => '',
      'class' => '',
      'title' => '',
    ),
    'op' => 'Save field settings',
    'module' => 'link',
    'widget_module' => 'link',
    'columns' => 
    array (
      'url' => 
      array (
        'type' => 'varchar',
        'length' => 2048,
        'not null' => false,
        'sortable' => true,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
      ),
      'attributes' => 
      array (
        'type' => 'text',
        'size' => 'medium',
        'not null' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '6',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  23 => 
  array (
    'label' => 'Data Set Credit - Associated Researcher',
    'field_name' => 'field_dataset_ext_assoc_ref',
    'type' => 'nodereference',
    'widget_type' => 'noderefcreate_autocomplete',
    'change' => 'Change basic information',
    'weight' => '5',
    'autocomplete_match' => 'contains',
    'description' => 'Start typing the name of the person who is a co-pi or associate researcher on this data set.  If you do not see him/her, please just enter his/her first and last name.  If there is more than one person, please click the "Add another item" button right below to get another input field.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_ext_assoc_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_ext_assoc_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_ext_assoc_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_ext_assoc_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'noderefcreate',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '7',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  24 => 
  array (
    'label' => 'Data Set Credit - Data Manager',
    'field_name' => 'field_dataset_datamanager_ref',
    'type' => 'nodereference',
    'widget_type' => 'noderefcreate_autocomplete',
    'change' => 'Change basic information',
    'weight' => '6',
    'autocomplete_match' => 'contains',
    'description' => 'Start typing the name of the data manager of this data set.  If you do not see him/her, please just enter his/her first and last name.  ',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_datamanager_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_datamanager_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_datamanager_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_datamanager_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'noderefcreate',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '8',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  25 => 
  array (
    'label' => 'Data Set Credit - Lab Crew',
    'field_name' => 'field_dataset_labcrew_ref',
    'type' => 'nodereference',
    'widget_type' => 'noderefcreate_autocomplete',
    'change' => 'Change basic information',
    'weight' => '7',
    'autocomplete_match' => 'contains',
    'description' => 'Pick a lab crew member for this data set from the auto fill list. If you do not see the data set lab member in the list, write down in the input filed his/her name',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_labcrew_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_labcrew_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_labcrew_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_labcrew_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'noderefcreate',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '9',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  26 => 
  array (
    'label' => 'Data Set Credit - Field Crew',
    'field_name' => 'field_dataset_fieldcrew_ref',
    'type' => 'nodereference',
    'widget_type' => 'noderefcreate_autocomplete',
    'change' => 'Change basic information',
    'weight' => '8',
    'autocomplete_match' => 'contains',
    'description' => 'Pick a field crew member for this data set from the auto fill list.  If you do not see the field person, enter his/her name',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_fieldcrew_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_fieldcrew_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_fieldcrew_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_fieldcrew_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'noderefcreate',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '10',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  27 => 
  array (
    'label' => 'Native Data Set Environment',
    'field_name' => 'field_dataset_nativeenv',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '9',
    'rows' => '2',
    'size' => 60,
    'description' => 'A description of the data set in the producer\'s processing environment, including items such as the name of the software (including version), the computer operating system, file name (including host-, path-, and filenames), and the data set size.
	',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_nativeenv][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_nativeenv' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_nativeenv][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '11',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  28 => 
  array (
    'label' => 'Browse Graphics',
    'field_name' => 'field_dataset_browsegraph_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '10',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Browse graphics illustrate the data set in some way. They can illustrate methods used to collect the data, field sites, unusual specimens, etc.
* Fixed graphics should have a legend for interpreting the graphic.
* Audio and video clips can also be used as browse graphics
',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_browsegraph_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_browsegraph_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_browsegraph_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_browsegraph_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'browse_graphics' => 'browse_graphics',
      'software' => 0,
      'biblio' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'process_step' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '12',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  29 => 
  array (
    'label' => 'Cross References',
    'field_name' => 'field_dataset_biblio_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '11',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_biblio_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_biblio_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_biblio_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_biblio_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'biblio' => 'biblio',
      'software' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'research_site' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => false,
      'source_info' => false,
      'planar_coordinate_system' => false,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => false,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '13',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  30 => 
  array (
    'label' => 'Quality Assurance (Attribute Accuracy Report)',
    'field_name' => 'field_quality',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '59',
    'rows' => '2',
    'size' => 60,
    'description' => 'Quality assurance and control procedures used. An explanation of the accuracy of the identification of the entities and assignments of values in the data set and a description of the tests used. The report can reference more extensive descriptions in other documents.
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        'format' => '1',
        '_error_element' => 'default_value_widget][field_quality][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_quality' => 
      array (
        0 => 
        array (
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_quality][0][value',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '1',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'format' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '13',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  31 => 
  array (
    'label' => 'Quantitative Attribute Accuracy Assesment Value-Explanation',
    'field_name' => 'field_dataset_qaa',
    'type' => 'qaa',
    'widget_type' => 'qaa_entry',
    'change' => 'Change basic information',
    'weight' => '60',
    'description' => 'Attribute Accuracy Value -  Estimate of the accuracy of the identification of the entities and assignments of attribute values in the data set.
Attribute Accuracy Explanation - Identification of the test that yielded the Attribute Accuracy Value.
',
    'default_value' => 
    array (
      0 => 
      array (
        'attr_accval' => '',
        'attr_accexp' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_qaa' => 
      array (
        0 => 
        array (
          'attr_accval' => '',
          'attr_accexp' => '',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'op' => 'Save field settings',
    'module' => 'qaa_fld',
    'widget_module' => 'qaa_fld',
    'columns' => 
    array (
      'attr_accval' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'default' => '',
      ),
      'attr_accexp' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'default' => '',
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '14',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  32 => 
  array (
    'label' => 'Logical Consistency Report',
    'field_name' => 'field_dataset_logicconsistcyrep',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '61',
    'rows' => '2',
    'size' => 60,
    'description' => 'Explanation of the fidelity of relationships in the data set and tests used.
The report can reference more extensive descriptions in other documents.
If creating a Logical Consistency Report is not logical, use the default "not applicable"',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Not Applicable',
        '_error_element' => 'default_value_widget][field_dataset_logicconsistcyrep][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_logicconsistcyrep' => 
      array (
        0 => 
        array (
          'value' => 'Not Applicable',
          '_error_element' => 'default_value_widget][field_dataset_logicconsistcyrep][0][value',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '15',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  33 => 
  array (
    'label' => 'Completeness Report',
    'field_name' => 'field_dataset_compltnssrep',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '62',
    'rows' => '2',
    'size' => 60,
    'description' => 'Information about omissions, selection criteria, generalizations, definitions used, and other rules used to derive the data set.
The report can reference more extensive descriptions in other documents.
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_compltnssrep][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_compltnssrep' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_compltnssrep][0][value',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '16',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  34 => 
  array (
    'label' => 'Horizontal Positional Accuracy Report',
    'field_name' => 'field_dataset_horizposrep',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '63',
    'rows' => '2',
    'size' => 60,
    'description' => 'Explanation of the accuracy of the horizontal coordinate measurements and a description of the tests used.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_horizposrep][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_horizposrep' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_horizposrep][0][value',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '17',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  35 => 
  array (
    'label' => 'Horizontal Positional Accuracy Value-Explanation',
    'field_name' => 'field_dataset_qhpaa',
    'type' => 'qhpaa',
    'widget_type' => 'qhpaa_entry',
    'change' => 'Change basic information',
    'weight' => '64',
    'description' => 'Positional Accuracy Value - Estimate of the accuracy of the coordinate measurements expressed in (ground) meters.
Positional Accuracy Explanation -  Identification of the test that yielded the Positional Accuracy Value.
',
    'default_value' => 
    array (
      0 => 
      array (
        'horpos_accval' => '',
        'horpos_accexp' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_qhpaa' => 
      array (
        0 => 
        array (
          'horpos_accval' => '',
          'horpos_accexp' => '',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'op' => 'Save field settings',
    'module' => 'qhpaa_fld',
    'widget_module' => 'qhpaa_fld',
    'columns' => 
    array (
      'horpos_accval' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'horpos_accexp' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '18',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  36 => 
  array (
    'label' => 'Vertical Positional Accuracy Report',
    'field_name' => 'field_dataset_vertposrep',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '65',
    'rows' => '2',
    'size' => 60,
    'description' => 'Explanation of the accuracy of the vertical coordinate measurements and a description of the tests used.
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_vertposrep][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_vertposrep' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_vertposrep][0][value',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '19',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  37 => 
  array (
    'label' => 'Vertical Positional Accuracy Value-Explanation',
    'field_name' => 'field_dataset_qvpaa',
    'type' => 'qvpaa',
    'widget_type' => 'qvpaa_entry',
    'change' => 'Change basic information',
    'weight' => '66',
    'description' => 'Positional Accuracy Value - Estimate of the accuracy of the coordinate measurements expressed in (ground) meters.
Positional Accuracy Explanation - Identification of the test that yielded the Positional Accuracy Value.
',
    'default_value' => 
    array (
      0 => 
      array (
        'verpos_accval' => '',
        'verpos_accexp' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_qvpaa' => 
      array (
        0 => 
        array (
          'verpos_accval' => '',
          'verpos_accexp' => '',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'op' => 'Save field settings',
    'module' => 'qvpaa_fld',
    'widget_module' => 'qvpaa_fld',
    'columns' => 
    array (
      'verpos_accval' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'verpos_accexp' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '20',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  38 => 
  array (
    'label' => 'Source Information',
    'field_name' => 'field_dataset_source_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '67',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'The contributing source for this data set.  Start typing to pick the representing citation abbreviation from the list, or use the "New source information" link below to enter this information.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_source_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_source_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_source_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_source_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'source_info' => 'source_info',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'process_step' => 0,
      'research_site' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  39 => 
  array (
    'label' => 'Methodology',
    'field_name' => 'field_dataset_methods_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '68',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'The methodologies associated with the dataset - start typing to see whether those have been recorded, or use the button to add new ones.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_methods_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_methods_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_methods_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_methods_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'methodology' => 'methodology',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  40 => 
  array (
    'label' => 'Process Step',
    'field_name' => 'field_dataset_procstep_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '69',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Information about a single data processing event. Can describe process applied to an acquired data set or to raw data you collected.
',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_procstep_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_procstep_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_procstep_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_procstep_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'process_step' => 'process_step',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  41 => 
  array (
    'label' => 'Cloud Cover Percentage',
    'field_name' => 'field_dataset_cloud_cover',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '70',
    'description' => '"Not reported" = no cloud cover entry in metadata
"Unknown" = cloud cover is present in metadata, but it is "Unknown"
"% cover" = cloud cover is present in metadata, and set equal to integer 
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Not Reported',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_cloud_cover' => 
      array (
        'value' => 'Not Reported',
      ),
    ),
    'group' => 'group_people',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Not Reported 
Unknown
0
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
93
94
95
96
97
98
99
100',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '23',
      'parent' => 'group_people',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  42 => 
  array (
    'label' => 'Indirect Spatial Reference',
    'field_name' => 'field_dataset_indirectspatial',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '55',
    'rows' => '2',
    'size' => 60,
    'description' => 'Name of types of geographic features, addressing schemes, or other means through which locations are referenced in the data set.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_indirectspatial][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_indirectspatial' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_indirectspatial][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  43 => 
  array (
    'label' => 'Direct Spatial Reference',
    'field_name' => 'field_dataset_directspatial',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '56',
    'rows' => '2',
    'size' => 60,
    'description' => 'The system of objects used to represent space in the data set.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_directspatial][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_directspatial' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_directspatial][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  44 => 
  array (
    'label' => 'Point and Vector OR Raster?',
    'field_name' => 'field_dataset_rastervectorflag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '57',
    'description' => 'Is this a vector and point type, or a raster type? Please select the appropriate choice',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_rastervectorflag' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Vector, Point 
Raster',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_sdtorvpfflag' => 
      array (
        'Vector, Point' => 'Vector, Point',
      ),
      'field_dataset_sdts' => 
      array (
        'Vector, Point' => 'Vector, Point',
      ),
      'field_dataset_vpftopology' => 
      array (
        'Vector, Point' => 'Vector, Point',
      ),
      'field_dataset_vpf' => 
      array (
        'Vector, Point' => 'Vector, Point',
      ),
      'field_dataset_rastertype' => 
      array (
        'Raster' => 'Raster',
      ),
      'field_dataset_rasterrowcount' => 
      array (
        'Raster' => 'Raster',
      ),
      'field_datasetrastervertcount' => 
      array (
        'Raster' => 'Raster',
      ),
      'field_dataset_rastercolcount' => 
      array (
        'Raster' => 'Raster',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  45 => 
  array (
    'label' => 'Spatial Data Transfer OR Vector Product Format?',
    'field_name' => 'field_dataset_sdtorvpfflag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '59',
    'description' => 'Is this a point and vector object information using the terminology and concepts from "Spatial Data Concepts," which is Chapter 2 of Part 1 in Department of Commerce, 1992, Spatial Data Transfer Standard (SDTS) OR does it use the terminology and concepts from Department of Defense, 1992, Vector Product Format (MIL-STD-600006):

(Note that this reference to the SDTS or VPF is used ONLY to provide a set of terminology for the point and vector objects.)
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sdtorvpfflag' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Vector, Point' => 'Vector, Point',
        ),
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'SDTS 
VPF',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_sdts' => 
      array (
        'SDTS' => 'SDTS',
      ),
      'field_dataset_vpftopology' => 
      array (
        'VPF' => 'VPF',
      ),
      'field_dataset_vpf' => 
      array (
        'VPF' => 'VPF',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  46 => 
  array (
    'label' => 'Spatial Data Transfer Standard (SDTS)',
    'field_name' => 'field_dataset_sdts',
    'type' => 'sdtsterms',
    'widget_type' => 'sdtsterms_entry',
    'change' => 'Change basic information',
    'weight' => '60',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'object_type' => '0',
        'object_count' => '0',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sdts' => 
      array (
        0 => 
        array (
          'object_type' => '0',
          'object_count' => '0',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Vector, Point' => 'Vector, Point',
        ),
        'field_dataset_sdtorvpfflag' => 
        array (
          'SDTS' => 'SDTS',
        ),
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'op' => 'Save field settings',
    'module' => 'sdtsterms_fld',
    'widget_module' => 'sdtsterms_fld',
    'columns' => 
    array (
      'object_type' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'object_count' => 
      array (
        'type' => 'int',
        'size' => 'medium',
        'default' => '1',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  47 => 
  array (
    'label' => 'Vector Point Format',
    'field_name' => 'field_dataset_vpf',
    'type' => 'vpfterms',
    'widget_type' => 'vpfterms_entry',
    'change' => 'Change basic information',
    'weight' => '61',
    'description' => 'Information about the Vector Point Format:
1) name of point and vector spatial objects used to locate zero-, one-, and two-dimensional spatial locations in the data set.
2) the total number of the point or vector object type occurring in the data set.
	',
    'default_value' => 
    array (
      0 => 
      array (
        'object_type' => '0',
        'object_count' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_vpf' => 
      array (
        0 => 
        array (
          'object_type' => '0',
          'object_count' => '',
          'vpf_object_type' => '',
          'vpf_object_count' => '',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Vector, Point' => 'Vector, Point',
        ),
        'field_dataset_sdtorvpfflag' => 
        array (
          'VPF' => 'VPF',
        ),
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'op' => 'Save field settings',
    'module' => 'vpfterms_fld',
    'widget_module' => 'vpfterms_fld',
    'columns' => 
    array (
      'vpf_object_type' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'vpf_object_count' => 
      array (
        'type' => 'int',
        'size' => 'medium',
        'default' => '1',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  48 => 
  array (
    'label' => 'VPF Topology Level',
    'field_name' => 'field_dataset_vpftopology',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '62',
    'description' => 'A numeric Value from 0 to 3, representing the completeness of the topology carried by the data set. The levels of completeness are defined in Department of Defense, 1992, Vector Product Format (MIL-STD-600006): Philadelphia, Department of Defense, Defense Printing Service Detachment Office ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_vpftopology' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Vector, Point' => 'Vector, Point',
        ),
        'field_dataset_sdtorvpfflag' => 
        array (
          'VPF' => 'VPF',
        ),
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '0
1
2
3',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  49 => 
  array (
    'label' => 'Raster Object Type',
    'field_name' => 'field_dataset_rastertype',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '63',
    'description' => ' raster spatial objects used to locate zero-, two-, or three-dimensional locations in the data set.
	',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_rastertype' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Raster' => 'Raster',
        ),
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Point
Pixel
Grid Cell
Voxel',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  50 => 
  array (
    'label' => 'Row Count',
    'field_name' => 'field_dataset_rasterrowcount',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '64',
    'description' => 'The maximum number of raster objects along the ordinate (y) axis. For use with rectangular raster objects.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_rasterrowcount][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_rasterrowcount' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_rasterrowcount][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Raster' => 'Raster',
        ),
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'int',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  51 => 
  array (
    'label' => 'Column Count',
    'field_name' => 'field_dataset_rastercolcount',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '65',
    'description' => 'the maximum number of raster objects along the abscissa (x) axis. For use with rectangular raster objects.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_rastercolcount][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_rastercolcount' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_rastercolcount][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Raster' => 'Raster',
        ),
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'int',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  52 => 
  array (
    'label' => 'Vertical Count',
    'field_name' => 'field_datasetrastervertcount',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '66',
    'description' => ' the maximum number of raster objects along the vertical (z) axis. For use with rectangular volumetric raster objects (voxels).
	',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_datasetrastervertcount][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_datasetrastervertcount' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_datasetrastervertcount][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialdata',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 
        array (
          'Raster' => 'Raster',
        ),
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'int',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  53 => 
  array (
    'label' => 'Horizontal Datum Name',
    'field_name' => 'field_dataset_sprefdatum',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '67',
    'description' => 'The identification given to the reference system used for defining the coordinates of points.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'World Geodetic System of 1984',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sprefdatum' => 
      array (
        'value' => 'World Geodetic System of 1984',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'North American Datum of 1927
North American Datum of 1983
World Geodetic System of 1984',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  54 => 
  array (
    'label' => 'Ellipsoid Name',
    'field_name' => 'field_dataset_sprefellipsoid',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '68',
    'description' => 'Identification given to established representations of the Earth\'s shape.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'World Geodetic System of 1984',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sprefellipsoid' => 
      array (
        'value' => 'World Geodetic System of 1984',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Clarke 1866
Geodetic Reference System 80
World Geodetic System of 1984',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  55 => 
  array (
    'label' => 'Semi-major Axis',
    'field_name' => 'field_dataset_sprefmajoraxis',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '70',
    'description' => 'Radius of the equatorial axis of the ellipsoid.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '6378137.0',
        '_error_element' => 'default_value_widget][field_dataset_sprefmajoraxis][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sprefmajoraxis' => 
      array (
        0 => 
        array (
          'value' => '6378137.0',
          '_error_element' => 'default_value_widget][field_dataset_sprefmajoraxis][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'float',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  56 => 
  array (
    'label' => 'Denominator of Flattening Ratio',
    'field_name' => 'field_dataset_sprefflatratio',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '71',
    'description' => 'The denominator of the ratio of the difference between the equatorial and polar radii of the ellipsoid when the numerator is set to 1.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '298.257222',
        '_error_element' => 'default_value_widget][field_dataset_sprefflatratio][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sprefflatratio' => 
      array (
        0 => 
        array (
          'value' => '298.257222',
          '_error_element' => 'default_value_widget][field_dataset_sprefflatratio][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'float',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  57 => 
  array (
    'label' => 'Type of reference frame',
    'field_name' => 'field_dataset_spreftypeflag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '72',
    'description' => 'The reference frame or system from which linear or angular quantities are measured and assigned to the position that a point occupies. Options are a Planar projection, a Local system, a geographic system or undefined. ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Geographic',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_spreftypeflag' => 
      array (
        'value' => 'Geographic',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Geographic
Planar
Local
No definition',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_spreflatres' => 
      array (
        'Geographic' => 'Geographic',
      ),
      'field_dataset_spreflongres' => 
      array (
        'Geographic' => 'Geographic',
      ),
      'field_dataset_sprefgeogunit' => 
      array (
        'Geographic' => 'Geographic',
      ),
      'field_dataset_spreflocaldes' => 
      array (
        'Local' => 'Local',
      ),
      'field_dataset_localgeo' => 
      array (
        'Local' => 'Local',
      ),
      'field_dataset_sperefplan_ref' => 
      array (
        'Planar' => 'Planar',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  58 => 
  array (
    'label' => 'Latitude Resolution',
    'field_name' => 'field_dataset_spreflatres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '73',
    'description' => 'The minimum difference between two adjacent latitude values expressed in Geographic Coordinate Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '0.0',
        '_error_element' => 'default_value_widget][field_dataset_spreflatres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_spreflatres' => 
      array (
        0 => 
        array (
          'value' => '0.0',
          '_error_element' => 'default_value_widget][field_dataset_spreflatres][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 
        array (
          'Geographic' => 'Geographic',
        ),
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'float',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  59 => 
  array (
    'label' => 'Longitude Resolotion',
    'field_name' => 'field_dataset_spreflongres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '74',
    'description' => 'The minimum difference between two adjacent longitude values expressed in Geographic Coordinate Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '0.0',
        '_error_element' => 'default_value_widget][field_dataset_spreflongres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_spreflongres' => 
      array (
        0 => 
        array (
          'value' => '0.0',
          '_error_element' => 'default_value_widget][field_dataset_spreflongres][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 
        array (
          'Geographic' => 'Geographic',
        ),
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'float',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  60 => 
  array (
    'label' => 'Geographic Coordinate Units',
    'field_name' => 'field_dataset_sprefgeogunit',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '75',
    'description' => 'Units of measure used for the latitude and longitude values.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Decimal degrees',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sprefgeogunit' => 
      array (
        'value' => 'Decimal degrees',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 
        array (
          'Geographic' => 'Geographic',
        ),
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Decimal degrees
Decimal minutes
Decimal seconds
Degrees and decimal minutes
Degrees, minutes and decimal seconds
Radians
Grads',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  61 => 
  array (
    'label' => 'Planar',
    'field_name' => 'field_dataset_sperefplan_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '76',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'The quantities of distances, or distances and angles, which define the position of a point on a reference plane to which the surface of the Earth has been projected.  This field looks in the databases for existing entries, using the autocomplete feature.  If you do not recognize the planar system used, you can start a new one following the link below.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_sperefplan_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_sperefplan_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_sperefplan_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_sperefplan_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 
        array (
          'Planar' => 'Planar',
        ),
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'referenceable_types' => 
    array (
      'planar_coordinate_system' => 'planar_coordinate_system',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  62 => 
  array (
    'label' => 'Local Description',
    'field_name' => 'field_dataset_spreflocaldes',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '77',
    'rows' => '2',
    'size' => 60,
    'description' => 'A description of the coordinate system and its orientation to the surface of the Earth.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_spreflocaldes][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_spreflocaldes' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_spreflocaldes][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 
        array (
          'Local' => 'Local',
        ),
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  63 => 
  array (
    'label' => 'Local Georeference',
    'field_name' => 'field_dataset_localgeo',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '78',
    'rows' => '2',
    'size' => 60,
    'description' => 'A description of the information provided to register the local system to the Earth (e.g. control points, satellite ephemeral data, inertial navigation data).',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_localgeo][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_localgeo' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_localgeo][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 
        array (
          'Local' => 'Local',
        ),
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'sticky' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'custom_teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  64 => 
  array (
    'label' => 'Vertical Coordinate System Definition?',
    'field_name' => 'field_dataset_vertdef',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '79',
    'description' => 'Select yes if you need to document the reference frame or system from which vertical distances (altitudes or depths) are measured.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'No',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_vertdef' => 
      array (
        'value' => 'No',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Yes
No',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_altdatum' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_altres' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_altunits' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_altenc' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_depthdn' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_depthres' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_depthdu' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_dataset_depthem' => 
      array (
        'Yes' => 'Yes',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  65 => 
  array (
    'label' => 'Altitude Datum Name',
    'field_name' => 'field_dataset_altdatum',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '80',
    'description' => 'The identification given to the surface taken as the surface of reference from which altitudes are measured.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_altdatum' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'National Geodetic vertical Datum of 1929
North American Vertical Datum of 1988
',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  66 => 
  array (
    'label' => 'Altitude Resolution',
    'field_name' => 'field_dataset_altres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '81',
    'description' => 'The minimum distance possible between two adjacent altitude values, expressed in Altitude Distance Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_altres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_altres' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_altres][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'min' => '0',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'float',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  67 => 
  array (
    'label' => 'Altitude Distance Units',
    'field_name' => 'field_dataset_altunits',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '82',
    'description' => 'Units in which altitudes are recorded (feet, meters)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'meters',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_altunits' => 
      array (
        'value' => 'meters',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'meters
feet
',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  68 => 
  array (
    'label' => 'Altitude Encoding Method',
    'field_name' => 'field_dataset_altenc',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '83',
    'description' => 'The means used to encode the altitudes.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_altenc' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Explicit elevation coordinate included with horizontal coordinates
Implicit coordinate
Attribute values',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  69 => 
  array (
    'label' => 'Depth Datum Name',
    'field_name' => 'field_dataset_depthdn',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '84',
    'description' => 'The identification given to surface of reference from which depths are measured.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_depthdn' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Local surface
Chart datum; datum for sounding reduction
Lowest astronomical tide
Highest astronomical tide
Mean low water
Mean high water
Mean sea level
Land survey datum
Mean low water springs
Mean high water springs
Mean low water neap
Mean high water neap
Mean lower low water
Mean lower low water springs
Mean higher high water
Mean higher low water 
Mean lower high water
Spring tide
Tropic lower low water
Neap tide
High water
Higher high water
Low water
Low-water datum
Lowest low water
Lower low water
Lowest normal low water
Mean tide level
Indian spring low water
High-water full and charge
Low-water full and charge
Columbia River datum
Gulf Coast low water datum
Equatorial springs low water
Approximate lowest astronomical tide
No correction


',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  70 => 
  array (
    'label' => 'Depth Resolution',
    'field_name' => 'field_dataset_depthres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '85',
    'description' => 'The minimum distance possible between two adjacent depth values, expressed in Depth Distance Units of measure. Positive real numbers only, please',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_depthres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_depthres' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_depthres][0][value',
        ),
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'min' => '0',
    'max' => '',
    'prefix' => '',
    'suffix' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'number',
    'widget_module' => 'number',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'float',
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  71 => 
  array (
    'label' => 'Depth Distance Units',
    'field_name' => 'field_dataset_depthdu',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '86',
    'description' => 'Units in which depth are recorded (meters, feet)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_depthdu' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'meters
feet',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  72 => 
  array (
    'label' => 'Depth Encoding Method',
    'field_name' => 'field_dataset_depthem',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '87',
    'description' => 'The means used to encode depth - select a method from pull down list below',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_depthem' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_spatialref',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Explicit depth coordinate included with horizontal coordinates
Implicit coordinate
Attribute values',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  73 => 
  array (
    'label' => 'Data File Structure',
    'field_name' => 'field_dataset_datafile_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '36',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'The reference to the information about data file structure details.  Start typing the name of the described data file (spreadsheet) structure, if you do not see it in the list, please enter a name for the spreadsheet structure (Example: sev022 file structure: flora census in 2001).  You can augment the metadata about the file structure later. If you need to attach more than one data file structure, please use the "Add another item" button right below to get more input fields.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_datafile_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_datafile_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_datafile_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_datafile_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_eainfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'data_file' => 'data_file',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '29',
      'parent' => 'group_eainfo',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  74 => 
  array (
    'label' => 'Distributor',
    'field_name' => 'field_dataset_distributor_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '28',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Contact information about the person and organization that distributes the information resource. Select from the names associated with the Catalog you are adding the metadata record to. You may also define a new contact',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_distributor_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_distributor_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_distributor_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_distributor_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'browse_graphics' => 0,
      'biblio' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'research_site' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => false,
      'source_info' => false,
      'planar_coordinate_system' => false,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => false,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '28',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  75 => 
  array (
    'label' => 'Dataset ID (Resource Descriptor)',
    'field_name' => 'field_dataset_id',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '29',
    'rows' => 5,
    'size' => '20',
    'description' => 'The identifier by which the distributor knows the data set  Example : 1012009',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_id][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_id' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_id][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '100',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => '100',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '29',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  76 => 
  array (
    'label' => 'Distribution Liability',
    'field_name' => 'field_dataset_liability',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '30',
    'rows' => '2',
    'size' => 60,
    'description' => 'Statement of the liability assumed by the distributor.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_liability][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_liability' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_liability][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '30',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  77 => 
  array (
    'label' => 'Format',
    'field_name' => 'field_dataset_format',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '31',
    'description' => 'Digital or Non-digital?',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_format' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Digital
Non-Digital',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_nondigform' => 
      array (
        'Non-Digital' => 'Non-Digital',
      ),
      'field_dataset_digform' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_digform_flg' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_digformnum' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_digformdate' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_digformspec' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_digtransopt' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_digtlurl' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_offlnmedia' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_offlnrecden' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_offlnrecdenunit' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_offlncompat' => 
      array (
        'Digital' => 'Digital',
      ),
      'field_dataset_offlnrecformt' => 
      array (
        'Digital' => 'Digital',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  78 => 
  array (
    'label' => 'Non-Digital Form',
    'field_name' => 'field_dataset_nondigform',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '32',
    'rows' => '2',
    'size' => 60,
    'description' => 'Explain the non-digital format used',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_nondigform][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_nondigform' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_nondigform][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Non-Digital' => 'Non-Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  79 => 
  array (
    'label' => 'Digital Format',
    'field_name' => 'field_dataset_digform',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '33',
    'description' => 'The format of the digital object -- please select from the options',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_digform' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'ARCE ARC/INFO Export format
ARCG ARC/INFO generate format
ASCII ASCII file, formatted for text attributes, declared
BIL  Imagery, band interleaved by line
BIP  Imagery, band interleaved by pixel
BSQ Imagery, band interleaved by sequential 
CDF  Common Data Format
CFF  Cartographic feature File (USDA Forest Service)
COORD User-created coordinate file, declared format
DBF dBase Data File
DEM  Digital Elevation Model format (US geological survey)
DFAD  Digital Feature Analysis Data (NIMA)
DGN Microstation format (Intergraph Corporation)
DIF Visicalc format
DIGEST Digital Geographic Information Exchange Standard
DLG Digital Line Graph (USDI Geological Survey)
DTED Digital Terrain Elevation Data (MIL-D-89020)
DWG AutoCAD Drawing format
DX90 Data Exchange \'90
DXF  AutoCAD Drawing Exchange format
EPS Encapsulate Postscript
ERDAS ERDAS image file (ERDAS Corporation)
FW Framework spreadsheet
GRA ARC/INFO graphic file
GRASS  Geographic Resources Analysis Support System
HDF  Hierarchical Data Format
IGDS  Interactive Graphic Design System format (Intergraph)
IGES Initial Graphics Exchange Standard
MDB  Microsoft Access data file
MOSS  Multiple Overlay 
netCDF network Common Data format
NITF  National Imagery Transfer Format
PLT ARC/INFO Plot file
PS Postscript
QP Quattro Pro data file
RPD Rapid file
RPF Raster Product Format (NIMA)
RPF Portable Bit Map format file
RVC Raster Vector Converted format (MicroImages)
RVF Raster Vector Format (MicroImages)
SDTS  Spatial Data Transfer Standard (FIPS 173)
SIF  Standard Interchange Format (DOD Project 2851)
SPLUS S-Plus file
TIFF Tagged Image format file
TGRLN Tiger Line format (Bureau of Census)
VPF Vector Product Format (NIMA)
WK1 LOTUS 1-2-3 file
WK2 LOTUS 1-2-3 file
XLS Microsoft Excel work sheet
XML extensible Markup Language (XML) file',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  80 => 
  array (
    'label' => 'Digital Format Version',
    'field_name' => 'field_dataset_digform_flg',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '34',
    'description' => 'The type of version -- either a number or a date',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_digform_flg' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Number
Date',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_digformnum' => 
      array (
        'Number' => 'Number',
      ),
      'field_dataset_digformdate' => 
      array (
        'Date' => 'Date',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  81 => 
  array (
    'label' => 'Digital Format Version Number',
    'field_name' => 'field_dataset_digformnum',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '36',
    'rows' => 5,
    'size' => '12',
    'description' => 'The format version number',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_digformnum][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_digformnum' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_digformnum][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 
        array (
          'Number' => 'Number',
        ),
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '30',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => '30',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  82 => 
  array (
    'label' => 'Digital Format Version Date',
    'field_name' => 'field_dataset_digformdate',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '37',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'The date of the digital format version',
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 
        array (
          'Date' => 'Date',
        ),
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
      'hour' => 'hour',
      'minute' => 'minute',
    ),
    'default_format' => 'medium',
    'tz_handling' => 'site',
    'timezone_db' => 'UTC',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  83 => 
  array (
    'label' => 'Format Specification',
    'field_name' => 'field_dataset_digformspec',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '38',
    'rows' => '2',
    'size' => 60,
    'description' => 'The underlying specification details about the digital format ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_digformspec][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_digformspec' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_digformspec][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  84 => 
  array (
    'label' => 'Digital Transfer Option',
    'field_name' => 'field_dataset_digtransopt',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '39',
    'description' => 'The options to tranfer the digital data, namely "online" (a URL) or "offline" (with details about the data transfer)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_digtransopt' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Online
Offline',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_digtlurl' => 
      array (
        'Online' => 'Online',
      ),
      'field_dataset_offlnmedia' => 
      array (
        'Offline' => 'Offline',
      ),
      'field_dataset_offlnrecden' => 
      array (
        'Offline' => 'Offline',
      ),
      'field_dataset_offlnrecdenunit' => 
      array (
        'Offline' => 'Offline',
      ),
      'field_dataset_offlncompat' => 
      array (
        'Offline' => 'Offline',
      ),
      'field_dataset_offlnrecformt' => 
      array (
        'Offline' => 'Offline',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  85 => 
  array (
    'label' => 'Digital Transfer URL',
    'field_name' => 'field_dataset_digtlurl',
    'type' => 'link',
    'widget_type' => 'link',
    'change' => 'Change basic information',
    'weight' => '40',
    'description' => 'The URL where the resource can be accessed online',
    'default_value' => 
    array (
      0 => 
      array (
        'url' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_digtlurl' => 
      array (
        0 => 
        array (
          'url' => '',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 
        array (
          'Online' => 'Online',
        ),
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'validate_url' => 1,
    'url' => 0,
    'title' => 'none',
    'title_value' => '',
    'enable_tokens' => 0,
    'display' => 
    array (
      'url_cutoff' => '80',
    ),
    'attributes' => 
    array (
      'target' => 'default',
      'rel' => '',
      'class' => '',
      'title' => '',
    ),
    'op' => 'Save field settings',
    'module' => 'link',
    'widget_module' => 'link',
    'columns' => 
    array (
      'url' => 
      array (
        'type' => 'varchar',
        'length' => 2048,
        'not null' => false,
        'sortable' => true,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
      ),
      'attributes' => 
      array (
        'type' => 'text',
        'size' => 'medium',
        'not null' => false,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  86 => 
  array (
    'label' => 'Offline Media',
    'field_name' => 'field_dataset_offlnmedia',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '41',
    'description' => 'The type offline media used to store the data, please select an option',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_offlnmedia' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 
        array (
          'Offline' => 'Offline',
        ),
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'CD-ROM
DVD-ROM
3-1/2 inch Floppy
9-track tape
4 mm cartridge tape
8 mm cartridge tape
1/4 inch cartridge tape',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  87 => 
  array (
    'label' => 'Recording Density',
    'field_name' => 'field_dataset_offlnrecden',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '42',
    'rows' => '2',
    'size' => 60,
    'description' => 'The density in which the data set can be recorded.  Enter one per line (>0.0)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_offlnrecden][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_offlnrecden' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_offlnrecden][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 
        array (
          'Offline' => 'Offline',
        ),
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  88 => 
  array (
    'label' => 'Recording Density Units',
    'field_name' => 'field_dataset_offlnrecdenunit',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '43',
    'rows' => 5,
    'size' => '12',
    'description' => 'The units of measure for the recording density',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_offlnrecdenunit][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_offlnrecdenunit' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_offlnrecdenunit][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 
        array (
          'Offline' => 'Offline',
        ),
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '30',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => '30',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  89 => 
  array (
    'label' => 'Compatibility Info',
    'field_name' => 'field_dataset_offlncompat',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '44',
    'rows' => '2',
    'size' => 60,
    'description' => 'Description of other limitations or requirements for using the media',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_offlncompat][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_offlncompat' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_offlncompat][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 
        array (
          'Offline' => 'Offline',
        ),
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  90 => 
  array (
    'label' => 'Recording Format',
    'field_name' => 'field_dataset_offlnrecformt',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '45',
    'rows' => 5,
    'size' => '30',
    'description' => 'Enter the format used to enter the data set.  Options include: cpio, tar, High Sierra, ISO 9660, ISO 9660 with Rock Ride extensions, ISO 9660 with Apple HFS extensions',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_offlnrecformt][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_offlnrecformt' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_offlnrecformt][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 
        array (
          'Digital' => 'Digital',
        ),
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 
        array (
          'Offline' => 'Offline',
        ),
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '120',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => '120',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  91 => 
  array (
    'label' => 'Fees',
    'field_name' => 'field_dataset_orderfees',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '46',
    'rows' => '2',
    'size' => 60,
    'description' => 'Fees associated with the data ordering process',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_orderfees][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_orderfees' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_orderfees][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '31',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  92 => 
  array (
    'label' => 'Turnaround',
    'field_name' => 'field_dataset_orderturnrnd',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '47',
    'rows' => '2',
    'size' => 60,
    'description' => 'Typical turnaround time for the filling of an order',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_orderturnrnd][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_orderturnrnd' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_orderturnrnd][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '32',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  93 => 
  array (
    'label' => 'Ordering Instructions',
    'field_name' => 'field_dataset_orderinstr',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '48',
    'rows' => '2',
    'size' => 60,
    'description' => ' General instructions and advice about, and special terms and services provided for, the data set by the distributor.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_orderinstr][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_orderinstr' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_orderinstr][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '33',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  94 => 
  array (
    'label' => 'Custom Order Process',
    'field_name' => 'field_dataset_customorder',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '49',
    'rows' => '2',
    'size' => 60,
    'description' => 'Describe custom data set distribution services available and their terms and conditions.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_customorder][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_customorder' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_customorder][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  95 => 
  array (
    'label' => 'Technical Prerequisites',
    'field_name' => 'field_dataset_ordertechreq',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '50',
    'rows' => '2',
    'size' => 60,
    'description' => 'Describe any technical capabilities the consumer must have to use the data set in the form(s) provided by the distributor.
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_ordertechreq][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_ordertechreq' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_ordertechreq][0][value',
        ),
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '34',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  96 => 
  array (
    'label' => 'Data will be available',
    'field_name' => 'field_dataset_orderdateflag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '51',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Range of Dates',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_orderdateflag' => 
      array (
        'value' => 'Range of Dates',
      ),
    ),
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Single Date
Multiple Dates
Range of Dates',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'controlled_fields' => 
    array (
      'field_dataset_ordermdate' => 
      array (
        'Multiple Dates' => 'Multiple Dates',
      ),
      'field_dataset_ordersdate' => 
      array (
        'Single Date' => 'Single Date',
      ),
      'field_dataset_orderrgdate' => 
      array (
        'Range of Dates' => 'Range of Dates',
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '35',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  97 => 
  array (
    'label' => 'Single Date',
    'field_name' => 'field_dataset_ordersdate',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '52',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'The date when data can be orderered',
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 
        array (
          'Single Date' => 'Single Date',
        ),
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '36',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  98 => 
  array (
    'label' => 'Multiple Dates',
    'field_name' => 'field_dataset_ordermdate',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '53',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => '',
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 
        array (
          'Multiple Dates' => 'Multiple Dates',
        ),
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '37',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  99 => 
  array (
    'label' => 'Date Range',
    'field_name' => 'field_dataset_orderrgdate',
    'type' => 'date',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '54',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'Range of dates when data is available',
    'group' => 'group_geotemporal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 
        array (
          'Range of Dates' => 'Range of Dates',
        ),
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => 'optional',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => 20,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'value2' => 
      array (
        'type' => 'varchar',
        'length' => 20,
        'not null' => false,
        'sortable' => true,
        'views' => false,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '38',
      'parent' => 'group_geotemporal',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  100 => 
  array (
    'label' => 'Metadata Standard Name',
    'field_name' => 'field_dataset_metadatastdname',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '24',
    'description' => '"FGDC Biological" is default
"National Biological" is alternate
"FGDC Content" is for plain spatial data',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'FGDC Biological Data Profile of the Content Standard for Digital Geospatial Metadata',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_metadatastdname' => 
      array (
        'value' => 'FGDC Biological Data Profile of the Content Standard for Digital Geospatial Metadata',
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'FGDC Biological Data Profile of the Content Standard for Digital Geospatial Metadata
Content Standard for National Biological Information Infrastructure Metadata
FGDC Content for Digital Geospatial Metadata',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '24',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  101 => 
  array (
    'label' => 'Version of the Standard',
    'field_name' => 'field_dataset_stdversion',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '25',
    'description' => '1999 = Biological
1998 = Plain spatial data
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'FGDC-STD-001.1-1999',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_stdversion' => 
      array (
        'value' => 'FGDC-STD-001.1-1999',
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'FGDC-STD-001.1-1999
FGDC-STD-001-1998',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '25',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  102 => 
  array (
    'label' => 'Metadata Creation/Update Date',
    'field_name' => 'field_dataset_metdtdate',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '26',
    'default_value' => 'now',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'The date on which the metadata was created or last updated.',
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '26',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  103 => 
  array (
    'label' => 'Metadata Contact',
    'field_name' => 'field_dataset_metdtcontact_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '27',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Contact information about the person and organization that created the metadata.
',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_dataset_metdtcontact_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_metdtcontact_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_dataset_metdtcontact_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_dataset_metdtcontact_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'referenceable_types' => 
    array (
      'person' => 'person',
      'software' => 0,
      'biblio' => 0,
      'browse_graphics' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'planar_coordinate_system' => 0,
      'research_site' => 0,
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'modal_noderef_link' => true,
    'op' => 'Save field settings',
    'module' => 'nodereference',
    'widget_module' => 'nodereference',
    'columns' => 
    array (
      'nid' => 
      array (
        'type' => 'int',
        'unsigned' => true,
        'not null' => false,
        'index' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '27',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  104 => 
  array (
    'label' => 'Metadata  Review Date',
    'field_name' => 'field_dataset_mtdtreviewdate',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '29',
    'default_value' => 'now',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => 'The date of the latest review of the metadata entry.',
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '28',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  105 => 
  array (
    'label' => 'Future Metadata Review Date',
    'field_name' => 'field_dataset_futmtdtreviewdate',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '30',
    'default_value' => 'blank',
    'default_value2' => 'same',
    'default_value_code' => '',
    'default_value_code2' => '',
    'input_format' => 'Y-m-d H:i:s',
    'input_format_custom' => '',
    'advanced' => 
    array (
      'label_position' => 'above',
      'text_parts' => 
      array (
        'year' => 0,
        'month' => 0,
        'day' => 0,
        'hour' => 0,
        'minute' => 0,
        'second' => 0,
      ),
    ),
    'increment' => 1,
    'year_range' => '-3:+3',
    'label_position' => 'above',
    'text_parts' => 
    array (
    ),
    'description' => ' The date by which the metadata entry should be reviewed.',
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'repeat' => 0,
    'todate' => '',
    'granularity' => 
    array (
      'year' => 'year',
      'month' => 'month',
      'day' => 'day',
    ),
    'default_format' => 'short',
    'tz_handling' => 'none',
    'timezone_db' => 'America/Denver',
    'op' => 'Save field settings',
    'module' => 'date',
    'widget_module' => 'date',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'datetime',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '32',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  106 => 
  array (
    'label' => 'Metadata Access Constraints',
    'field_name' => 'field_dataset_mtdtaccesscons',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '31',
    'rows' => '2',
    'size' => 60,
    'description' => 'Restrictions and legal prerequisites for accessing the metadata. These include any access constraints applied to assure the protection of privacy or intellectual property, and any special restrictions or limitations on obtaining the metadata.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_mtdtaccesscons][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_mtdtaccesscons' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_mtdtaccesscons][0][value',
        ),
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '33',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  107 => 
  array (
    'label' => 'Metadata Use Constraints',
    'field_name' => 'field_dataset_mtdtusecons',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '32',
    'rows' => '2',
    'size' => 60,
    'description' => 'Restrictions and legal prerequisites for using the metadata after access is granted. These include any metadata use constraints applied to assure the protection of privacy or intellectual property, and any special restrictions or limitations on using the metadata.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_mtdtusecons][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_mtdtusecons' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_mtdtusecons][0][value',
        ),
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '34',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  108 => 
  array (
    'label' => 'Metadata Security Classification System',
    'field_name' => 'field_dataset_mtdtscs',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '33',
    'rows' => '5',
    'size' => '60',
    'description' => 'Name of the classification system for the metadata.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_mtdtscs][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_mtdtscs' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_mtdtscs][0][value',
        ),
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '35',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  109 => 
  array (
    'label' => 'Metadata Security Classification',
    'field_name' => 'field_dataset_mtdtsecurityclass',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '34',
    'description' => 'Name of the handling restrictions on the metadata.
	',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Unclassified',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_mtdtsecurityclass' => 
      array (
        'value' => 'Unclassified',
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Unclassified
Sensitive
Restricted
Confidential
Secret
Top Secret',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'optionwidgets',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '36',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  110 => 
  array (
    'label' => 'Metadata Security Handling Description',
    'field_name' => 'field_dataset_mtdtshd',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '35',
    'rows' => '2',
    'size' => 60,
    'description' => 'Additional information about the restrictions on handling the metadata.
	',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_dataset_mtdtshd][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_dataset_mtdtshd' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_dataset_mtdtshd][0][value',
        ),
      ),
    ),
    'group' => 'group_methods',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_flag_optional' => 'conditional_field_no_value',
        'field_dataset_owner_ref' => 'conditional_field_no_value',
        'field_dataset_geoform' => 'conditional_field_no_value',
        'field_dataset_datetype' => 'conditional_field_no_value',
        'field_dataset_currentness' => 'conditional_field_no_value',
        'field_dataset_maintenance' => 'conditional_field_no_value',
        'field_dataset_updating' => 'conditional_field_no_value',
        'field_dataset_site_ref' => 'conditional_field_no_value',
        'field_dataset_contact_ref' => 'conditional_field_no_value',
        'field_dataset_securclass' => 'conditional_field_no_value',
        'field_dataset_analytcltool_ref' => 'conditional_field_no_value',
        'field_dataset_ext_assoc_ref' => 'conditional_field_no_value',
        'field_dataset_datamanager_ref' => 'conditional_field_no_value',
        'field_dataset_labcrew_ref' => 'conditional_field_no_value',
        'field_dataset_fieldcrew_ref' => 'conditional_field_no_value',
        'field_dataset_browsegraph_ref' => 'conditional_field_no_value',
        'field_dataset_biblio_ref' => 'conditional_field_no_value',
        'field_dataset_metadatastdname' => 'conditional_field_no_value',
        'field_dataset_stdversion' => 'conditional_field_no_value',
        'field_dataset_metdtcontact_ref' => 'conditional_field_no_value',
        'field_dataset_distributor_ref' => 'conditional_field_no_value',
        'field_dataset_format' => 'conditional_field_no_value',
        'field_dataset_digform' => 'conditional_field_no_value',
        'field_dataset_digform_flg' => 'conditional_field_no_value',
        'field_dataset_mtdtsecurityclass' => 'conditional_field_no_value',
        'field_dataset_datafile_ref' => 'conditional_field_no_value',
        'field_dataset_digtransopt' => 'conditional_field_no_value',
        'field_dataset_offlnmedia' => 'conditional_field_no_value',
        'field_dataset_orderdateflag' => 'conditional_field_no_value',
        'field_dataset_rastervectorflag' => 'conditional_field_no_value',
        'field_dataset_sdtorvpfflag' => 'conditional_field_no_value',
        'field_dataset_vpftopology' => 'conditional_field_no_value',
        'field_dataset_rastertype' => 'conditional_field_no_value',
        'field_dataset_sprefdatum' => 'conditional_field_no_value',
        'field_dataset_source_ref' => 'conditional_field_no_value',
        'field_dataset_sprefellipsoid' => 'conditional_field_no_value',
        'field_dataset_methods_ref' => 'conditional_field_no_value',
        'field_dataset_procstep_ref' => 'conditional_field_no_value',
        'field_dataset_cloud_cover' => 'conditional_field_no_value',
        'field_dataset_spreftypeflag' => 'conditional_field_no_value',
        'field_dataset_sprefgeogunit' => 'conditional_field_no_value',
        'field_dataset_sperefplan_ref' => 'conditional_field_no_value',
        'field_dataset_vertdef' => 'conditional_field_no_value',
        'field_dataset_altdatum' => 'conditional_field_no_value',
        'field_dataset_altunits' => 'conditional_field_no_value',
        'field_dataset_altenc' => 'conditional_field_no_value',
        'field_dataset_depthdn' => 'conditional_field_no_value',
        'field_dataset_depthdu' => 'conditional_field_no_value',
        'field_dataset_depthem' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'op' => 'Save field settings',
    'module' => 'text',
    'widget_module' => 'text',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'text',
        'size' => 'big',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '37',
      'parent' => 'group_methods',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
);
$content['extra']  = array (
  'title' => '-18',
  'revision_information' => '19',
  'author' => '22',
  'options' => '21',
  'comment_settings' => '24',
  'menu' => '25',
  'path' => '23',
  'attachments' => '20',
  'cck_fieldgroup_tabs_residual' => '-20',
);
