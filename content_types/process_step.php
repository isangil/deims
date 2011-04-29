$content['type']  = array (
  'name' => 'Process Step',
  'type' => 'process_step',
  'description' => 'Information about a single data processing event.
Can describe process applied to an acquired data set or to raw data you collected.
',
  'title_label' => 'Title',
  'body_label' => 'Process Description',
  'min_word_count' => '0',
  'help' => 'Information about a single data processing event.
Can describe process applied to an acquired data set or to raw data you collected.
',
  'node_options' => 
  array (
    'status' => true,
    'promote' => false,
    'sticky' => false,
    'revision' => false,
  ),
  'upload' => '0',
  'show_preview_changes' => 1,
  'show_diff_inline' => 0,
  'enable_revisions_page' => 1,
  'old_type' => 'process_step',
  'orig_type' => '',
  'module' => 'node',
  'custom' => '1',
  'modified' => '1',
  'locked' => '0',
  'comment' => '0',
  'comment_default_mode' => '4',
  'comment_default_order' => '1',
  'comment_default_per_page' => '50',
  'comment_controls' => '3',
  'comment_anonymous' => 0,
  'comment_subject_field' => '1',
  'comment_preview' => '1',
  'comment_form_location' => '0',
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Source(s) used citation abbreviation(s)',
    'field_name' => 'field_processtp_srcused_abb',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-3',
    'rows' => '2',
    'size' => 60,
    'description' => 'Abbreviated citations on the information about a single data processing event. ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_processtp_srcused_abb][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_processtp_contact_ref' => 'conditional_field_no_value',
        'field_processtp_dateflag' => 'conditional_field_no_value',
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
  1 => 
  array (
    'label' => 'Source(s) produced citation abbreviation(s)',
    'field_name' => 'field_processtp_srcprod_abb',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-2',
    'rows' => '2',
    'size' => 60,
    'description' => 'The Source Citation Abbreviation of an intermediate data set that (1) is significant in the opinion of the data producer, (2) is generated in the processing step, and (3) is used in later processing steps.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_processtp_srcprod_abb][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_processtp_srcprod_abb' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_processtp_srcprod_abb][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_processtp_contact_ref' => 'conditional_field_no_value',
        'field_processtp_dateflag' => 'conditional_field_no_value',
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
  2 => 
  array (
    'label' => 'Process contact',
    'field_name' => 'field_processtp_contact_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-1',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'the party responsible for the processing step information. Use the autocomplete help (start typing the name) to retrieve the contact from the database, or Add a new contact using the link immediately below.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_processtp_contact_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_processtp_contact_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_processtp_contact_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_processtp_contact_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_processtp_dateflag' => 'conditional_field_no_value',
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
  3 => 
  array (
    'label' => 'Process Date',
    'field_name' => 'field_processtp_dateflag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => 0,
    'description' => 'The date of the processing event, choose an option.',
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
      'field_processtp_dateflag' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_processtp_contact_ref' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Unknown
Not Complete
Specify Date',
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
      'field_processtp_date' => 
      array (
        'Specify Date' => 'Specify Date',
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
    'label' => 'Date',
    'field_name' => 'field_processtp_date',
    'type' => 'datetime',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '1',
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
    'description' => 'Date when the data process event was completed',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_processtp_contact_ref' => 'conditional_field_no_value',
        'field_processtp_dateflag' => 
        array (
          'Specify Date' => 'Specify Date',
        ),
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
);
$content['extra']  = array (
  'title' => '-5',
  'body_field' => '-4',
  'revision_information' => '4',
  'author' => '3',
  'options' => '5',
  'comment_settings' => '7',
  'menu' => '2',
  'path' => '6',
);
