$content['type']  = array (
  'name' => 'Person',
  'type' => 'person',
  'description' => 'A person doing research at an LTER Site',
  'title_label' => 'Full name',
  'body_label' => '',
  'min_word_count' => '0',
  'help' => '',
  'node_options' => 
  array (
    'status' => true,
    'promote' => false,
    'sticky' => false,
    'revision' => false,
  ),
  'old_type' => 'person',
  'orig_type' => '',
  'module' => 'node',
  'custom' => '1',
  'modified' => '1',
  'locked' => '0',
  'content_profile_use' => false,
  'comment' => 2,
  'comment_default_mode' => 4,
  'comment_default_order' => 1,
  'comment_default_per_page' => 50,
  'comment_controls' => 3,
  'comment_anonymous' => 0,
  'comment_subject_field' => 1,
  'comment_preview' => 1,
  'comment_form_location' => 0,
  'links_related_types' => 0,
);
$content['fields']  = array (
  0 => 
  array (
    'label' => 'First Name',
    'field_name' => 'field_person_first_name',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-4',
    'rows' => 5,
    'size' => '60',
    'description' => '',
    'default_value' => 
    array (
      0 => 
      array (
        'value' => '',
        '_error_element' => 'default_value_widget][field_person_first_name][0][value',
      ),
    ),
    'default_value_php' => '',
    'default_value_widget' => NULL,
    'group' => false,
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
    ),
  ),
  1 => 
  array (
    'label' => 'Last Name',
    'field_name' => 'field_person_last_name',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-2',
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
      'weight' => '1',
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
    ),
  ),
  2 => 
  array (
    'label' => 'Organization',
    'field_name' => 'field_person_organization',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '-1',
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
  3 => 
  array (
    'label' => 'Role',
    'field_name' => 'field_person_role',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => 0,
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
      'weight' => '-1',
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
    ),
  ),
  4 => 
  array (
    'label' => 'Title',
    'field_name' => 'field_person_title',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '1',
    'rows' => 5,
    'size' => '60',
    'description' => '',
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
    ),
  ),
  5 => 
  array (
    'label' => 'Email',
    'field_name' => 'field_person_email',
    'type' => 'email',
    'widget_type' => 'email_textfield',
    'change' => 'Change basic information',
    'weight' => '2',
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
      'weight' => '1',
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
    ),
  ),
  6 => 
  array (
    'label' => 'Address',
    'field_name' => 'field_person_address',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '4',
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
      'weight' => '3',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'City',
    'field_name' => 'field_person_city',
    'type' => 'text',
    'widget_type' => 'text_textfield',
    'change' => 'Change basic information',
    'weight' => '5',
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
      'weight' => '4',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'State',
    'field_name' => 'field_person_state',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '6',
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
      'weight' => '5',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'Zip Code',
    'field_name' => 'field_person_zipcode',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '7',
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
      'weight' => '6',
      'parent' => '',
      'label' => 
      array (
        'format' => 'inline',
      ),
      'teaser' => 
      array (
        'format' => 'unformatted',
        'exclude' => 1,
      ),
      'full' => 
      array (
        'format' => 'unformatted',
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
    'label' => 'Country',
    'field_name' => 'field_person_country',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '8',
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
      'weight' => '7',
      'parent' => '',
      'label' => 
      array (
        'format' => 'above',
      ),
      'teaser' => 
      array (
        'format' => 'default',
        'exclude' => 1,
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
    'label' => 'Phone',
    'field_name' => 'field_person_phone',
    'type' => 'ca_phone',
    'widget_type' => 'phone_textfield',
    'change' => 'Change basic information',
    'weight' => '9',
    'size' => 60,
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
    ),
  ),
  12 => 
  array (
    'label' => 'Fax',
    'field_name' => 'field_person_fax',
    'type' => 'ca_phone',
    'widget_type' => 'phone_textfield',
    'change' => 'Change basic information',
    'weight' => '10',
    'size' => 60,
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
  13 => 
  array (
    'label' => 'personid',
    'field_name' => 'field_person_personid',
    'type' => 'number_integer',
    'widget_type' => 'number',
    'change' => 'Change basic information',
    'weight' => '11',
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
    ),
  ),
  14 => 
  array (
    'label' => 'List in directory?',
    'field_name' => 'field_person_list',
    'type' => 'text',
    'widget_type' => 'optionwidgets_buttons',
    'change' => 'Change basic information',
    'weight' => '12',
    'description' => 'Check yes or no, whether this person should show up in the official Luquillo Personnel Directory',
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
      'field_person_list' => 
      array (
        'value' => 'No',
      ),
    ),
    'group' => false,
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
    'label' => 'person_uid',
    'field_name' => 'field_person_uid',
    'type' => 'userreference',
    'widget_type' => 'userreference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '13',
    'autocomplete_match' => 'contains',
    'size' => 60,
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
    'required' => 0,
    'multiple' => '0',
    'referenceable_roles' => 
    array (
      2 => 2,
      3 => 0,
    ),
    'referenceable_status' => 1,
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
  16 => 
  array (
    'label' => 'Publications',
    'field_name' => 'field_person_pubs',
    'type' => 'nodereference',
    'widget_type' => 'nodereference_autocomplete',
    'change' => 'Change basic information',
    'weight' => '14',
    'autocomplete_match' => 'contains',
    'size' => 60,
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
    'required' => 0,
    'multiple' => '1',
    'referenceable_types' => 
    array (
      'biblio' => 'biblio',
      'data_file' => 0,
      'testdata_file' => 0,
      'data_set' => 0,
      'page' => 0,
      'person' => 0,
      'profile' => 0,
      'research_project' => 0,
      'research_site' => 0,
      'story' => 0,
      'variable' => 0,
      'blog' => false,
      'image' => false,
      'institution_links' => false,
      'luq_news' => false,
      'tests' => false,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
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
  'title' => '-5',
  'revision_information' => '16',
  'author' => '15',
  'options' => '17',
  'comment_settings' => '19',
  'menu' => '3',
  'taxonomy' => '-3',
  'path' => '18',
);
