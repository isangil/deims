$content['type']  = array (
  'name' => 'Variable',
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
    'revision' => true,
    'promote' => false,
    'sticky' => false,
  ),
  'upload' => '1',
  'old_type' => 'variable',
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
$content['groups']  = array (
  0 => 
  array (
    'label' => 'Physical Quantity',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => 'Numeric Value, a Physical, Quantifiable Variable. When the record value is a number, referred to a unit system. Example: 3 meter ',
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
    'weight' => '-15',
    'group_name' => 'group_attribute_ratio',
  ),
  1 => 
  array (
    'label' => 'Date Type',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => 'Variables (Columns) that represent the Dates or times; When the value captured is a date or a time. Example: 12/2/2001',
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
    'weight' => '-14',
    'group_name' => 'group_attribute_datetime',
  ),
  2 => 
  array (
    'label' => 'Codes ',
    'group_type' => 'standard',
    'settings' => 
    array (
      'form' => 
      array (
        'style' => 'tabs',
        'description' => 'A Text based value - or everything else besides physical quantities and date/times Examples: Codes (taxonomic, classificatory), Comments, Identifiers, Notes.',
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
    'weight' => '-13',
    'group_name' => 'group_attribute_nominal',
  ),
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'Label',
    'field_name' => 'field_attribute_label',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-18',
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
    'default_value_widget' => NULL,
    'group' => false,
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
      'weight' => '25',
      'parent' => '',
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
    ),
  ),
  1 => 
  array (
    'label' => 'Definition',
    'field_name' => 'field_var_definition',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-17',
    'rows' => '2',
    'size' => 60,
    'description' => 'The definition of the variable (column). Example: The air temperature collected at 2 meters above the ground. Other example: The set of codes used to categorize the sub-plots where the census studies were conducted',
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
    'label' => 'Missing Values',
    'field_name' => 'field_var_missingvalues',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-16',
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
      'label' => 
      array (
        'format' => 'above',
        'exclude' => 0,
      ),
      5 => 
      array (
        'format' => 'default',
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
    'label' => 'unit',
    'field_name' => 'field_attribute_unit',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => 0,
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
    ),
  ),
  4 => 
  array (
    'label' => 'Maximum Value',
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
    ),
  ),
  5 => 
  array (
    'label' => 'Minimum Value',
    'field_name' => 'field_attribute_minimum',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '2',
    'description' => 'This is the mininum value attainable by this variable or measurement. Example -42.2',
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
    ),
  ),
  7 => 
  array (
    'label' => 'Date Format',
    'field_name' => 'field_attribute_formatstring',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '17',
    'rows' => 5,
    'size' => '20',
    'description' => 'This is the format in which the date is expressed. For Example, DD/MM/YYYY',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_attribute_formatstring][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_attribute_formatstring' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_attribute_formatstring][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_datetime',
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
      'parent' => 'group_attribute_datetime',
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
    ),
  ),
  8 => 
  array (
    'label' => 'Code-Definition',
    'field_name' => 'field_code_definition',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '16',
    'rows' => 5,
    'size' => '80',
    'description' => 'Enter here your code and its definition. Add as many entries as you need. Separate the actual code from its definition using the = sign Example: L=Larvae',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_code_definition][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_code_definition' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_code_definition][0][value',
        ),
      ),
    ),
    'group' => 'group_attribute_nominal',
    'required' => 0,
    'multiple' => '1',
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
      'parent' => 'group_attribute_nominal',
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
    ),
  ),
  9 => 
  array (
    'label' => 'Associated Data Files',
    'field_name' => 'field_attribute_assoc_datafile',
    'type' => 'nodereferrer',
    'widget_type' => 'nodereferrer_list',
    'change' => 'Change basic information',
    'weight' => '-11',
    'description' => 'These links relate the variable with some data files that use it.',
    'group' => false,
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
      'weight' => '29',
      'parent' => '',
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
    ),
  ),
);
$content['extra']  = array (
  'title' => '-19',
  'revision_information' => '-12',
  'author' => '-10',
  'options' => '-6',
  'comment_settings' => '-5',
  'menu' => '-7',
  'path' => '-9',
  'attachments' => '-8',
  'cck_fieldgroup_tabs_residual' => '-20',
);
