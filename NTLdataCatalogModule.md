# Introduction #

This module creates a custom search page and then access to data in a different database to make them queryable. This module is not very Drupallized with most of the code in one big file (datacatolg.inc) and could benefit from some input by other sites to at least make it less NTL centric.


# Files #

**datacatalog.inc**

contains all code to first generate the search form, do the search, create the
user information form and data policy, create the download form based on
dataset metadata, and deliver the data.

**datacatlog.install**

creates a table in the Drupal database to log datadownloads

**datacatalog.module**

intializes the module, implements the menu hook, the form alter hook, help hook, and theme hook.

**local.setting.php**

has custom research site groups for location search, maybe replaced according to local needs.

# Configuration #
### Configuration for the search form: ###

Create a taxonomy called 'Tags' which needs to have two top level categories,
called 'Project' and 'Theme', nested underneath these two up to two more levels
of keywords may be used. These will show up in the two pulldowns up top:

e.g.
  * Project
    * core datasets
    * associated datasets
    * IGERT
    * CNHS
    * 
  * Theme
    * LTER core areas
      * inorganic nutrients
      * populations
      * 
    * physical
      * temperature
    * chemical
      * 


### Configuration for the data download: ###

In the file sites/default/settings.php set the login for the database that holds the actual data e.g. add the line:
```
$db_url = 'mysql://userID:password@localhost/databasename';
```
Create a Page node titled 'Data Access Policy', the body of which will be displayed when a user requests data.

Add a field to the data file content type:

  * _Name:_ field\_datafile\_external\_source
  * _Label:_ External Source
  * _type:_ text field
  * _size:_ 120
  * not required


This field holds the table name in the format of databasename.tablename it can also be used for an external url (e.g. if shape files are located in postGIS and served through GEOserver) The datacatalog module checks to see if this is a URL or a table name.

# URL #

The URL for data query is:
```
your.domain.edu/data/filter/[nid]
```

This will bring up the form to enter some information for who is downloading the data and why,  displays the data access policy and then forwards the user to the query application. The query is entirely build based on the dataset metadata.