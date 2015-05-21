# New Branch as of April 2011 #

## Why a new Branch ##

The National Biological Information Infrastructure, a program of the USGS is supporting further development of this tool.  However, the gov. folks would like to see a complete mapping between the information placeholders proposed in the Biological Data Profile (BDP).  The BDP is a profile of the Content Standard for Digital Geospatial Metadata (CSDGM) that implements in XML a mean to create Federal Geographic Data Committee (FGCD) compliant spatial metadata.

## Status ##

Currently, this branch is in active development, and a beta version of the package should be complete by May 2011.

You should find features, modules, content types that meet the requirements expressed above. If you want to see the BDP standard you can find it easily googling it.

### More Details ###
Here you will find the individual content types used to recreate a fully compliant BDP metadata management system based in Drupal.

### Custom Content Types (and forms) ###
There are a dozen content types involved:
Eleven were made by our group, and an additional one, Biblio, was created installing the "biblio" contributed module.

|--Name-----------------|--------------Machine name-----------|
|:----------------------|:------------------------------------|
|Analytical Tool        |               software              |
|Biblio                 |               biblio                |
|Browse Graphics        |               browse\_graphics      |
|Entity Information     |               data\_file            |
|Metadata Record        |               data\_set             |
|Methodology            |               methodology           |
|Person, Organization or Position|      person                         |
|Planar Coordinate System  |            planar\_coordinate\_system |
|Process Step	            |            process\_step            |
|Research Site             |            research\_site           |
|Source Information        |            source\_info             |
|Variable (Attribute)	    |            variable                 |

---

### Contrib and Custom Modules ###

There are a number of contributed modules needed to make this work nicely.  There are also custom modules created by us,
mostly to create compound CCK fields.

