$content['type']  = array (
  'name' => 'Data File Structure',
  'type' => 'data_file',
  'description' => 'The description of the data file, usually, the physical properties of the file that contains the data.  Name, delimiters, URL or resource locator, size, length, description, and the likes',
  'title_label' => 'Data File Structure Name',
  'body_label' => '',
  'min_word_count' => '0',
  'help' => '',
  'node_options' => 
  array (
    'status' => true,
    'revision' => true,
    'promote' => false,
    'sticky' => false,
  ),
  'upload' => '0',
  'old_type' => 'data_file',
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
  'comment_subject_field' => '0',
  'comment_preview' => '1',
  'comment_form_location' => '0',
);
$content['groups']  = array (
  0 => 
  array (
    'label' => 'Temporal Coverage',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => 'Please enter the dates data was collected',
      ),
      'display' => 
      array (
        'description' => 'Dates data was collected.',
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
    'weight' => '-10',
    'group_name' => 'group_temporal_coverage',
  ),
  1 => 
  array (
    'label' => 'Methods',
    'group_type' => 'multigroup',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => 'Specify here the methodologies associated with this data file',
      ),
      'display' => 
      array (
        'description' => 'Specify here the methodologies associated with this data file',
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
    'weight' => '-9',
    'group_name' => 'group_methods',
  ),
  2 => 
  array (
    'label' => 'Geo-references, Variables and Data sets',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => 'These are the variables and data sets associated with the data file',
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
    'weight' => '-8',
    'group_name' => 'group_relatedvarsdatasets',
  ),
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Description',
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
    'label' => 'Data File',
    'field_name' => 'field_data_file',
    'type' => 'filefield',
    'widget_type' => 'filefield_widget',
    'change' => 'Change basic information',
    'weight' => '-17',
    'file_extensions' => 'txt xls xlsx csv fhx rtf xml doc docx',
    'progress_indicator' => 'bar',
    'file_path' => '',
    'max_filesize_per_file' => '',
    'max_filesize_per_node' => '',
    'description' => 'Uload the actual spreadsheet containing the data',
    'group' => false,
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
  2 => 
  array (
    'label' => 'Number of Header Lines',
    'field_name' => 'field_num_header_line',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-16',
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
    'group' => false,
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
  3 => 
  array (
    'label' => 'Number of Footer Lines',
    'field_name' => 'field_num_footer_lines',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-15',
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
    'group' => false,
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
    'label' => 'Orientation',
    'field_name' => 'field_orientation',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-14',
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
    'group' => false,
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
  5 => 
  array (
    'label' => 'Quote Character',
    'field_name' => 'field_quote_character',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-13',
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
    'group' => false,
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
  6 => 
  array (
    'label' => 'Field Delimiter',
    'field_name' => 'field_delimiter',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-12',
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
    'group' => false,
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
  7 => 
  array (
    'label' => 'Record Delimiter',
    'field_name' => 'field_record_delimiter',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-11',
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
    'group' => false,
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
  8 => 
  array (
    'label' => 'Date Range',
    'field_name' => 'field_beg_end_date',
    'type' => 'date',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '51',
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
    'group' => 'group_temporal_coverage',
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
  9 => 
  array (
    'label' => 'Methods',
    'field_name' => 'field_methods',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '47',
    'rows' => '2',
    'size' => 60,
    'description' => 'The methodologies used to gather these data',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        'format' => '1',
        '_error_element' => 'default_value_widget][field_methods][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_methods' => 
      array (
        0 => 
        array (
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_methods][0][value',
        ),
      ),
    ),
    'group' => 'group_methods',
    'required' => 0,
    'multiple' => '1',
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
    'label' => 'Instrumentation',
    'field_name' => 'field_instrumentation',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '48',
    'rows' => '2',
    'size' => 60,
    'description' => 'Information about the instruments used to gather data ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        'format' => '1',
        '_error_element' => 'default_value_widget][field_instrumentation][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_instrumentation' => 
      array (
        0 => 
        array (
          'value' => '',
          'format' => '1',
          '_error_element' => 'default_value_widget][field_instrumentation][0][value',
        ),
      ),
    ),
    'group' => 'group_methods',
    'required' => 0,
    'multiple' => '1',
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
  11 => 
  array (
    'label' => 'Quality Assurance',
    'field_name' => 'field_quality',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '49',
    'rows' => '2',
    'size' => 60,
    'description' => 'Quality assurance and control procedures used.',
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
    'group' => 'group_methods',
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
  12 => 
  array (
    'label' => 'Variables',
    'field_name' => 'field_datafile_variable_ref',
    'type' => 'nodereference',
    'widget_type' => 'noderefcreate_autocomplete',
    'change' => 'Change basic information',
    'weight' => '43',
    'autocomplete_match' => 'contains',
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
    'group' => 'group_relatedvarsdatasets',
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'variable' => 'variable',
      'biblio' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'oai2' => 0,
      'page' => 0,
      'person' => 0,
      'research_site' => 0,
      'story' => 0,
      'slide' => false,
    ),
    'advanced_view' => 'inline_attribute_view',
    'advanced_view_args' => '',
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
  13 => 
  array (
    'label' => 'Sites',
    'field_name' => 'field_datafile_site_ref',
    'type' => 'nodereference',
    'widget_type' => 'noderefcreate_autocomplete',
    'change' => 'Change basic information',
    'weight' => '44',
    'autocomplete_match' => 'contains',
    'description' => 'Type the name of the location site and select from the list the site where the data was gathered.  If you do not see it, please type the location name - you will be able to add details to the new site later. If data was gathered at more than one site, please use the "Add another item" button right below to add input field for additional sites.',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_datafile_site_ref][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_datafile_site_ref' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_datafile_site_ref][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_datafile_site_ref][0][nid][nid',
        ),
      ),
    ),
    'group' => 'group_relatedvarsdatasets',
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'research_site' => 'research_site',
      'biblio' => 0,
      'data_file' => 0,
      'data_set' => 0,
      'oai2' => 0,
      'page' => 0,
      'person' => 0,
      'story' => 0,
      'variable' => 0,
      'slide' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
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
  14 => 
  array (
    'label' => 'Associated Data Set',
    'field_name' => 'field_dataset_referrer',
    'type' => 'nodereferrer',
    'widget_type' => 'nodereferrer_list',
    'change' => 'Change basic information',
    'weight' => '45',
    'description' => 'These are the data sets that refer this data file or spreadsheet',
    'group' => 'group_relatedvarsdatasets',
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
  'revision_information' => '-7',
  'author' => '-5',
  'options' => '-4',
  'comment_settings' => '-2',
  'menu' => '-6',
  'path' => '-3',
  'cck_fieldgroup_tabs_residual' => '-20',
);