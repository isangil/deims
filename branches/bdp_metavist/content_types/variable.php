$content['type']  = array (
  'name' => 'Variable (Attribute)',
  'type' => 'variable',
  'description' => 'All the necessary information to document the variables collected in a data set. Usually, a tabular data set ( a spreadsheet ) has one observation per row, or record. The data set columns show the variables collected, whether dates, measurable quantities (such as temperature), code sets or just plain text comments. ',
  'title_label' => 'Name',
  'body_label' => '',
  'min_word_count' => '0',
  'help' => 'Enter the basic information about this variable, then choose one of the three types of variables: Physical Quantity (I.e; it refers to a metric system, such as 1.5 molesPerLiter )

Date or times (Values like 12/26/2003)

Text, Codes, Ids, everything else. (Example: Notes)



',
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
  'old_type' => 'variable',
  'orig_type' => 'variable',
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
$content['groups']  = array (
  0 => 
  array (
    'label' => 'Physical Quantity (Range)',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'fieldset_collapsible',
        'description' => 'Numeric Value, a Physical, Quantifiable Variable. When the record value is a number, referred to a unit system. Used to describe a continuum of valid values (e.g., weight or age) Example: 3 meter ',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'hidden',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'no_style',
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
    'group_name' => 'group_attribute_ratio',
  ),
  1 => 
  array (
    'label' => 'Enumerated',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'fieldset_collapsible',
        'description' => 'Used to describe an established set of values (e.g., British, French, German, Spanish)
Also used to describe special case values outside a value range (e.g., missing value codes)

',
      ),
      'display' => 
      array (
        'description' => 'The variable or spreadsheet column is a date or a time.',
        'teaser' => 
        array (
          'format' => 'hidden',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'no_style',
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
    'group_name' => 'group_attribute_datetime',
  ),
  2 => 
  array (
    'label' => 'Codeset',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'fieldset_collapsible',
        'description' => 'Used with a standard or list which contains the members of an established set of valid values',
      ),
      'display' => 
      array (
        'description' => '',
        'teaser' => 
        array (
          'format' => 'hidden',
          'exclude' => 0,
        ),
        'full' => 
        array (
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        4 => 
        array (
          'format' => 'no_style',
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
    'group_name' => 'group_attribute_nominal',
  ),
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Show Optional Fields?',
    'field_name' => 'field_attribute_opt_flag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-15',
    'description' => 'Option to see all optional fields available, by default, fields are shown',
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
        'field_variable_type' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
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
      'field_attribute_dates' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_attribute_accval' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_attribute_accexp' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_attribute_measfreq' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_var_missingvalues' => 
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
  1 => 
  array (
    'label' => 'Label',
    'field_name' => 'field_attribute_label',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-13',
    'rows' => 5,
    'size' => '30',
    'description' => 'This is the label used to designate in short the variable. Sometimes the column labels show at the top row of the spreadsheet. For example: Temp3m (an ad-hoc label for the Temperature 3 meter above ground)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_label][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_label' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_label][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '80',
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
        'length' => '80',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'weight' => '-18',
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
        'format' => 'plain',
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
    'label' => 'Definition',
    'field_name' => 'field_var_definition',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-12',
    'rows' => '2',
    'size' => 60,
    'description' => 'The definition of the variable (column). Example: The air temperature collected at 2 meters above the ground. Other example: The set of codes used to categorize the sub-plots where the census studies were conducted. Also, this is the information used to describe the values when they cannot be represented
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_var_definition][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_var_definition' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_var_definition][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
      'weight' => '-17',
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
  3 => 
  array (
    'label' => 'Type',
    'field_name' => 'field_variable_type',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-11',
    'description' => '',
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
      'field_variable_type' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Enumerated
Range
Codeset
Unrepresentable',
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
      'field_attribute_maximum' => 
      array (
        'Range' => 'Range',
      ),
      'field_attribute_minimum' => 
      array (
        'Range' => 'Range',
      ),
      'field_attribute_precision' => 
      array (
        'Physical Quantity' => 'Physical Quantity',
      ),
      'field_attribute_codevaldefsource' => 
      array (
        'Enumerated' => 'Enumerated',
      ),
      'field_attribute_codevaldef' => 
      array (
        'Enumerated' => 'Enumerated',
      ),
      'field_attribute_codesetname' => 
      array (
        'Codeset' => 'Codeset',
      ),
      'field_attribute_codesetsource' => 
      array (
        'Codeset' => 'Codeset',
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
    'label' => 'Range Maximum ',
    'field_name' => 'field_attribute_maximum',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '1',
    'description' => 'This is the maximum attainable value of your recording. It should be a number, real number (float) OK.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_maximum][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_maximum' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_maximum][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_ratio',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Range' => 'Range',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
      'weight' => '1',
      'parent' => 'group_attribute_ratio',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
    ),
  ),
  5 => 
  array (
    'label' => 'Range Minimum',
    'field_name' => 'field_attribute_minimum',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '2',
    'description' => 'This is the minimum value attainable by this variable or measurement. Example -42.2',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_minimum][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_minimum' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_minimum][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_ratio',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Range' => 'Range',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
      'weight' => '2',
      'parent' => 'group_attribute_ratio',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
    ),
  ),
  6 => 
  array (
    'label' => 'precision',
    'field_name' => 'field_attribute_precision',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '3',
    'description' => 'Enter here the numerical value of the precision of your measured physical quantity (variable). Example: 0.01',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_precision][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_precision' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_precision][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_ratio',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Physical Quantity' => 'Physical Quantity',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
      'weight' => '3',
      'parent' => 'group_attribute_ratio',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      2 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      3 => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
      'token' => 
      array (
        'format' => 'unformatted',
        'exclude' => 0,
      ),
    ),
  ),
  7 => 
  array (
    'label' => 'Units of Measure',
    'field_name' => 'field_attribute_unit',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '4',
    'rows' => 5,
    'size' => '60',
    'description' => 'The unit reference to quantify a measurement. Usually these are well know standard units with reference to one of the many reference systems (metric systems) such as the centimeter-gram-second (cgs) or the international system (SI), or the units typically used in the US (inch, mile, pound, gallon, etc) ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_unit][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_unit' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_unit][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_ratio',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
      'weight' => 0,
      'parent' => 'group_attribute_ratio',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'plain',
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
    'label' => 'Measurement Resolution',
    'field_name' => 'field_attribute_res',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '5',
    'description' => 'The resolution for this measurement, usually a floating number. I.e; 0.001',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_res][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_res' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_res][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_ratio',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
  9 => 
  array (
    'label' => 'Code Value - Code Defintion',
    'field_name' => 'field_attribute_codevaldef',
    'type' => 'codedefinition',
    'widget_type' => 'codedefinition_entry',
    'change' => 'Change basic information',
    'weight' => '17',
    'description' => 'Use this pair of text fields to represent a code value and the corresponding code definition',
    'default_value' => 
    array (
      0 => 
      array (
        'code_val' => '',
        'code_def' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_codevaldef' => 
      array (
        0 => 
        array (
          'code_val' => '',
          'code_def' => '',
        ),
      ),
    ),
    'group' => 'group_attribute_datetime',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Enumerated' => 'Enumerated',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'op' => 'Save field settings',
    'module' => 'codedefinition_fld',
    'widget_module' => 'codedefinition_fld',
    'columns' => 
    array (
      'code_val' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
      'code_def' => 
      array (
        'type' => 'varchar',
        'length' => 255,
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
  10 => 
  array (
    'label' => 'Definition Source',
    'field_name' => 'field_attribute_codevaldefsource',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '18',
    'rows' => 5,
    'size' => '60',
    'description' => 'The source that defined the code value pairs',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_codevaldefsource][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_codevaldefsource' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_codevaldefsource][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_datetime',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Enumerated' => 'Enumerated',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
  11 => 
  array (
    'label' => 'Codeset Name',
    'field_name' => 'field_attribute_codesetname',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '19',
    'rows' => 5,
    'size' => '60',
    'description' => 'The name of the codeset used for the corresponding attribute',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_codesetname][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_codesetname' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_codesetname][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_nominal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Codeset' => 'Codeset',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
  12 => 
  array (
    'label' => 'Codeset Source',
    'field_name' => 'field_attribute_codesetsource',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '20',
    'rows' => '2',
    'size' => 60,
    'description' => 'Source of the codeset used',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_codesetsource][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_codesetsource' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_codesetsource][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_nominal',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 
        array (
          'Codeset' => 'Codeset',
        ),
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
  13 => 
  array (
    'label' => 'Dates ',
    'field_name' => 'field_attribute_dates',
    'type' => 'date',
    'widget_type' => 'date_text',
    'change' => 'Change basic information',
    'weight' => '-7',
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
    'description' => 'Dates for the attribute values',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
    'label' => 'Value Accuracy',
    'field_name' => 'field_attribute_accval',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-6',
    'description' => 'The attribute accuracy value, if known',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_accval][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_accval' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_accval][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
  15 => 
  array (
    'label' => 'Accuracy Explanation',
    'field_name' => 'field_attribute_accexp',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-5',
    'rows' => '2',
    'size' => 60,
    'description' => 'The explanation for the accuracy evaluation for this attribute ',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_accexp][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_accexp' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_accexp][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
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
  16 => 
  array (
    'label' => 'Missing Values',
    'field_name' => 'field_var_missingvalues',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-4',
    'rows' => 5,
    'size' => '60',
    'description' => 'Any missing value codes should be described here. Use an EQUAL sign to separate the code from the explanation of the code used for the missing value.

For example: 
-9999=Instrument Failed 
NA=Not Applies
-77777=Out of calibration Range
BLANK=Not sure, but no good.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_var_missingvalues][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_var_missingvalues' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_var_missingvalues][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'text_processing' => '0',
    'max_length' => '150',
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
        'length' => '150',
        'not null' => false,
        'sortable' => true,
        'views' => true,
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
      5 => 
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
    'label' => 'Measurement Frequency',
    'field_name' => 'field_attribute_measfreq',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-3',
    'description' => 'The measurement frequency for this attribute, if known',
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
      'field_attribute_measfreq' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_variable_type' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Unknown
As needed
Irregular
None planned',
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
  18 => 
  array (
    'label' => 'Associated Data Files',
    'field_name' => 'field_attribute_assoc_datafile',
    'type' => 'nodereferrer',
    'widget_type' => 'nodereferrer_list',
    'change' => 'Change basic information',
    'weight' => '-2',
    'description' => 'These links relate the variable with some data files that use it.',
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_attribute_opt_flag' => 'conditional_field_no_value',
        'field_variable_type' => 'conditional_field_no_value',
        'field_attribute_measfreq' => 'conditional_field_no_value',
      ),
    ),
    'required' => false,
    'multiple' => 0,
    'referrer_types' => 
    array (
      'data_file' => 'data_file',
      'biblio' => 0,
      'blog' => 0,
      'data_set' => 0,
      'metadata_conversion' => 0,
      'forum' => 0,
      'page' => 0,
      'person' => 0,
      'poll' => 0,
      'profile' => 0,
      'research_project' => 0,
      'research_sites' => 0,
      'story' => 0,
      'variable' => 0,
      'contenplate' => false,
      'webform' => false,
      'oai2' => false,
      'research_site' => false,
      'book' => false,
      'old_dataset' => false,
      'event' => false,
      'faq' => false,
      'download' => false,
      'met_central' => false,
      'reu' => false,
      'webcam' => false,
      'slide' => false,
      'panel' => false,
      'software' => false,
      'browse_graphics' => false,
      'methodology' => false,
      'source_info' => false,
      'planar_coordinate_system' => false,
      'process_step' => false,
    ),
    'referrer_fields' => 
    array (
      'field_datafile_variable_ref' => 'field_datafile_variable_ref',
      'field_dataset_ext_assoc' => 0,
      'field_dataset_datafile_ref' => 0,
      'field_dataset_assct_biblio' => 0,
      'field_project_investigators' => 0,
      'field_project_publications' => 0,
      'field_project_research_site' => 0,
      'field_dataset_owner' => false,
      'field_dataset_contact' => false,
      'field_datafile_site_ref' => false,
      'field_dataset_site_ref' => false,
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
      'field_dataset_metdtcontact_ref' => false,
      'field_dataset_distributor_ref' => false,
      'field_analyticaltool_contact_ref' => false,
      'field_analyticaltool_citat_ref' => false,
      'field_dataset_methods_ref' => false,
      'field_dataset_proccontact_ref' => false,
      'field_methods_cit' => false,
      'field_dataset_source_ref' => false,
      'field_source_cit_ref' => false,
      'field_dataset_procstep_ref' => false,
      'field_dataset_sperefplan_ref' => false,
      'field_processtp_contact_ref' => false,
    ),
    'referrer_nodes_per_page' => '0',
    'referrer_pager_element' => '0',
    'referrer_order' => 'TITLE_ASC',
    'op' => 'Save field settings',
    'module' => 'nodereferrer',
    'widget_module' => 'nodereferrer',
    'columns' => 
    array (
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
);
