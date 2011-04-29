$content['type']  = array (
  'name' => 'Source Information',
  'type' => 'source_info',
  'description' => 'List of sources and a short discussion of the information contributed by each',
  'title_label' => 'Source Citation Abbreviation',
  'body_label' => 'Source Contribution',
  'min_word_count' => '0',
  'help' => '',
  'node_options' => 
  array (
    'status' => true,
    'promote' => true,
    'sticky' => false,
    'revision' => false,
  ),
  'upload' => 1,
  'show_preview_changes' => true,
  'show_diff_inline' => false,
  'enable_revisions_page' => true,
  'old_type' => 'source_info',
  'orig_type' => 'source_info',
  'module' => 'features',
  'custom' => false,
  'modified' => false,
  'locked' => true,
  'reset' => 'Reset to defaults',
  'comment' => 2,
  'comment_default_mode' => 4,
  'comment_default_order' => 1,
  'comment_default_per_page' => 50,
  'comment_controls' => 3,
  'comment_anonymous' => 0,
  'comment_subject_field' => 1,
  'comment_preview' => 1,
  'comment_form_location' => 0,
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Source Citation',
    'field_name' => 'field_source_cit_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-3',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'A citation about the source contribution',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_source_cit_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_source_typemedia' => 'conditional_field_no_value',
        'field_source_date' => 'conditional_field_no_value',
        'field_source_current' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
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
      'source_info' => 0,
      'story' => 0,
      'variable' => 0,
      'methodology' => 0,
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
    'label' => 'Type of Source Media',
    'field_name' => 'field_source_typemedia',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-2',
    'description' => 'Medium of the source data set',
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
      'field_source_typemedia' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_source_cit_ref' => 'conditional_field_no_value',
        'field_source_date' => 'conditional_field_no_value',
        'field_source_current' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'paper
stable-base material
microfiche
microfilm
audiocassette
chart
filmstrip
transparency
physical model
computer program
disc
online
CD-ROM
DVD
digital database file
field notes
photographic print
printed table
visually observed or measured
cartridge tape
magnetic tape
videocassette
videodisc
videotape
electronic bulletin board
electronic mail system
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
  2 => 
  array (
    'label' => 'Source Scale Denominator',
    'field_name' => 'field_source_scaleden',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-1',
    'description' => 'Denominator of representative fraction on a map ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_source_scaleden][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_source_scaleden' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_source_scaleden][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_source_cit_ref' => 'conditional_field_no_value',
        'field_source_typemedia' => 'conditional_field_no_value',
        'field_source_date' => 'conditional_field_no_value',
        'field_source_current' => 'conditional_field_no_value',
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
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  3 => 
  array (
    'label' => 'Time Period of Content',
    'field_name' => 'field_source_date',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => 0,
    'description' => 'The starting and ending dates that define the period for which the information resource corresponds to. Select whether this is a "single date", "multiple dates" or a "Range of Dates".  When the exact date is unknown, use an approximated date. ',
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
      'field_source_date' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_source_cit_ref' => 'conditional_field_no_value',
        'field_source_typemedia' => 'conditional_field_no_value',
        'field_source_current' => 'conditional_field_no_value',
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
      'field_source_daterange' => 
      array (
        'Range of Dates' => 'Range of Dates',
      ),
      'field_source_dates' => 
      array (
        'Single Date / Multiple Dates' => 'Single Date / Multiple Dates',
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
    'label' => 'Date(s)',
    'field_name' => 'field_source_dates',
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
    'description' => 'The starting and ending dates that define the period for which the information resource corresponds to. Enter the date using a yyyy-mm-dd format. If instead a single date, the data was collected or reflects multiple dates, please press the Add another item buttom to enter as many date fields as needed.',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_source_cit_ref' => 'conditional_field_no_value',
        'field_source_typemedia' => 'conditional_field_no_value',
        'field_source_date' => 
        array (
          'Single Date / Multiple Dates' => 'Single Date / Multiple Dates',
        ),
        'field_source_current' => 'conditional_field_no_value',
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
  5 => 
  array (
    'label' => 'Date Range',
    'field_name' => 'field_source_daterange',
    'type' => 'date',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '2',
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
        'field_source_cit_ref' => 'conditional_field_no_value',
        'field_source_typemedia' => 'conditional_field_no_value',
        'field_source_date' => 
        array (
          'Range of Dates' => 'Range of Dates',
        ),
        'field_source_current' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
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
  6 => 
  array (
    'label' => 'Currentness Reference',
    'field_name' => 'field_source_current',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '3',
    'description' => 'The basis for which the time period is determined. ”Ground Condition” indicates the data represents what was on the ground during the “Time Period”. ”Publication Date” indicates the data represents the data that was incorporated into the information resource during the “Time Period”.',
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
      'field_source_current' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_source_cit_ref' => 'conditional_field_no_value',
        'field_source_typemedia' => 'conditional_field_no_value',
        'field_source_date' => 'conditional_field_no_value',
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
  'author' => '5',
  'options' => '7',
  'comment_settings' => '9',
  'menu' => '6',
  'path' => '10',
  'attachments' => '8',
);
