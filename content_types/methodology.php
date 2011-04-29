$content['type']  = array (
  'name' => 'methodology',
  'type' => 'methodology',
  'description' => 'Information about field methodologies or laboratory work',
  'title_label' => 'Methodology Title',
  'body_label' => 'Methodology Description',
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
  'old_type' => 'methodology',
  'orig_type' => 'methodology',
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
    'label' => 'Methodology Type',
    'field_name' => 'field_methods_type',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-4',
    'description' => 'Does this section describe a field or a lab methodology?',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_methods_cit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Field
Lab',
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
  1 => 
  array (
    'label' => 'Methodology Citation',
    'field_name' => 'field_methods_cit',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '-1',
    'autocomplete_match' => 'contains',
    'size' => '60',
    'description' => 'A citation that is related or describes in depth this methodology',
    'default_value' => 
    array (
      0 => 
      array (
        'nid' => NULL,
        '_error_element' => 'default_value_widget][field_methods_cit][0][nid][nid',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_methods_cit' => 
      array (
        0 => 
        array (
          'nid' => 
          array (
            'nid' => '',
            '_error_element' => 'default_value_widget][field_methods_cit][0][nid][nid',
          ),
          '_error_element' => 'default_value_widget][field_methods_cit][0][nid][nid',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_methods_type' => 'conditional_field_no_value',
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
      'methodology' => 0,
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
  'body_field' => '-2',
  'revision_information' => '1',
  'author' => '2',
  'options' => '3',
  'comment_settings' => '5',
  'menu' => '0',
  'taxonomy' => '-3',
  'path' => '6',
  'attachments' => '4',
);
