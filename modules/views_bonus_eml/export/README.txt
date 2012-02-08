Bonus: Views Export EML
--------------------------------------------------------------------------------
This modules is based on Bonus: Views Export and adds EML feed type
that can be used to export data from your views.

You can use default view with path as "eml_view/NODE_ID" or change it:
--------------------------------------------------------------------------------
1. Add a new "Feed" display to your view.
2. Change its "Style" to the "EML file".
3. Configure the options (such as name, quote, etc.). You can go back and do
   this at any time by clicking the gear icon next to the style plugin you just
   selected.
4. Give it a path in the Feed settings such as "path/to/view/eml".
5. Optionally, you can choose to attach this to another of your displays by
   updating the "Attach to:" option in feed settings.

--------------------------------------------------------------------------------

views-bonus-eml-export-eml.tpl.php
1. creates a EML template
2. populates metadata data into the template

eml_variables.php
1. takes all the dataset related data from db in an Array
2. calculates vid version

eml_functions.php
functions, used in previous two files, goes here


--------------------------------------------------------------------------------
A few assumption for the content in Drupal are made:

Party element:
A 'positionName' element is used when the 'person' doesn't contain a last name 
but a role is specified. E.g. the person node title is 'Site Lead PI' and the 
role is 'LPI' and no last name is entered the following EML will be produced:

<...>
 <positionName>FLS Lead PI</positionName>
  <address>
   <deliveryPoint>Department for Ecology</deliveryPoint>
   <deliveryPoint>Fictitious State University</deliveryPoint>
   <deliveryPoint>PO Box 111111</deliveryPoint>
   <city>Ficity</city>
   <administrativeArea>FI</administrativeArea>
   <postalCode>11111-1111</postalCode>
  </address>
 <phone phonetype="voice">(999) 999-9999</phone>
 <electronicMailAddress>fsu.leadPI@fi.univ.edu</electronicMailAddress>
 <onlineUrl>http://www.fsu.edu/</onlineUrl>
<...>

To trigger an organizationName tag, only use the organization field, 
no last name, and no role, i.e. role = NONE

Dataset Contact:
May be connected to the dataset as regular Person node. If nobody is identified 
the program will use the metadataProvider from the eml_config node.

Keywords:
The keywords now come out in different sets according to their respective
taxnomies for the following taxonomy names:
'LTER Keywords', 'ACRnym Keywords' (e.g. 'SEV Keywords'), 'Keywords'

If taxnomies with a different name are used in combination with these,
those names will need to be added to the code.


