# The road ahead, proposed enhancements #

## What we propose to make better ##

> Here is a small list of changes we propose to make the DEIMS experience more rewarding
### Usability ###
  * Add _Conditional Fields_
    * WHY: Simplifies form (uncluttered) for easy, more intuitive navigation.
    * HOW: Uses http://drupal.org/project/conditional_fields "conditional\_fields" contrib module
    * STATUS: The module is mature, and usage is quite easy, we tested in many sites. See examples [usingConditionalFields](usingConditionalFields.md) .
  * Add code-code definition CCK module -- break that field in pairs.
    * WHY: Now forces user to use the "=" sign to separate the code from the definition, we want to make it less hackish, provide a placeholder for each piece, yet group the values together
    * HOW: Custom module. I used this tutorial at http://poplarware.com/articles/cck_field_module. See also lullabot at http://www.lullabot.com/articles/creating-custom-cck-fields or other tutorials, google "compound CCK fields"
    * STATUS: We used the module in a FGDC/BDP site, and it is easy to install and use.  There is some issue accessing the fields thorough views bonus we hope to solve soon. More info here [compoundCCKfields](compoundCCKfields.md)
  * Modal Editor integration -- add pop-up forms.
    * WHY: enable editing related content types without leaving the current forms.
    * HOW: See API and related modules at: http://drupal.org/project/modalframe. Important, certain combination work, see Kyle's and other notes.
    * STATUS: tested successfully in several sites. Read more about this work here [modalFrame](modalFrame.md)
  * Improve documentation
    * WHY: Even though all this is well documented a google search away, we can always create core customized documentation for our DEIMS profile
    * HOW: Videos/screen captures, pages, diagrams, ppts and others.
    * STATUS: in progress, but in need of a systematic approach.
  * Improve packaging
    * WHY: make it easier to deploy new improvements, or the whole package
    * HOW: through a hire. Using contrib module "features" http://drupal.org/project/features
    * STATUS: Tested successfully with ORNL team.
### Back end changes, improvements ###
  * From _geo_ to _openlayers_
    * WHY: an enhancement via public API, more possibilities, used more widely
    * HOW: Change "geo" module to "openlayers" module.
    * STATUS: Already tested succesfully in other sites.
  * Move node-reference from parent content type to child content type
    * WHY: It cleans the back end, and makes some views more intuitive
    * HOW: Add a node reference in child content type, take out node reference in parent content type. Custom script to migrate content.
    * STATUS: Tired on Kristin site, being tested.
  * Integrate Unit Dictionary
    * WHY: We need a solution for the "units" problem.
    * HOW: We use (again) the REST service at http://unit.lternet.edu and perhaps use or extend based on the units API contributed module (and related modules) at http://drupal.org/project/unitsapi
    * STATUS: Proposed.
  * Feeds integration
    * WHY: A need to import content automatically, specially from EML.
    * HOW: Using http://drupal.org/project/feeds, and related contrib modules, towards consuming actual data and EML
    * STATUS: Tested succesfully on the extended BDP work (100+ cck fields, 12 content types)
  * _Scratchpads_ species list (taxonomic coverage and pages)
    * WHY: Need solution for managing "taxa" (species).
    * HOW: Use "_Scratchpads_" custom modules.
    * STATUS: Tested, but results need to be explained (this is more than you imagine)

## In conclusion.. ##
This is a moving list, open to discussion. Send emails to the mailing list "deims - AT - googlegroups.com" to contribute, or communicate.