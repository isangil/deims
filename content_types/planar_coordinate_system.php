$content['type']  = array (
  'name' => 'Planar Coordinate System',
  'type' => 'planar_coordinate_system',
  'description' => 'The quantities of distances, or distances and angles, which define the position of a point on a reference plane to which the surface of the Earth has been projected.',
  'title_label' => 'Name',
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
  'old_type' => 'planar_coordinate_system',
  'orig_type' => 'planar_coordinate_system',
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
    'label' => 'Planar Coordinate Information',
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
    'weight' => '7',
    'group_name' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
      ),
    ),
  ),
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'System Used',
    'field_name' => 'field_planar_sysflag',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '-18',
    'description' => 'The type of reference plane to which the surface of the Earth has been projected.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'Grid Coordinate System',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 1,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Map projection
Grid Coordinate System
Local Planar',
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
      'field_planar_localpgi' => 
      array (
        'Local Planar' => 'Local Planar',
      ),
      'field_planar_localpd' => 
      array (
        'Local Planar' => 'Local Planar',
      ),
      'field_planar_stdparll' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_longcm' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_latprjo' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_feast' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_fnorth' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_sfequat' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_heightpt' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_longpc' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_obqllat' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_latprjc' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_sfctrlin' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_azimangl' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_azimptl' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_obqllong' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_svlong' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_sfprjorg' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_landsat' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_pathnum' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_ctrmer' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_gridsys' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_mapproj' => 
      array (
        'Map projection' => 'Map projection',
      ),
      'field_planar_otherprj' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_azimanglg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_sfctrling' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_svlongg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_longcmg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_latprjog' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_feastg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_fnorthg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_obqllatg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_obqllongg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_ctrmerg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_utmzone' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_upszone' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_spcszone' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_arczone' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_stdparllg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
      ),
      'field_planar_sfprjorgg' => 
      array (
        'Grid Coordinate System' => 'Grid Coordinate System',
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
  1 => 
  array (
    'label' => 'Local Planar Description',
    'field_name' => 'field_planar_localpd',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-17',
    'rows' => '2',
    'size' => 60,
    'description' => 'A description of the local planar system.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_localpd][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_localpd' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_localpd][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Local Planar' => 'Local Planar',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  2 => 
  array (
    'label' => 'Local Planar Georeference Information',
    'field_name' => 'field_planar_localpgi',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '-16',
    'rows' => '2',
    'size' => 60,
    'description' => 'A description of the information provided to register the local planar system to the Earth (e.g. control points, satellite ephemeral data, inertial navigation data).',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_localpgi][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_localpgi' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_localpgi][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Local Planar' => 'Local Planar',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  3 => 
  array (
    'label' => 'Grid Coordinate System (and Map Projection)',
    'field_name' => 'field_planar_gridsys',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-15',
    'description' => 'A plane-rectangular coordinate system usually based on, and mathematically adjusted to, a map projection so that geographic positions can be readily transformed to and from plane coordinates. In parenthesis is the corresponding Map Projection used.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_gridsys' => 
      array (
        'value' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Universal Transverse Mercator (Transverse Mercator Projection)
Universal Polar Stereographic (Polar Stereographic Projection)
State Plane Coordinate System 1927 (Lambert Conformal Conic)
State Plane Coordinate System 1927 (Transverse Mercator)
State Plane Coordinate System 1927 (Oblique Mercator)
State Plane Coordinate System 1927 (Polyconic)
State Plane Coordinate System 1983 (Lambert Conformal Conic)
State Plane Coordinate System 1983 (Transverse Mercator)
State Plane Coordinate System 1983 (Oblique Mercator)
State Plane Coordinate System 1983 (Polyconic)
ARC Coordinate System (Equirectangular)
ARC Coordinate System (Azimuthal Equidistant)
Other grid system',
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
      'field_planar_otherprj' => 
      array (
        'Other grid system' => 'Other grid system',
      ),
      'field_planar_feastg' => 
      array (
        'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
        'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
        'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
        'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
        'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
        'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
      ),
      'field_planar_stdparllg' => 
      array (
        'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
        'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
        'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
      ),
      'field_planar_svlongg' => 
      array (
        'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
      ),
      'field_planar_fnorthg' => 
      array (
        'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
        'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
        'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
        'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
        'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
        'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
      ),
      'field_planar_sfprjorgg' => 
      array (
        'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
      ),
      'field_planar_longcmg' => 
      array (
        'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
        'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
        'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
        'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
        'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
        'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
      ),
      'field_planar_latprjog' => 
      array (
        'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
        'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
        'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
        'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
      ),
      'field_planar_sfctrling' => 
      array (
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
      ),
      'field_planar_azimanglg' => 
      array (
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
      ),
      'field_planar_obqllatg' => 
      array (
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
      ),
      'field_planar_obqllongg' => 
      array (
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
      ),
      'field_planar_ctrmerg' => 
      array (
        'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
        'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
        'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
      ),
      'field_planar_utmzone' => 
      array (
        'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
      ),
      'field_planar_upszone' => 
      array (
        'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
      ),
      'field_planar_spcszone' => 
      array (
        'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
        'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
        'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
        'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
        'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
        'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
      ),
      'field_planar_arczone' => 
      array (
        'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
        'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
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
  4 => 
  array (
    'label' => 'Map Projection',
    'field_name' => 'field_planar_mapproj',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-14',
    'description' => 'The systematic representation of all or part of the surface of the Earth on a plane or developable surface.',
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
      'field_planar_mapproj' => 
      array (
        'value' => '',
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Albers Conical Equal Area
Azimuthal Equidistant
Equidistant Conic
Equirectangular
General Vertical Near-sided Projection
Gnomonic
Lambert Azimuthal Equal Area
Lambert Conformal Conic
Mercator
Modified Stereographic for Alaska
Miller Cylindrical
Oblique Mercator
Orthographic
Polar Stereographic
Polyconic
Robinson
Sinusoidal
Space Oblique Mercator
Stereographic
Transverse Mercator
van der Grinten

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
      'field_planar_stdparll' => 
      array (
        'Albers Conical Equal Area' => 'Albers Conical Equal Area',
        'Equidistant Conic' => 'Equidistant Conic',
        'Equirectangular' => 'Equirectangular',
        'Lambert Conformal Conic' => 'Lambert Conformal Conic',
        'Mercator' => 'Mercator',
        'Polar Stereographic' => 'Polar Stereographic',
      ),
      'field_planar_longcm' => 
      array (
        'Albers Conical Equal Area' => 'Albers Conical Equal Area',
        'Azimuthal Equidistant' => 'Azimuthal Equidistant',
        'Equidistant Conic' => 'Equidistant Conic',
        'Equirectangular' => 'Equirectangular',
        'Lambert Conformal Conic' => 'Lambert Conformal Conic',
        'Mercator' => 'Mercator',
        'Miller Cylindrical' => 'Miller Cylindrical',
        'Polyconic' => 'Polyconic',
        'Sinusoidal' => 'Sinusoidal',
        'Transverse Mercator' => 'Transverse Mercator',
        'van der Grinten' => 'van der Grinten',
      ),
      'field_planar_latprjo' => 
      array (
        'Albers Conical Equal Area' => 'Albers Conical Equal Area',
        'Azimuthal Equidistant' => 'Azimuthal Equidistant',
        'Equidistant Conic' => 'Equidistant Conic',
        'Lambert Conformal Conic' => 'Lambert Conformal Conic',
        'Oblique Mercator' => 'Oblique Mercator',
        'Polyconic' => 'Polyconic',
        'Transverse Mercator' => 'Transverse Mercator',
      ),
      'field_planar_azimptl' => 
      array (
        'Oblique Mercator' => 'Oblique Mercator',
      ),
      'field_planar_sfequat' => 
      array (
        'Mercator' => 'Mercator',
      ),
      'field_planar_heightpt' => 
      array (
        'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
      ),
      'field_planar_longpc' => 
      array (
        'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
        'Gnomonic' => 'Gnomonic',
        'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
        'Orthographic' => 'Orthographic',
        'Robinson' => 'Robinson',
        'Stereographic' => 'Stereographic',
      ),
      'field_planar_latprjc' => 
      array (
        'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
        'Gnomonic' => 'Gnomonic',
        'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
        'Orthographic' => 'Orthographic',
        'Stereographic' => 'Stereographic',
      ),
      'field_planar_sfctrlin' => 
      array (
        'Oblique Mercator' => 'Oblique Mercator',
      ),
      'field_planar_azimangl' => 
      array (
        'Oblique Mercator' => 'Oblique Mercator',
      ),
      'field_planar_obqllat' => 
      array (
        'Oblique Mercator' => 'Oblique Mercator',
      ),
      'field_planar_obqllong' => 
      array (
        'Oblique Mercator' => 'Oblique Mercator',
      ),
      'field_planar_svlong' => 
      array (
        'Polar Stereographic' => 'Polar Stereographic',
      ),
      'field_planar_sfprjorg' => 
      array (
        'Polar Stereographic' => 'Polar Stereographic',
      ),
      'field_planar_landsat' => 
      array (
        'Space Oblique Mercator' => 'Space Oblique Mercator',
      ),
      'field_planar_pathnum' => 
      array (
        'Space Oblique Mercator' => 'Space Oblique Mercator',
      ),
      'field_planar_ctrmer' => 
      array (
        'Transverse Mercator' => 'Transverse Mercator',
      ),
      'field_planar_feast' => 
      array (
        'Albers Conical Equal Area' => 'Albers Conical Equal Area',
        'Azimuthal Equidistant' => 'Azimuthal Equidistant',
        'Equidistant Conic' => 'Equidistant Conic',
        'Equirectangular' => 'Equirectangular',
        'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
        'Gnomonic' => 'Gnomonic',
        'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
        'Lambert Conformal Conic' => 'Lambert Conformal Conic',
        'Mercator' => 'Mercator',
        'Modified Stereographic for Alaska' => 'Modified Stereographic for Alaska',
        'Miller Cylindrical' => 'Miller Cylindrical',
        'Oblique Mercator' => 'Oblique Mercator',
        'Orthographic' => 'Orthographic',
        'Polar Stereographic' => 'Polar Stereographic',
        'Polyconic' => 'Polyconic',
        'Robinson' => 'Robinson',
        'Sinusoidal' => 'Sinusoidal',
        'Space Oblique Mercator' => 'Space Oblique Mercator',
        'Stereographic' => 'Stereographic',
        'Transverse Mercator' => 'Transverse Mercator',
        'van der Grinten' => 'van der Grinten',
      ),
      'field_planar_fnorth' => 
      array (
        'Albers Conical Equal Area' => 'Albers Conical Equal Area',
        'Azimuthal Equidistant' => 'Azimuthal Equidistant',
        'Equidistant Conic' => 'Equidistant Conic',
        'Equirectangular' => 'Equirectangular',
        'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
        'Gnomonic' => 'Gnomonic',
        'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
        'Lambert Conformal Conic' => 'Lambert Conformal Conic',
        'Mercator' => 'Mercator',
        'Modified Stereographic for Alaska' => 'Modified Stereographic for Alaska',
        'Miller Cylindrical' => 'Miller Cylindrical',
        'Oblique Mercator' => 'Oblique Mercator',
        'Orthographic' => 'Orthographic',
        'Polar Stereographic' => 'Polar Stereographic',
        'Polyconic' => 'Polyconic',
        'Robinson' => 'Robinson',
        'Sinusoidal' => 'Sinusoidal',
        'Space Oblique Mercator' => 'Space Oblique Mercator',
        'Stereographic' => 'Stereographic',
        'Transverse Mercator' => 'Transverse Mercator',
        'van der Grinten' => 'van der Grinten',
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
  5 => 
  array (
    'label' => 'Standard Parallel',
    'field_name' => 'field_planar_stdparll',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-13',
    'description' => 'Line of constant latitude at which the surface of the Earth and the plane or developable surface intersect.
value: -90.0 = y = 90.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_stdparll][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_stdparll' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_stdparll][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Albers Conical Equal Area' => 'Albers Conical Equal Area',
          'Equidistant Conic' => 'Equidistant Conic',
          'Equirectangular' => 'Equirectangular',
          'Lambert Conformal Conic' => 'Lambert Conformal Conic',
          'Mercator' => 'Mercator',
          'Polar Stereographic' => 'Polar Stereographic',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-90.0',
    'max' => '90.0',
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
  6 => 
  array (
    'label' => 'Longitude of central meridian',
    'field_name' => 'field_planar_longcm',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-12',
    'description' => 'Line of longitude at center of map projection, generally used as basis for constructing the projection.
value: -180.0 = x < 180.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_longcm][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_longcm' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_longcm][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Albers Conical Equal Area' => 'Albers Conical Equal Area',
          'Azimuthal Equidistant' => 'Azimuthal Equidistant',
          'Equidistant Conic' => 'Equidistant Conic',
          'Equirectangular' => 'Equirectangular',
          'Lambert Conformal Conic' => 'Lambert Conformal Conic',
          'Mercator' => 'Mercator',
          'Miller Cylindrical' => 'Miller Cylindrical',
          'Polyconic' => 'Polyconic',
          'Sinusoidal' => 'Sinusoidal',
          'Transverse Mercator' => 'Transverse Mercator',
          'van der Grinten' => 'van der Grinten',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-180.0',
    'max' => '180.0',
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
  7 => 
  array (
    'label' => 'Latitude of Projection Origin',
    'field_name' => 'field_planar_latprjo',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-11',
    'description' => 'Latitude chosen as origin of rectangular coordinates for map projection.
value: -90.0 = y = 90.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_latprjo][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_latprjo' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_latprjo][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Albers Conical Equal Area' => 'Albers Conical Equal Area',
          'Azimuthal Equidistant' => 'Azimuthal Equidistant',
          'Equidistant Conic' => 'Equidistant Conic',
          'Lambert Conformal Conic' => 'Lambert Conformal Conic',
          'Oblique Mercator' => 'Oblique Mercator',
          'Polyconic' => 'Polyconic',
          'Transverse Mercator' => 'Transverse Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-90.0',
    'max' => '90.0',
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
  8 => 
  array (
    'label' => 'False Easting',
    'field_name' => 'field_planar_feast',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-10',
    'description' => 'Value added to all "x" values in the rectangular coordinates for map projection. Frequently assigned to eliminate negative numbers; expressed in Planar Coordinate Units, a real number',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_feast][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_feast' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_feast][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Albers Conical Equal Area' => 'Albers Conical Equal Area',
          'Azimuthal Equidistant' => 'Azimuthal Equidistant',
          'Equidistant Conic' => 'Equidistant Conic',
          'Equirectangular' => 'Equirectangular',
          'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
          'Gnomonic' => 'Gnomonic',
          'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
          'Lambert Conformal Conic' => 'Lambert Conformal Conic',
          'Mercator' => 'Mercator',
          'Modified Stereographic for Alaska' => 'Modified Stereographic for Alaska',
          'Miller Cylindrical' => 'Miller Cylindrical',
          'Oblique Mercator' => 'Oblique Mercator',
          'Orthographic' => 'Orthographic',
          'Polar Stereographic' => 'Polar Stereographic',
          'Polyconic' => 'Polyconic',
          'Robinson' => 'Robinson',
          'Sinusoidal' => 'Sinusoidal',
          'Space Oblique Mercator' => 'Space Oblique Mercator',
          'Stereographic' => 'Stereographic',
          'Transverse Mercator' => 'Transverse Mercator',
          'van der Grinten' => 'van der Grinten',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  9 => 
  array (
    'label' => 'False Northing',
    'field_name' => 'field_planar_fnorth',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-9',
    'description' => 'Value added to all "y" values in the rectangular coordinates for map projection. Frequently assigned to eliminate negative numbers; expressed in Planar Coordinate Units.
value: real number',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_fnorth][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_fnorth' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_fnorth][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Albers Conical Equal Area' => 'Albers Conical Equal Area',
          'Azimuthal Equidistant' => 'Azimuthal Equidistant',
          'Equidistant Conic' => 'Equidistant Conic',
          'Equirectangular' => 'Equirectangular',
          'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
          'Gnomonic' => 'Gnomonic',
          'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
          'Lambert Conformal Conic' => 'Lambert Conformal Conic',
          'Mercator' => 'Mercator',
          'Modified Stereographic for Alaska' => 'Modified Stereographic for Alaska',
          'Miller Cylindrical' => 'Miller Cylindrical',
          'Oblique Mercator' => 'Oblique Mercator',
          'Orthographic' => 'Orthographic',
          'Polar Stereographic' => 'Polar Stereographic',
          'Polyconic' => 'Polyconic',
          'Robinson' => 'Robinson',
          'Sinusoidal' => 'Sinusoidal',
          'Space Oblique Mercator' => 'Space Oblique Mercator',
          'Stereographic' => 'Stereographic',
          'Transverse Mercator' => 'Transverse Mercator',
          'van der Grinten' => 'van der Grinten',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  10 => 
  array (
    'label' => 'Scale Factor at Equator',
    'field_name' => 'field_planar_sfequat',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-8',
    'description' => 'Multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance along the equator.
value: real number > 0.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_sfequat][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_sfequat' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_sfequat][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Mercator' => 'Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0.0',
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
  11 => 
  array (
    'label' => 'Height of Perspective Point Above Surface',
    'field_name' => 'field_planar_heightpt',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-7',
    'description' => 'Height of viewpoint above the earth, expressed in meters. A real number > 0.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_heightpt][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_heightpt' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_heightpt][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0.0',
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
  12 => 
  array (
    'label' => 'Longitude of Projection Center',
    'field_name' => 'field_planar_longpc',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-6',
    'description' => 'Longitude of the point of projection for azimuthal projections.
value:  -180.0 = x < 180.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_longpc][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_longpc' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_longpc][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
          'Gnomonic' => 'Gnomonic',
          'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
          'Orthographic' => 'Orthographic',
          'Robinson' => 'Robinson',
          'Stereographic' => 'Stereographic',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-180.0',
    'max' => '180.0',
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
  13 => 
  array (
    'label' => 'Latitude of Projection Center',
    'field_name' => 'field_planar_latprjc',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-5',
    'description' => 'Latitude of the point of projection for azimuthal projections.
value:  -90.0 = y = 90.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_latprjc][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_latprjc' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_latprjc][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'General Vertical Near-sided Projection' => 'General Vertical Near-sided Projection',
          'Gnomonic' => 'Gnomonic',
          'Lambert Azimuthal Equal Area' => 'Lambert Azimuthal Equal Area',
          'Orthographic' => 'Orthographic',
          'Stereographic' => 'Stereographic',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-90.0',
    'max' => '90.0',
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
  14 => 
  array (
    'label' => 'Scale Factor at Center Line',
    'field_name' => 'field_planar_sfctrlin',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-4',
    'description' => 'Multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance along the central line.
value: real number > 0.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_sfctrlin][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_sfctrlin' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_sfctrlin][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Oblique Mercator' => 'Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0.0',
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
  15 => 
  array (
    'label' => 'Oblique Line Azimuth Angle',
    'field_name' => 'field_planar_azimangl',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-3',
    'description' => 'Angle measured clockwise from north, and expressed in degrees.
value: 0.0 = angle < 360.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_azimangl][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_azimangl' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_azimangl][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Oblique Mercator' => 'Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0.0',
    'max' => '360.0',
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
  16 => 
  array (
    'label' => 'Oblique Line Point Longitude',
    'field_name' => 'field_planar_azimptl',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-2',
    'description' => 'Longitude of the map projection origin.
value: -180.0 = x < 180.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_azimptl][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_azimptl' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_azimptl][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Oblique Mercator' => 'Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-180.0',
    'max' => '180.0',
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
  17 => 
  array (
    'label' => 'Oblique Line Latitude',
    'field_name' => 'field_planar_obqllat',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '-1',
    'description' => 'Latitude of a point defining the oblique line.
value: -90.0 = y = 90.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_obqllat][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_obqllat' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_obqllat][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Oblique Mercator' => 'Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-90.0',
    'max' => '90.0',
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
  18 => 
  array (
    'label' => 'Oblique Line Longitude',
    'field_name' => 'field_planar_obqllong',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => 0,
    'description' => 'Longitude of a point defining the oblique line.
value: -180.0 = x < 180.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_obqllong][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_obqllong' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_obqllong][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Oblique Mercator' => 'Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-180.0',
    'max' => '180.0',
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
  19 => 
  array (
    'label' => 'Straight Vertical Longitude from Pole',
    'field_name' => 'field_planar_svlong',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '1',
    'description' => 'Longitude to be oriented straight up from the North or South Pole.
value: -180.0 = x < 180.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_svlong][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_svlong' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_svlong][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Polar Stereographic' => 'Polar Stereographic',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '-180.0',
    'max' => '180.0',
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
  20 => 
  array (
    'label' => 'Scale Factor at Projection Origin',
    'field_name' => 'field_planar_sfprjorg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '2',
    'description' => 'Multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance at the projection origin.
value: real number > 0.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_sfprjorg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_sfprjorg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_sfprjorg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Polar Stereographic' => 'Polar Stereographic',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0.0',
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
  21 => 
  array (
    'label' => 'Landsat Number',
    'field_name' => 'field_planar_landsat',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '3',
    'description' => 'Multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance at the projection origin.
value: real number > 0.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_landsat][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_landsat' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_landsat][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Space Oblique Mercator' => 'Space Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  22 => 
  array (
    'label' => 'Path Number',
    'field_name' => 'field_planar_pathnum',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '4',
    'description' => 'Number of the orbit of the Landsat satellite.
value: 0 < n < 251 for Landsats 1, 2, or 3
value: 0 < n < 233 for Landsats 4 or 5
value: Integer > 0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_pathnum][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_pathnum' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_pathnum][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Space Oblique Mercator' => 'Space Oblique Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '1',
    'max' => '251',
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
  23 => 
  array (
    'label' => 'Scale Factor at Center Meridian',
    'field_name' => 'field_planar_ctrmer',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '5',
    'description' => 'Multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance along the central meridian.
value: real number > 0.0',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_ctrmer][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_ctrmer' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_ctrmer][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Map projection' => 'Map projection',
        ),
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 
        array (
          'Transverse Mercator' => 'Transverse Mercator',
        ),
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'min' => '0.0',
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
  24 => 
  array (
    'label' => 'Other Projection\'s Definition',
    'field_name' => 'field_planar_otherprj',
    'type' => 'text',
    'widget_type' => 'text_textarea',
    'change' => 'Change basic information',
    'weight' => '6',
    'rows' => '2',
    'size' => 60,
    'description' => 'Description of projection, not defined in the standard, used for data set.
Information provided shall include: 
* name of projection, 
* names of parameters and values used for data set,
* citation of specification for algorithms that describe the mathematical relationship between Earth and plane or developable surface for the projection.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_otherprj][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_otherprj' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_otherprj][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Other grid system' => 'Other grid system',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  25 => 
  array (
    'label' => 'Planar Coordinate Encoding Method',
    'field_name' => 'field_planar_plance',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '9',
    'description' => 'The means used to represent horizontal positions.',
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
      'field_planar_plance' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Coordinate pair
Distance and bearing
Row and column',
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
      'field_planar_absres' => 
      array (
        'Coordinate pair' => 'Coordinate pair',
        'Row and column' => 'Row and column',
      ),
      'field_planar_ordres' => 
      array (
        'Coordinate pair' => 'Coordinate pair',
        'Row and column' => 'Row and column',
      ),
      'field_planar_distres' => 
      array (
        'Distance and bearing' => 'Distance and bearing',
      ),
      'field_planar_bearfd' => 
      array (
        'Distance and bearing' => 'Distance and bearing',
      ),
      'field_planar_bearres' => 
      array (
        'Distance and bearing' => 'Distance and bearing',
      ),
      'field_planar_bearrefm' => 
      array (
        'Distance and bearing' => 'Distance and bearing',
      ),
      'field_planar_bearunit' => 
      array (
        'Distance and bearing' => 'Distance and bearing',
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
  26 => 
  array (
    'label' => 'Planar Distance Units',
    'field_name' => 'field_planar_plandu',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '10',
    'description' => 'Units of measure used for distances.',
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
      'field_planar_plandu' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Meters
International feet
Survey feet',
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
  27 => 
  array (
    'label' => 'Abscissa Resolution',
    'field_name' => 'field_planar_absres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '11',
    'description' => 'The (nominal) minimum distance between the "x" or column values of two adjacent points, expressed in Planar Distance Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_absres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_absres' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_absres][0][value',
        ),
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Coordinate pair' => 'Coordinate pair',
          'Row and column' => 'Row and column',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  28 => 
  array (
    'label' => 'Ordinate Resolution',
    'field_name' => 'field_planar_ordres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '12',
    'description' => 'The (nominal) minimum distance between the "y" or row values of two adjacent points, expressed in Planar Distance Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_ordres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_ordres' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_ordres][0][value',
        ),
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Coordinate pair' => 'Coordinate pair',
          'Row and column' => 'Row and column',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  29 => 
  array (
    'label' => 'Distance Resolution',
    'field_name' => 'field_planar_distres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '13',
    'description' => 'The minimum distance measurable between two points, expressed Planar Distance Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_distres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_distres' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_distres][0][value',
        ),
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Distance and bearing' => 'Distance and bearing',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  30 => 
  array (
    'label' => 'Bearing Reference Direction',
    'field_name' => 'field_planar_bearfd',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '14',
    'description' => 'direction from which the bearing is measured. (North or South)',
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
      'field_planar_bearfd' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Distance and bearing' => 'Distance and bearing',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'North
South',
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
  31 => 
  array (
    'label' => 'Bearing Resolution',
    'field_name' => 'field_planar_bearres',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '15',
    'description' => 'The minimum angle measurable between two points, expressed in Bearing Units of measure.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_bearres][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_bearres' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_bearres][0][value',
        ),
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Distance and bearing' => 'Distance and bearing',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  32 => 
  array (
    'label' => 'Bearing Reference Median',
    'field_name' => 'field_planar_bearrefm',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '16',
    'description' => 'Axis from which the bearing is measured.',
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
      'field_planar_bearrefm' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Distance and bearing' => 'Distance and bearing',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Assumed
Grid
Magnetic
Astronomic
Geodetic',
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
  33 => 
  array (
    'label' => 'Bearing Units',
    'field_name' => 'field_planar_bearunit',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '17',
    'description' => 'Units of measure used for angles.',
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
      'field_planar_bearunit' => 
      array (
        'value' => '',
      ),
    ),
    'group' => 'group_planar_coordinfo',
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 'conditional_field_no_value',
        'field_planar_gridsys' => 'conditional_field_no_value',
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 
        array (
          'Distance and bearing' => 'Distance and bearing',
        ),
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
      ),
    ),
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Decimal degrees
Decimal minutes
Decimal seconds
Degrees and decimal units
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
  34 => 
  array (
    'label' => 'ARC Zone',
    'field_name' => 'field_planar_arczone',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '8',
    'description' => 'An identifier for the ARC Zone',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_arczone][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_arczone' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_arczone][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
          'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  35 => 
  array (
    'label' => 'UTM Zone Number',
    'field_name' => 'field_planar_utmzone',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '9',
    'description' => 'Identifier for the UTM Zone (integer)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_utmzone][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_utmzone' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_utmzone][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  36 => 
  array (
    'label' => 'UPS Zone Identifier',
    'field_name' => 'field_planar_upszone',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '10',
    'description' => 'Identifier for the UPS Zone (integer)',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_upszone][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_upszone' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_upszone][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  37 => 
  array (
    'label' => 'SPCS Zone',
    'field_name' => 'field_planar_spcszone',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '11',
    'description' => 'An identifier for the SPCS Zone',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_spcszone][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_spcszone' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_spcszone][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
          'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  38 => 
  array (
    'label' => 'Straight Vertical Longitude from Pole',
    'field_name' => 'field_planar_svlongg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '12',
    'description' => 'longitude to be oriented straight up from the North or South Pole.
	',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_svlongg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_svlongg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_svlongg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  39 => 
  array (
    'label' => 'Scale Factor at Projection Origin',
    'field_name' => 'field_planar_sfprjorgg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '13',
    'description' => 'a multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance at the projection origin.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_sfprjorgg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_sfprjorgg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_sfprjorgg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  40 => 
  array (
    'label' => 'False Easting',
    'field_name' => 'field_planar_feastg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '14',
    'description' => ' the value added to all "x" values in the rectangular coordinates for a map projection. This value frequently is assigned to eliminate negative numbers. Expressed in the unit of measure identified in Planar Coordinate Units.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_feastg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_feastg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_feastg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
          'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
          'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
          'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
          'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
          'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  41 => 
  array (
    'label' => 'False Northing',
    'field_name' => 'field_planar_fnorthg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '15',
    'description' => 'The value added to all "y" values in the rectangular coordinates for a map projection. This value frequently is assigned to eliminate negative numbers. Expressed in the unit of measure identified in Planar Coordinate Units.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_fnorthg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_fnorthg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_fnorthg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
          'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
          'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
          'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
          'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
          'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  42 => 
  array (
    'label' => 'Standard Parallel',
    'field_name' => 'field_planar_stdparllg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '16',
    'description' => 'line of constant latitude at which the surface of the Earth and the plane or developable surface intersect.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_stdparllg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_stdparllg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_stdparllg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Polar Stereographic (Polar Stereographic Projection)' => 'Universal Polar Stereographic (Polar Stereographic Projection)',
          'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
          'ARC Coordinate System (Equirectangular)' => 'ARC Coordinate System (Equirectangular)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  43 => 
  array (
    'label' => 'Longitude of central meridian',
    'field_name' => 'field_planar_longcmg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '17',
    'description' => ' the line of longitude at the center of a map projection generally used as the basis for constructing the projection.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_longcmg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_longcmg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_longcmg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
          'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
          'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
          'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
          'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
          'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  44 => 
  array (
    'label' => 'Latitude of Projection Origin',
    'field_name' => 'field_planar_latprjog',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '18',
    'description' => 'latitude chosen as the origin of rectangular coordinates for a map projection.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_latprjog][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_latprjog' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_latprjog][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
          'State Plane Coordinate System 1927 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1927 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1927 (Polyconic)' => 'State Plane Coordinate System 1927 (Polyconic)',
          'State Plane Coordinate System 1983 (Lambert Conformal Conic)' => 'State Plane Coordinate System 1983 (Lambert Conformal Conic)',
          'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Polyconic)' => 'State Plane Coordinate System 1983 (Polyconic)',
          'ARC Coordinate System (Azimuthal Equidistant)' => 'ARC Coordinate System (Azimuthal Equidistant)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  45 => 
  array (
    'label' => 'Scale Factor at Center Line',
    'field_name' => 'field_planar_sfctrling',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '19',
    'description' => 'a multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance along the center line.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_sfctrling][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_sfctrling' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_sfctrling][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  46 => 
  array (
    'label' => 'Oblique Line Azimuth Angle',
    'field_name' => 'field_planar_azimanglg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '20',
    'description' => 'angle measured clockwise from north, and expressed in degrees.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_azimanglg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_azimanglg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_azimanglg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  47 => 
  array (
    'label' => 'Oblique Line Longitude',
    'field_name' => 'field_planar_obqllongg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '21',
    'description' => ' longitude of a point defining the oblique line.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_obqllongg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_obqllongg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_obqllongg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  48 => 
  array (
    'label' => 'Oblique Line Latitude',
    'field_name' => 'field_planar_obqllatg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '22',
    'description' => 'latitude of a point defining the oblique line.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_obqllatg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_obqllatg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_obqllatg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'State Plane Coordinate System 1927 (Oblique Mercator)' => 'State Plane Coordinate System 1927 (Oblique Mercator)',
          'State Plane Coordinate System 1983 (Oblique Mercator)' => 'State Plane Coordinate System 1983 (Oblique Mercator)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
  49 => 
  array (
    'label' => 'Scale Factor at Central Meridian',
    'field_name' => 'field_planar_ctrmerg',
    'type' => 'number_float',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '23',
    'description' => 'a multiplier for reducing a distance obtained from a map by computation or scaling to the actual distance along the central meridian.',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_planar_ctrmerg][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => 
    array (
      'field_planar_ctrmerg' => 
      array (
        0 => 
        array (
          'value' => '',
          '_error_element' => 'default_value_widget][field_planar_ctrmerg][0][value',
        ),
      ),
    ),
    'group' => false,
    'conditional_fields' => 
    array (
      'available_fields' => 
      array (
        'field_planar_sysflag' => 
        array (
          'Grid Coordinate System' => 'Grid Coordinate System',
        ),
        'field_planar_gridsys' => 
        array (
          'Universal Transverse Mercator (Transverse Mercator Projection)' => 'Universal Transverse Mercator (Transverse Mercator Projection)',
          'State Plane Coordinate System 1927 (Transverse Mercator)' => 'State Plane Coordinate System 1927 (Transverse Mercator)',
          'State Plane Coordinate System 1983 (Transverse Mercator)' => 'State Plane Coordinate System 1983 (Transverse Mercator)',
        ),
        'field_planar_mapproj' => 'conditional_field_no_value',
        'field_planar_plance' => 'conditional_field_no_value',
        'field_planar_plandu' => 'conditional_field_no_value',
        'field_planar_bearfd' => 'conditional_field_no_value',
        'field_planar_bearrefm' => 'conditional_field_no_value',
        'field_planar_bearunit' => 'conditional_field_no_value',
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
);
