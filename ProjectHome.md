## Drupal Ecological Information Management System ##
Expand your Drupal instance with the custom content types and view offered here.  You will be able to manage ecological metadata and other information. The system offers Ecological Metadata Language and Biological Metadata Profile compliant metadata.

**Note** the **latest** major version of the DEIMS is available at both <a href='http://drupal.org/projects/deims'>Drupal.org</a> and also hosted at <a href='https://github.com/lter/deims'>Github</a>, where most development happens. The pages and code posted here correspond to the first major release of DEIMS, based on Drupal 6. If you are looking for Drupal 6 based DEIMS, this is your place.  Otherwise, move along to drupal or the github-based DEIMS.

### Introduction ###

We created six _Drupal_ custom content types that may assist you managing the information at your ecological research station. In addition, we use the _biblio_ drupal module to manage and relate publications. We also use the Drupal _taxonomies_ to tag and relate the content, and serve the metadata in Ecological Metadata Language and Biological Data Profile compliant XML documents.

### DEIMS customizations ###

You can use the drupal features module and install an instance in a snap, otherwise, feel free to download and explore the content types created here.

We created 6 related content types to preserve the metadata (data about scientific? data) and organize part of the information handled at a station.

  * person - allows the creation of a directory - with contact info for researchers, etc)
  * dataSet - to describe the basic information about a data set: title, abstract, etc.
  * dataFileStructure - details about a data-containing spreadsheet or rendered view
  * researchSite - details about a location where research is conducted (latitude, etc)
  * variable - details about a variable used in the research, a date, a code-set, etc.
  * researchProject - details about an umbrella research project, if any.

A number of custom _views_ that you may want to use are also posted here. We aim to write as little custom code as possible, but custom code (in the form of modules or content importers) is unavoidable. For example:

To serve EML or BDP compliant metadata, we use custom code and the views-bonus Drupal module. Some custom CCK fields were created to accommodate needs in specific content types. Parsers to ingest legacy content (metadata, publications, site information) were written when needed, but we also used _node import_ or / and _migrate_ and _tw table wizard_.

We have a laundry list of modules, and active development.  The main contrib. modules we use include CCK, views, biblio, views\_bonus\_export, geo, date, phone, email and link, however, we use many more to achieve the functionality we desire (admin\_menu, cck\_fieldgroup\_tabs, token, tabs, node\_referrer, ctools, panels, drush, features, imageApi, backup and migrate, etc)

If you want to see some instances of this work, check out these sites:
| sites| URLS |
|:-----|:-----|
|Luquillo Experimental Forest |http://luq.lternet.edu/|
|Sevilleta Wildlife Refuge  | http://sev.lternet.edu/|
|University of Michigan Biological Station| http://umbs.lsa.umich.edu/research/datasets/|

Come join the team - we are open to all and enthusiastic about the work

### Other Resource pointers ###
We have a group email list where ideas are bounced and vetted.  Those interested in vetting and learning, usually catch up with these emails fast.  Some of our members have excellent blogs. A thorough account of a project instance progress is Kyle Kwaiser (kbk) "Data Discussions" at http://mblog.lib.umich.edu/DataDiscussions/ and you will find also other tidbits in Inigo's blog (http://lno.lternet.edu/blog/6) or in this project's Wiki.

Nonetheless, your primary source to solve troubles should be your favorite search engine and ad-hoc keywords.  Drupalistas post a timely degree of info on the web (drupal.org) and you should attempt to catch on the jargon and drupalspeak.

Videos and videotutorials are also of enormous help to some of us. People at lullabot, and mustardseed media are some of the many excellent graphic resources.  Oh, you can use the phone and call us -- you know how to find a phone number, dont you?

**Peer reviewed papers** that offer an overall view of the project with some details.

  1. Case Studies of Ecological Integrative Information Systems: The Luquillo and Sevilleta Information Management Systems. Communications in Computer and Information Science, 2010, Volume 108, 18-35, DOI: 10.1007/978-3-642-16552-8\_3 http://www.springerlink.com/content/j183x10588574846/
  1. Metadata Activities in Biology - Journal of Library Metadata, Volume 10, [Issue 2](https://code.google.com/p/deims/issues/detail?id=2) & 3 April 2010 , pages 99 - 118. http://www.informaworld.com/smpp/content~content=a928352203~db=all~jumptype=rss

**Non Peer Reviewed** Articles
  1. The Drupal Ecological Information Management System (DEIMS): recent progress and upcoming challenges for a grassroots project.  http://databits.lternet.edu/fall-2011/drupal-ecological-information-management-system-deims-recent-progress-and-upcoming-challen
  1. The Drupal Ecological Information Management System (DEIMS) As A Tool For Many Tasks http://databits.lternet.edu/spring-2012/drupal-ecological-information-management-system-deims-tool-many-tasks
  1. Drupal developments in the LTER Network http://databits.lternet.edu/spring-2010/drupal-developments-lter-network
  1. Developing a Drupal "website-IMS" for Luquillo LTER while learning Drupal. http://databits.lternet.edu/spring-2010/developing-drupal-website-ims-luquillo-lter-while-learning-drupal
  1. http://databits.lternet.edu/spring-2012/organization-and-layout-lter-web-site-using-content-management-system
