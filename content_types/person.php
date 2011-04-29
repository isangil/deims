$content['type']  = array (
  'name' => 'Person, Organization or Position',
  'type' => 'person',
  'description' => 'Contact details for an organization, person or position.',
  'title_label' => 'Full name',
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
  'upload' => 1,
  'show_preview_changes' => true,
  'show_diff_inline' => false,
  'enable_revisions_page' => true,
  'old_type' => 'person',
  'orig_type' => 'person',
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
    'label' => 'Show Optional Fields?',
    'field_name' => 'field_person_optional_flag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-4',
    'description' => 'Toggle value to show optional fields (information placeholders such as TTY telephone, hours of service, etc)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'No',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
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
      'field_person_hours' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_contact_instr' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_personid' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_uid' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_tddtty' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_pubs' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_country' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_address' => 
      array (
        'Yes' => 'Yes',
      ),
      'field_person_fax' => 
      array (
        'Yes' => 'Yes',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-74',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'disabled',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_optional_flag',
        'label_value' => '',
        'exclude' => 1,
        'weight' => '-74',
      ),
      'teaser' => 
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
    'label' => 'Person, Position or Organization?',
    'field_name' => 'field_person_flag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-3',
    'description' => 'Indicate whether this is an directory entry for an organization, a position or a person',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Organization',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_flag' => 
      array (
        'value' => 'Organization',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Organization
Person
Position
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
    'controlled_fields' => 
    array (
      'field_person_first_name' => 
      array (
        'Person' => 'Person',
      ),
      'field_person_last_name' => 
      array (
        'Person' => 'Person',
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-75',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'disabled',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_flag',
        'label_value' => '',
        'exclude' => 1,
        'weight' => '-75',
      ),
      'teaser' => 
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
    'label' => 'First Name',
    'field_name' => 'field_person_first_name',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-2',
    'rows' => 5,
    'size' => '60',
    'description' => 'The given name of the person
',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_first_name][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_first_name' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_first_name][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 
        array (
          'Person' => 'Person',
        ),
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '60',
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
        'length' => '60',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-98',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'trimmed',
        'css-class' => '',
        'region' => 'left',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_first_name',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-98',
      ),
      'weight' => '-4',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  3 => 
  array (
    'label' => 'Last Name',
    'field_name' => 'field_person_last_name',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-1',
    'rows' => 5,
    'size' => '60',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_last_name][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_last_name' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_last_name][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 
        array (
          'Person' => 'Person',
        ),
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '60',
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
        'length' => '60',
        'not null' => false,
        'sortable' => true,
        'views' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-99',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'inline',
        ),
        'format' => 'trimmed',
        'css-class' => '',
        'region' => 'left',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_last_name',
        'label_value' => 'Name',
        'exclude' => 0,
        'weight' => '-99',
      ),
      'weight' => '1',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  4 => 
  array (
    'label' => 'Organization',
    'field_name' => 'field_person_organization',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => 0,
    'rows' => 5,
    'size' => '60',
    'description' => 'The organization name that this person is affiliated with',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_organization][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_organization' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_organization][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-97',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'left',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_organization',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-97',
      ),
      'weight' => '-2',
      'parent' => '',
      'teaser' => 
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
    'label' => 'Role',
    'field_name' => 'field_person_role',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '1',
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
      'field_person_role' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'LPI|Lead Principal Investigator
COPI|co-Principal Investigator
FA|Faculty Associate
PDA|Post Doctoral Associate
OP|Other Professional
GS|Graduate Student
US|Undergraduate Student
OS|Other Staff
SC|Secretary Clerical
I|Interested Party
NONE|None',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-83',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_role',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-83',
      ),
      'weight' => '-1',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  6 => 
  array (
    'label' => 'Position',
    'field_name' => 'field_person_title',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '2',
    'rows' => 5,
    'size' => '60',
    'description' => 'The position name as point of contact',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_title][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_title' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_title][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '300',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-90',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_title',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-90',
      ),
      'weight' => 0,
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  7 => 
  array (
    'label' => 'Email',
    'field_name' => 'field_person_email',
    'type' => 'email',
    'widget_type' => 'email_textfield',
    'change' => 'Change basic information',
    'weight' => '3',
    'size' => '60',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'email' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_email' => 
      array (
        0 => 
        array (
          'email' => '',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'op' => 'Save field settings',
    'module' => 'email',
    'widget_module' => 'email',
    'columns' => 
    array (
      'email' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
        'sortable' => true,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-91',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'email',
        'parent_id' => '',
        'field_id' => 'field_person_email',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-91',
      ),
      'weight' => '1',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  8 => 
  array (
    'label' => 'Address Type',
    'field_name' => 'field_person_address_type',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '4',
    'description' => 'Is this a mailing address, a physical address or both?',
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
      'field_person_address_type' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Mailing Address
Physical Address
Mailing and Physical Address',
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
    'label' => 'Address',
    'field_name' => 'field_person_address',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '5',
    'rows' => 5,
    'size' => '100',
    'description' => 'The physical address where this person can be contacted',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_address][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_address' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_address][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-96',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_address',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-96',
      ),
      'weight' => '3',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'City',
    'field_name' => 'field_person_city',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '6',
    'rows' => 5,
    'size' => '60',
    'description' => 'The city, part of the address for this person',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_city][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_city' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_city][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-95',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_city',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-95',
      ),
      'weight' => '4',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'State',
    'field_name' => 'field_person_state',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '7',
    'description' => 'State, part of the person\'s address ',
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
      'field_person_state' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'AK|	Alaska
AL|	Alabama
AR|	Arkansas
AZ|	Arizona
CA|	California
CO|	Colorado
CT|	Connecticut
DC|	District Of Columbia
DE|	Delaware
FL|	Florida
GA|	Georgia
HI|	Hawaii
IA|	Iowa
ID|	Idaho
IL|	Illinois
IN|	Indiana
KS|	Kansas
KY|	Kentucky
LA|	Louisiana
MA|	Massachusetts
MD|	Maryland
ME|	Maine
MI|	Michigan
MN|	Minnesota
MO|	Missouri
MS|	Mississippi
MT|	Montana
NC|	North Carolina
ND|	North Dakota
NE|	Nebraska
NH|	New Hampshire
NJ|	New Jersey
NM|	New Mexico
NV|	Nevada
NY|	New York
OH|	Ohio
OK|	Oklahoma
OR|	Oregon
PA|	Pennsylvania
PR|     Puerto Rico
RI|	Rhode Island
SC|	South Carolina
SD|	South Dakota
TN|	Tennessee
TX| 	Texas
UT|	Utah
VA|	Virginia
VT|	Vermont
WA|	Washington
WI|	Wisconsin
WV|	West Virginia
WY|	Wyoming',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-94',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_state',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-94',
      ),
      'weight' => '5',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'Zip Code',
    'field_name' => 'field_person_zipcode',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '8',
    'description' => 'the 5 digit zip code, part of the address',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_zipcode][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_zipcode' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_zipcode][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0',
    'max' => '99999',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-92',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'number_integer',
        'parent_id' => '',
        'field_id' => 'field_person_zipcode',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-92',
      ),
      'weight' => '6',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'unformatted',
        'exclude' => 1,
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
    'label' => 'Country',
    'field_name' => 'field_person_country',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '9',
    'description' => 'The country, part of the physical address',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'United States',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_country' => 
      array (
        'value' => 'United States',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'United States
Abkhazia
Afghanistan
Akrotiri and Dhekelia
Åland
Albania
Algeria
American Samoa
Andorra
Angola
Anguilla
Antigua and Barbuda
Argentina
Armenia
Aruba
Ascension Island
Australia
Austria
Azerbaijan
Bahamas, The
Bahrain
Bangladesh
Barbados
Belarus
Belgium
Belize
Benin
Bermuda
Bhutan
Bolivia
Bosnia
Botswana
Brazil
Brunei
Bulgaria
Burkina Faso
Burundi
Cambodia
Cameroon
Canada
Cape Verde
Cayman Islands
Central African Republic
Chad
Chile
China
Christmas Island
Cocos (Keeling) Islands
Colombia
Comoros
Congo (República)
Congo (República Democrática)
Cook Islands
Costa Rica
Côte d\'Ivoire
Croatia
Cuba
Cyprus
Czech Republic
Denmark
Djibouti
Dominica
Dominican Republic
East Timor
Ecuador
Egypt
El Salvador
Equatorial Guinea
Eritrea
Estonia
Ethiopia
Falkland Islands
Faroe Islands
Fiji
Finland
France
French Polynesia
Gabon
Gambia, The
Georgia
Germany
Ghana
Gibraltar
Greece
Greenland
Grenada
Guam
Guatemala
Guernsey
Guinea
Guinea-Bissau
Guyana
Haiti
Honduras
Hong Kong
Hungary
Iceland
India
Indonesia
Iran
Iraq
Ireland
Isle of Man
Israel
Italy
Jamaica
Japan
Jersey
Jordan
Kazakhstan
Kenya
Kiribati
Korea, North
Korea, South
Kosovo
Kuwait
Kyrgyzstan
Laos
Latvia
Lebanon
Lesotho
Liberia
Libya
Liechtenstein
Lithuania
Luxembourg
Macau
Macedonia
Madagascar
Malawi
Malaysia
Maldives
Mali
Malta
Marshall Islands
Mauritania
Mauritius
Mayotte
Mexico
Micronesia
Moldova
Monaco
Mongolia
Montenegro
Montserrat
Morocco
Mozambique
Myanmar (Burma)
Nagorno-Karabakh
Namibia
Nauru
Nepal
Netherlands
Netherlands Antilles
New Caledonia
New Zealand
Nicaragua
Niger
Nigeria
Niue
Norfolk Island
Northern Cyprus
Northern Mariana Islands
Norway
Oman
Pakistan
Palau
Palestine
Panama
Papua New Guinea
Paraguay
Peru
Philippines
Pitcairn Islands
Poland
Portugal
Puerto Rico
Qatar
Romania
Russia
Rwanda
Saint Barthélemy
Saint Helena
Saint Kitts and Nevis
Saint Lucia
Saint Martin
Saint Pierre and Miquelon
Saint Vincent and the Grenadines
Samoa
San Marino
São Tomé and Príncipe São
Saudi Arabia
Senegal
Serbia
Seychelles
Sierra Leone
Singapore
Slovakia
Slovenia
Solomon Islands
Somalia
Somaliland
South Africa
South Ossetia
Spain
Sri Lanka
Sudan
Suriname
Svalbard
Swaziland
Sweden
Switzerland
Syria
Taiwan
Tajikistan
Tanzania
Thailand
Togo
Tokelau
Tonga
Transnistria
Trinidad and Tobago
Tristan da Cunha
Tunisia
Turkey
Turkmenistan
Turks and Caicos Islands
Tuvalu
Uganda
Ukraine
United Arab Emirates
United Kingdom
United States of America
Uruguay
Uzbekistan
Vanuatu
Vatican City
Venezuela
Vietnam
Virgin Islands, British
Virgin Islands, United States
Wallis and Futuna
Western Sahara
Yemen
Zambia
Zimbabwe',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-93',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'middle',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_country',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-93',
      ),
      'weight' => '7',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'Phone',
    'field_name' => 'field_person_phone',
    'type' => 'ca_phone',
    'widget_type' => 'phone_textfield',
    'change' => 'Change basic information',
    'weight' => '10',
    'size' => '60',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_phone][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_phone' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_phone][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 'conditional_field_no_value',
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '1',
    'phone_country_code' => 0,
    'ca_phone_separator' => '-',
    'ca_phone_parentheses' => 1,
    'op' => 'Save field settings',
    'module' => 'phone',
    'widget_module' => 'phone',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-88',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'ca_phone',
        'parent_id' => '',
        'field_id' => 'field_person_phone',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-88',
      ),
      'weight' => '8',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  15 => 
  array (
    'label' => 'Fax',
    'field_name' => 'field_person_fax',
    'type' => 'ca_phone',
    'widget_type' => 'phone_textfield',
    'change' => 'Change basic information',
    'weight' => '11',
    'size' => '60',
    'description' => 'The fax number where this person can be reached',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_fax][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_fax' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_fax][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'phone_country_code' => 0,
    'ca_phone_separator' => '-',
    'ca_phone_parentheses' => 1,
    'op' => 'Save field settings',
    'module' => 'phone',
    'widget_module' => 'phone',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-87',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'ca_phone',
        'parent_id' => '',
        'field_id' => 'field_person_fax',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-87',
      ),
      'weight' => '9',
      'parent' => '',
      'teaser' => 
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
    'label' => 'TDD / TTY telephone',
    'field_name' => 'field_person_tddtty',
    'type' => 'ca_phone',
    'widget_type' => 'phone_textfield',
    'change' => 'Change basic information',
    'weight' => '12',
    'size' => '60',
    'description' => 'The TDD/TTY number, if any',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_tddtty][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_tddtty' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_tddtty][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'phone_country_code' => 0,
    'ca_phone_separator' => '',
    'ca_phone_parentheses' => 0,
    'op' => 'Save field settings',
    'module' => 'phone',
    'widget_module' => 'phone',
    'columns' => 
    array (
      'value' => 
      array (
        'type' => 'varchar',
        'length' => 255,
        'not null' => false,
      ),
    ),
    'display_settings' => 
    array (
      'label' => 
      array (
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-85',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'ca_phone',
        'parent_id' => '',
        'field_id' => 'field_person_tddtty',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-85',
      ),
      'teaser' => 
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
    'label' => 'Hours of Service',
    'field_name' => 'field_person_hours',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '13',
    'rows' => 5,
    'size' => '60',
    'description' => 'The hours of service when the person/organization can be reached',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_hours][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_hours' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_hours][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-86',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_hours',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-86',
      ),
      'teaser' => 
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
    'label' => 'Contact Instructions',
    'field_name' => 'field_person_contact_instr',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '14',
    'rows' => '2',
    'size' => 60,
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_contact_instr][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_contact_instr' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_contact_instr][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-89',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'text',
        'parent_id' => '',
        'field_id' => 'field_person_contact_instr',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-89',
      ),
      'teaser' => 
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
    'label' => 'personid',
    'field_name' => 'field_person_personid',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '15',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_personid][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_personid' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_person_personid][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-84',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'number_integer',
        'parent_id' => '',
        'field_id' => 'field_person_personid',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-84',
      ),
      'weight' => '10',
      'parent' => '',
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
      4 => 
      array (
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
  ),
  20 => 
  array (
    'label' => 'person_uid',
    'field_name' => 'field_person_uid',
    'type' => 'userreference',
    'widget_type' => 'userreference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '16',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'reverse_link' => 0,
    'description' => 'The person user id, if applicable (the drupal user id, the user reference -- only if this person has an account.)',
    'default_value' => 
    array (
      0 => 
      array (
        'uid' => NULL,
        '_error_element' => 'default_value_widget][field_person_uid][0][uid][uid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_uid' => 
      array (
        0 => 
        array (
          'uid' => 
          array (
            'uid' => '',
            '_error_element' => 'default_value_widget][field_person_uid][0][uid][uid',
          ),
          '_error_element' => 'default_value_widget][field_person_uid][0][uid][uid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_pubs' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'referenceable_roles' => 
    array (
      2 => 2,
      3 => false,
    ),
    'referenceable_status' => '1',
    'op' => 'Save field settings',
    'module' => 'userreference',
    'widget_module' => 'userreference',
    'columns' => 
    array (
      'uid' => 
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-82',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'right',
        'type' => 'userreference',
        'parent_id' => '',
        'field_id' => 'field_person_uid',
        'label_value' => '',
        'exclude' => 0,
        'weight' => '-82',
      ),
      'weight' => '11',
      'parent' => '',
      'teaser' => 
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
    'label' => 'Publications',
    'field_name' => 'field_person_pubs',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '17',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'Publications by this person',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_person_pubs][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_person_pubs' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_person_pubs][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_person_pubs][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_person_optional_flag' => 
        array (
          'Yes' => 'Yes',
        ),
        'field_person_flag' => 'conditional_field_no_value',
        'field_person_role' => 'conditional_field_no_value',
        'field_person_address_type' => 'conditional_field_no_value',
        'field_person_state' => 'conditional_field_no_value',
        'field_person_country' => 'conditional_field_no_value',
        'field_person_uid' => 'conditional_field_no_value',
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
      'source_info' => false,
      'methodology' => false,
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
        'format' => 'hidden',
      ),
      'format' => 'default',
      'css-class' => 
      array (
      ),
      'region' => 'disabled',
      'ds_weight' => '-81',
      'full' => 
      array (
        'label' => 
        array (
          'format' => 'hidden',
        ),
        'format' => 'default',
        'css-class' => '',
        'region' => 'disabled',
        'type' => 'nodereference',
        'parent_id' => '',
        'field_id' => 'field_person_pubs',
        'label_value' => '',
        'exclude' => 1,
        'weight' => '-81',
      ),
      'weight' => '12',
      'parent' => '',
      'teaser' => 
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
  'revision_information' => '18',
  'author' => '19',
  'options' => '23',
  'comment_settings' => '24',
  'menu' => '20',
  'path' => '21',
  'attachments' => '22',
);
