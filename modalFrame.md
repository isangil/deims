# Using modal editing in DEIMS #

Here is why.  You are editing a new data set. You are entering the abstract, the title of the data set, the owner (PIs), the contact person, and you need to enter an associated researcher.  But he or she is not in the Drupal personnel directory, so the autocomplete function does not show a match.  Do we skip it, and enter it later, than come back to the form? do we open another browser window? No - enter modal editing mode.

Only certain combination of Drupal contributed modules that leverage of the latest jQuery libraries allow for modal editing.  What is that? it enables you to enter another form without leaving the current form. In the example above, we hit the "Create another person" button below the "autocomplete" field for the "associate researcher", and we get to the new directory (person) form. When we complete the form, we save it and we are back in the original form for the data set, with the linkage to the new person already done.  Sweet

### Modal editors add usability to our forms ###

Both Kyle Kwaiser and others in the Drupal community tested these modules. Specifically, we use "modal frame API" (http://drupal.org/project/modalframe ), "automodal" (http://drupal.org/project/automodal), and "node reference modal" (http://drupal.org/project/modal_noderef), "onbeforeunload" (http://drupal.org/project/onbeforeunload ) and, of course, jQuery (http://drupal.org/project/jquery_ui) and to use the latest lib, jQuery\_update (http://drupal.org/project/jquery_update).  It is noteworthy to say that we had to use the "dev" versions of some of these modules, you need to check with us.  Also, there is some configuration that ensues to make use of these modal editors.  It is not all easy as in 1-2-3, but it pays off.

Sites using this, the nbii dev versions and Kyle's sites at Umich.  Here is a screenshot:

![http://inigo.lternet.edu/modalEditor.jpg](http://inigo.lternet.edu/modalEditor.jpg)