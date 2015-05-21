# How-to enable pop-ups with DEIMS (D6) #

## Motivation ##
Have you tried using the autocomplete in a form (say, searching for a the owner of a data set)?
Things get frustrating if the item (person in this case) is nowhere to be found.
Having a "Create new (person)node" link right below the node reference field would help.  And more if this is a pop-up that does not force to drive away from the current form.
## Why this? ##
Having gone through the exercise of installing the modules, etc, to create the desired functionality three times, and always having to relearn the how-to, I decided to write down a precise sequence of steps to enable pop-ups in node reference fields forms.

## Pre-requisites, dependencies, context ##
This all refers to the Drupal 6 context.
I assume you have a non-vanilla Drupal install, with cck and views at the very least - and I assume of course you know how to install modules, and enable, troubleshoot a bit things.
  * download and install the 6.x-2.0-alpha1 (2010-Apr-23) version of the module **jquery\_update**. This module readies drupal to use the jquery lib 1.7.3 and above
  * download and install (or upgrade) the 6.x-1.4 version of the **jquery\_ui** module.  Also, download the library jquery-ui-1.7.3, find it using google.  Unzip under the module folder jquery\_ui (sites/all/modules/jquery\_ui/). Rename the module jquery-ui-1.7.3 to **jquery.ui**, so you have a sites/all/modules/jquery\_ui/jquery.ui/ folder.
  * download and enable the dev version of **modalframe** ( 6.x-1.x-dev )
  * download and enable the dev version of **tabs** and **cck\_fieldgroup\_tabs** (if you use tabs in your cck heavy forms). these are also  6.x-1.x-dev.
  * download and enable the dev version of **automodal** ( 6.x-1.x-dev )
  * download and enable the dev version of **modal\_noderef** ( 6.x-1.x-dev )

## To enable the pop-up or modal editor ##
Remember, what we want is to make a link under a node reference field that will invoke a pop-up for the referenced content type form

For this, we need to edit each nodereference field where we want this feature.  edit content type, manage fields, then configure the node reference field. At the very end of the configuration form, you should see a checkbox with a "Show modal Editor".  Check it, save the change. If all goes well, you are done. Test it by clicking the "create content", that contains the node reference. You should see the mention "Create new [cct name here" link under the form.  If you dont, something has gone wrong.  And this is tricky....