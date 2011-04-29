$content['type']  = array (
  'name' => 'Entity Information',
  'type' => 'data_file',
  'description' => 'Details about the information content of the data set, including the entity types, their attributes, and the domains from which attribute values may be assigned.
',
  'title_label' => 'Entity Type Label',
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
  'old_type' => 'data_file',
  'orig_type' => 'data_file',
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
    'label' => 'ASCII details',
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
    'weight' => '-16',
    'group_name' => 'group_datafile_ascii',
  ),
  1 => 
  array (
    'label' => 'Attributes',
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
    'weight' => '-15',
    'group_name' => 'group_datafile_attrributes',
  ),
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Entity Type Definition',
    'field_name' => 'field_datafile_description',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-18',
    'rows' => '2',
    'size' => '10',
    'description' => 'A description of the spreadsheet or text file containing the data.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_datafile_description][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
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
    'label' => 'Entity Type Definition Source',
    'field_name' => 'field_datafile_edefsource',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-17',
    'rows' => '2',
    'size' => 60,
    'description' => 'The source of the Entity Definition',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_datafile_edefsource][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_datafile_edefsource' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_datafile_edefsource][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
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
    'label' => 'Data File',
    'field_name' => 'field_data_file',
    'type' => 'filefield',
    'widget_type' => 'filefield_widget',
    'change' => 'Change basic information',
    'weight' => '-15',
    'file_extensions' => 'txt xls xlsx csv fhx rtf xml doc docx',
    'progress_indicator' => 'bar',
    'file_path' => '',
    'max_filesize_per_file' => '',
    'max_filesize_per_node' => '',
    'description' => 'Uload the actual spreadsheet containing the data',
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'list_field' => '0',
    'list_default' => 1,
    'description_field' => '0',
    'op' => 'Save field settings',
    'module' => 'filefield',
    'widget_module' => 'filefield',
    'columns' => 
    array (
      'fid' => 
      array (
        'type' => 'int',
        'not null' => false,
        'views' => true,
      ),
      'list' => 
      array (
        'type' => 'int',
        'size' => 'tiny',
        'not null' => false,
        'views' => true,
      ),
      'data' => 
      array (
        'type' => 'text',
        'serialize' => true,
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
  3 => 
  array (
    'label' => 'Number of Header Lines',
    'field_name' => 'field_num_header_line',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-14',
    'description' => 'The number of lines at the top of the spreadsheet not containing any actual data.  Example: When the first line contains column labels, the number of header lines is one.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_num_header_line][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_num_header_line' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_num_header_line][0][value',
        ),
      ),
    ),
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
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
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  4 => 
  array (
    'label' => 'Number of Footer Lines',
    'field_name' => 'field_num_footer_lines',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-13',
    'description' => 'The number of lines in a spreadsheet trailing the actual data.  Example, 0, when no lines trail the data',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_num_footer_lines][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_num_footer_lines' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_num_footer_lines][0][value',
        ),
      ),
    ),
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
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
      'token' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  5 => 
  array (
    'label' => 'Orientation',
    'field_name' => 'field_orientation',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-12',
    'description' => 'The orientation of the spreadsheet, that is, by columns (one entry or record w/ many columns/fields) or by rows',
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
      'field_orientation' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'column|Column
row|Row',
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
  6 => 
  array (
    'label' => 'Quote Character',
    'field_name' => 'field_quote_character',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-11',
    'description' => 'The symbols used to quote text, whether single quotes or double quotes',
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
      'field_quote_character' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'single quote|Single Quote
double quote|Double Quote',
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
  7 => 
  array (
    'label' => 'Field Delimiter',
    'field_name' => 'field_delimiter',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-10',
    'rows' => 5,
    'size' => '10',
    'description' => 'How are the columns separated? are the columns comma-delimited, Tab-delimited, or some other character, as a vertical bar, etc? We call the used delimiter a "field delimiter".',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_delimiter][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_delimiter' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_delimiter][0][value',
        ),
      ),
    ),
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '6',
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
        'length' => '6',
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
  8 => 
  array (
    'label' => 'Record Delimiter',
    'field_name' => 'field_record_delimiter',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-9',
    'description' => 'The character used to delimit or separate records (usually a new line - in case of doubt, leave empty)',
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
      'field_record_delimiter' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_datafile_ascii',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'tab|Tab
semicolon|Semicolon
space|Space
comma|Comma
other|Other',
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
  9 => 
  array (
    'label' => 'Attributes',
    'field_name' => 'field_datafile_variable_ref',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-13',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Type the variable name used for this study and select the appropriate variable from the list. If you do not see your variable, just type in the input field the variable name, you can add the variable details later.  Click the "Add another item" button for additional variables.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_datafile_variable_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_datafile_variable_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_datafile_variable_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_datafile_variable_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_datafile_attrributes',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'variable' => 'variable',
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
      'methodology' => 0,
      'process_step' => false,
    ),
    'advanced_view' => 'inline_attribute_view',
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
  10 => 
  array (
    'label' => 'Associated Data Set',
    'field_name' => 'field_dataset_referrer',
    'type' => 'nodereferrer',
    'widget_type' => 'nodereferrer_list',
    'change' => 'Change basic information',
    'weight' => '-14',
    'description' => 'These are the data sets that refer this data file or spreadsheet',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_datafile_variable_ref' => 'conditional_field_no_value',
        'field_orientation' => 'conditional_field_no_value',
        'field_quote_character' => 'conditional_field_no_value',
        'field_record_delimiter' => 'conditional_field_no_value',
      ),
    ),
    'required' => false,
    'multiple' => 0,
    'referrer_types' => 
    array (
      'data_set' => 'data_set',
      'biblio' => 0,
      'data_file' => 0,
      'oai2' => 0,
      'page' => 0,
      'person' => 0,
      'profile' => 0,
      'research_site' => 0,
      'variable' => 0,
      'book' => false,
      'old_dataset' => false,
      'event' => false,
      'faq' => false,
      'download' => false,
      'met_central' => false,
      'reu' => false,
      'research_project' => false,
      'story' => false,
      'webcam' => false,
      'webform' => false,
      'slide' => false,
      'software' => false,
      'browse_graphics' => false,
      'methodology' => false,
      'source_info' => false,
      'planar_coordinate_system' => false,
      'process_step' => false,
    ),
    'referrer_fields' => 
    array (
      'field_dataset_datafile_ref' => 'field_dataset_datafile_ref',
      'field_datafile_variable_ref' => 0,
      'field_dataset_owner' => 0,
      'field_dataset_contact' => 0,
      'field_dataset_ext_assoc' => 0,
      'field_dataset_site_ref' => 0,
      'field_dataset_assct_biblio' => 0,
      'field_datafile_site_ref' => false,
      'field_person_pubs' => false,
      'field_biblio_profile1' => false,
      'field_dataset_datamanager_ref' => false,
      'field_dataset_fieldcrew_ref' => false,
      'field_dataset_labcrew_ref' => false,
      'field_dataset_mentor1' => false,
      'field_dataset_dataset_ref' => false,
      'field_research_project_invest' => false,
      'field_research_project_data' => false,
      'field_research_project_sites' => false,
      'field_reu_mentor' => false,
      'field_dataset_biblio_ref' => false,
      'field_dataset_owner_ref' => false,
      'field_dataset_contact_ref' => false,
      'field_dataset_ext_assoc_ref' => false,
      'field_page_image_ref' => false,
      'field_dataset_analytcltool_ref' => false,
      'field_dataset_browsegraph_ref' => false,
      'field_dataset_methods_ref' => false,
      'field_dataset_proccontact_ref' => false,
      'field_dataset_metdtcontact_ref' => false,
      'field_dataset_distributor_ref' => false,
      'field_methods_cit' => false,
      'field_analyticaltool_contact_ref' => false,
      'field_analyticaltool_citat_ref' => false,
      'field_dataset_source_ref' => false,
      'field_source_cit_ref' => false,
      'field_dataset_procstep_ref' => false,
      'field_dataset_sperefplan_ref' => false,
      'field_processtp_contact_ref' => false,
    ),
    'referrer_nodes_per_page' => '3',
    'referrer_pager_element' => '1',
    'referrer_order' => 'TITLE_ASC',
    'op' => 'Save field settings',
    'module' => 'nodereferrer',
    'widget_module' => 'nodereferrer',
    'columns' => 
    array (
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
  'title' => '-19',
  'revision_information' => '-11',
  'author' => '-12',
  'options' => '-10',
  'comment_settings' => '-7',
  'menu' => '-13',
  'path' => '-8',
  'attachments' => '-9',
  'cck_fieldgroup_tabs_residual' => '-20',
);
