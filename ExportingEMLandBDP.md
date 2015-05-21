New Drupal module -- ability to export Ecological Metadata Language compliant content

Once you installed the content types offered in this project, you may want to install two contributed modules to have the ability of exporting your metadata as Ecological Metadata Language (EML) or Biological Data Profile (BDP, a metadata profile for the biology data from the Federal Geographic Data Committee or FGDC).

Download the modules http://deims.googlecode.com/svn-history/r23/modules/eml_config.tar.gz" eml\_config" and "views\_bonus\_eml" (for BDP, download "bdp\_config" and "views\_bonus\_bdp". Install them as usual.

After installation, enable them.  Once enabled, you will have two new features:
1) Navigate to the page "eml\_config".  You can set there the content that is usually common for all EMLS ("Publisher", "Metadata Provider", etc).
2) For any dataset, now you can export a "eml" compliant XML. A Drupal view (requires the views module) has been created for you, access it at "eml\_view". When viewing a data-set type of node, you can see it in EML format by invoking this view and path
(URLBase/eml\_view/[nid](nid.md))
