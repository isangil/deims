review of the scratchpads modules

The scratchpads (scratchpads.eu, and svn.scratchpads.eu) team have developed and offer 
many drupal modules mostly intended to manage species information.  Some are interesting
to us, since we need a solution to deal with the "species classifications".

Kyle did a nice review of the work, read about Kyle's take here.  In the rest of this
communication, I tell you my experiences thus far, begining with some background.

Scratchpads manages species using a tweaked version of the Drupal taxonomies(controlled vocabularies).  
Scratchpads offer modules to enhance the basic view of any taxon term.  

Upon displaying a single term, scratch pads offers a wealth of information
associated harvested from services from these providers:
-GBIF (maps of occurrences)
-Biodiversity Heritage Library (publications & checklist)
-Barcode Of Life (publications & checlists)
-Google Scholar (publications on the taxa)
-NCBI (genomic sequences for this taxa, linkouts, including ITIS)
-Morphbank Images (images of the taxa)
-National Biodiversity Network
-Wikipedia (wiki pages)
-more..

Also, scratchpads uses ad-hoc parsers to import taxonomies from a number of providers,
including the Encyclopedia of Life.  The imports can be done in two fashions, using the
Import services or the Import classifications.

The Import button allows you:
*A CSV File: allows you to import your classification from a number of different 
file formats. At least three templates for these file formats are provided on$content['type']  = array (
  'name' => 'Browse Graphics',
  'type' => 'browse_graphics',
  'description' => 'Browse graphics illustrate the data set in some way. They can illustrate methods used to collect the data, field sites, unusual specimens, etc.

* Fixed graphics should have a legend for interpreting the graphic.

* Audio and video clips can also be used as browse graphics!
',
  'title_label' => 'Browse Graphics File Name',
  'body_label' => 'Browse Graphics File Description',
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
  'old_type' => 'browse_graphics',
  'orig_type' => 'browse_graphics',
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
    'label' => 'File Type',
    'field_name' => 'field_browsegraph_filetype',
    'type' => 'text',
    'widget_type' => 'optionwidgets_select',
    'change' => 'Change basic information',
    'weight' => '-3',
    'description' => 'Pick a format type (or file extension) from the list above
',
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
    'required' => 0,
    'multiple' => '0',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'AIF | Audio Interchange File format
ASF | Advanced Streaming format
AU | Sun Audio format
AVI | Audio Video Interleave format
CGM | Computer Graphics Metafile
EPS | Encapsulated Postscript format
EMF | Enhanced Metafile format
GIF | Graphic Interchange format
JPEG | Joint Photogrphics Experts Group format
MID | Musical Digital Interface format
MOVIE | Silicon Graphics movie internet format
MP3 | Movie Picture Audio mp3 format
MPEG | Moving Picture Experts Group formats
MPGA | MPEG audio format
PBM | Portable Bit Map format
PNG | Portable Network Graphics format
PPT | Powerpoint presentation
PS | Postscript format
QT | Quicktime video format
RA | RealAudio format
RM | RealMedia format
SVG | Scalable Vector Graphic format
TIFF | Tagged Image File Format
VRML | Virtual Reality Modeling Language
WAV | Microsoft Windows Media Audio
WMV | Microsoft Windows Media Video
XWD | X-Windows Dump
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
  'body_field' => '-4',
  'revision_information' => '0',
  'author' => '-1',
  'options' => '1',
  'comment_settings' => '3',
  'menu' => '-2',
  'path' => '4',
  'attachments' => '2',
);
 the 
help section of the Scratchpad site.
*EOL import from the root term of your classification
*Excel File allows you to import your classification 
from a number of different file formats.  Templates for these file formats are 
provided on the help section of the Scratchpad site, and includes ITIS Parent/Child and 
a tabbed hierarchy
*TCS Import allows you to import a classification from a single large TCS file, 
or a TCS webservice

The Import Classification allows you to ingest classification trees.
* Manually (entering names manually)
* Import from Text file -parent child, full hierarchy, tabbed list)
* From EOL Search for highest taxonomic name of relevance: 
* Import from hosted TCS files.

Once taxonomy(ies) have been imported (whether custom, or sanctioned by ITIS, EOL, etc)
you can tag your content appropriately (whether manually using autocomplete or autotag).

Other goodies come with Scratchpads, like the Darwin Core content types and services, but 
that is another discussion.

I imported the whole Bird phylla tree (30,000+ taxons) and the whole Mammalia tree (14,000)
without a glitch (you just need patience, the rate is a taxon each 2 seconds!). The
taxon pages display info blocks from the services mentioned above, but not always. Some GBIF
maps may not match all the taxons, etc.

Technically, I have been able to deploy and test these services in a standalone machine,
(inigo.lternet.edu/spadsvan) using the jquery versions we use to deploy the modal editors 
(pop-ups), but my first attemp to integrate the DEIMS and Scratchpads modules didnt work 
out as smoothly, although Im optimistic as for what can be done.

More to come!
Inigo