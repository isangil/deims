# Introduction #

We created six Drupal _custom content types_ that may assist you managing the information at your ecological research station.  In addition, we use the _biblio_ drupal module to manage and relate publications. We also use the Drupal _taxonomies_ to tag and relate the content, and serve the metadata in Ecological Metadata Language and Biological Data Profile compliant XML documents


# Details #

You can use the drupal features module and install an instance in a snap, otherwise, feel free to download and explore the content types created here.

We created 6 related content types to preserve the metadata (data about [scientific](scientific.md) data) and organize part of the information handled at a station.

  * **person** - allows the creation of a directory - with contact info for researchers, etc)
  * **dataSet** - to describe the basic information about a data set: title, abstract, etc.
  * **dataFileStructure** - details about a data-containing spreadsheet or rendered view
  * **researchSite** - details about a location where research is conducted (latitude, etc)
  * **variable** - details about a variable used in the research, a date, a code-set, etc.
  * **researchProject** - details about an umbrella research project, if any.

To serve EML or BDP compliant metadata, we use custom code and the views-bonus Drupal module.