Here is a list of everything I have.
|Package|      Name|  Version     |
|:------|:---------|:-------------|
|Administration | Admin Role (adminrole)            |        6.x-1.3     |
|Administration |Administration menu (admin\_menu)         |        6.x-1.6     |
|Biblio |       Biblio (biblio)                              |        6.x-1.15    |
|Biblio |       Biblio - PubMed (biblio\_pm)                  |        6.x-1.15    |
|CCK    |          CCK Fieldgroup Tabs (cck\_fieldgroup\_tabs)    |        6.x-1.x-dev |
|CCK    |          Code Value and Code Definition Pair Field(codedefinition\_fld)    |        6.x-1.0     |
|CCK    |          Computed Field (computed\_field)              |        6.x-1.0-beta5 |
|CCK    |          Conditional Fields (conditional\_fields)      |        6.x-2.0-beta2 |
|CCK    |          Content (content)                            |        6.x-2.9     |
|CCK    |          Content Copy (content\_copy)                  |        6.x-2.9     |
|CCK    |          Content Permissions (content\_permissions)    |        6.x-2.9     |
|CCK    |          Content Taxonomy (content\_taxonomy)          |        6.x-1.0-rc2 |
|CCK    |          Custom Formatters (custom\_formatters)        |        6.x-1.5     |
|CCK    |          Email (email)                                |        6.x-1.2     |
|CCK    |          Fieldgroup (fieldgroup)                      |        6.x-2.9     |
|CCK    |          FileField (filefield)                        |        6.x-3.9     |
|CCK    |          ImageField (imagefield)                      |        6.x-3.9     |
|CCK    |          Link (link)                                  |        6.x-2.9     |
|CCK    |          Node Reference (nodereference)               |        6.x-2.9     |
|CCK    |          Node Reference Formatters                    |        6.x-1.2     |
|CCK    |          Node Referrer (nodereferrer)                 |        6.x-1.0-rc2 |
|CCK    |          Number (number)                              |        6.x-2.9     |
|CCK    |          Option Widgets (optionwidgets)               |        6.x-2.9     |
|CCK    |          Phone - CCK (phone)                          |        6.x-2.18    |
|CCK    |          Quantitative Attribute Accuracy Assesment Field (qaa\_fld)   |        6.x-1.0     |
|CCK    |          Quantitative Horizontal Positional Accuracy Assesment Field (qhpaa\_fld)  |        6.x-1.0     |
|CCK    |          Quantitative Vertical Position Accuracy Assesment Field (qvpaa\_fld)      |        6.x-1.0     |
|CCK    |          Spatial Data Transfer Standard (SDTS) Term Description Field (sdtsterms\_fld)   |        6.x-1.0     |
|CCK    |          Text (text)                                  |        6.x-2.9     |
|CCK    |          User Reference (userreference)               |        6.x-2.9     |
|CCK    |          Vector Point Format (VPF) Term Description Field (vpfterms\_fld)   |        6.x-1.0     |
|Chaos tool|   Chaos tools (ctools)                         |        6.x-1.8     |
|Core - optional|  Color (color)                            |        6.20        |
|Core - optional | Comment (comment)                       |        6.20        |
|Core - optional|  Database logging (dblog)                |        6.20        |
|Core - optional|  Help (help)                              |        6.20        |
|Core - optional|  Menu (menu)                              |        6.20        |
|Core - optional|  Path (path)                           |        6.20        |
|Core - optional|  PHP filter (php)                         |        6.20        |
|Core - optional|  Search (search)                        |        6.20        |
|Core - optional|  Taxonomy (taxonomy)                     |        6.20        |
|Core - optional|  Update status (update)                   |        6.20        |
|Core - optional|  Upload (upload)                          |        6.20        |
|Core - required|  Block (block)                            |        6.20        |
|Core - required|  Filter (filter)                          |        6.20        |
|Core - required|  Node (node)                            |        6.20        |
|Core - required|  System (system)                          |        6.20        |
|Core - required|  User (user)                              |        6.20        |
|Date/Time|    Date (date)                                  |        6.x-2.7     |
|Date/Time|    Date API (date\_api)                          |        6.x-2.7     |
|Date/Time|    Date Timezone (date\_timezone)                |        6.x-2.7     |
|Features|     Features (features)                          |        6.x-1.0     |
|Form Elements|Hierarchical Select (hierarchical\_select)    |        6.x-3.7     |
|ImageCache|ImageAPI (imageapi)     |        6.x-1.9     |
|ImageCache|ImageAPI GD2 (imageapi\_gd)     |        6.x-1.9 |
|Modal frame|  Modal Frame API (modalframe)                 |        6.x-1.7     |
|OpenLayers|OpenLayers (openlayers)     |        6.x-2.0-alpha10 |
|OpenLayers|  OpenLayers CCK (openlayers\_cck) |  6.x-2.0-alpha10 |
|OpenLayers| OpenLayers UI (openlayers\_ui)  | 6.x-2.0-alpha10 |
|Other  |        Advanced help (advanced\_help)                |        6.x-1.2     |
|Other  |        Backup and Migrate (backup\_migrate)          |        6.x-2.4     |
|Other  |        BDP Config (bdp\_config)                      |                    |
|Other  |        Diff (diff)                                  |        6.x-2.1     |
|Other  |        getID3() (getid3)                            |        6.x-1.4     |
|Other  |        noderefcreate (noderefcreate)                |        6.x-1.0     |
|Other  |        Search config (search\_config)                |        6.x-1.6     |
|Other  |        Tabs (tabs)                                  |        6.x-1.x-dev |
|Other  |        Token (token)                                |        6.x-1.15    |
|User interface   Automodal (automodal)|                    |        6.x-1.0     |
|User interface   jQuery UI (jquery\_ui)|                    |        6.x-1.4     |
|User interface   jQuery Update (jquery\_update)|            |        6.x-2.0-alpha1 |
|User interface   Modal Node References (modal\_noderef)|          |        6.x-1.1     |
|User interface   onBeforeUnload API (onbeforeunload)|          |        6.x-1.0     |
|User interface   Wysiwyg (wysiwyg)|                        |        6.x-2.3     |
|Views  |        Bonus: Views Export (views\_bonus\_export)     |        6.x-1.1     |
|Views  |        Bonus: Views Export BDP(views\_bonus\_bdp\_export)    |        6.x-1.1     |
|Views  |        Views (views)                                |        6.x-2.12    |
|Views  |        Views Custom Field (views\_customfield)       |        6.x-1.0     |
|Views  |        Views exporter (views\_export)                |        6.x-2.12    |
|Views  |        Views UI (views\_ui)                          |        6.x-2.12    |
|Views  |        Views XML (views\_xml)                        |        6.x-1.0-beta2 |



---




### Features ###
Installing Content types, views and menus manually may be more teaching, but sometimes tedious,
and prone to some type of errors.

You may want to check out the features that bundle "most of it".

### What do you mean "most of it" ###
Basic tabs labels are not transported, making the forms not render as expected out of the box.
There is also some fine-tuning with the permissions, sometimes these are not exported automatically,
it is up to you to make them right (CRUDE appropriately or assign view and edit permission per each CCK.)
There are a couple of oddities, this is not an official release as of yet, I expect to have an official
release in Summer 2011.