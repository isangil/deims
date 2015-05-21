# DEIMS compound CCK fields #

What do we mean by "compound fields"?  This is a group of fields that are group together.  Think of a pair of fields, like a code and its definition.  For pairs of code and its definitions, we currently have a simple input field that we ask to be filled out separating the code from its definition with an equal sign. Like this

Sep=September

Instead, it would be nice to have two separate fields, one for the code and one for the definition, HOWEVER, we want those grouped together. In Drupal, we can configure a CCK field as with "unlimited" occurrences. This configuration translates into a form that shows by default two instances of the field with a button below that reads "Add another item".  If you click in the button, then you get another field, and so on.  With a compound field (like a code and code-definition paired up), each time you hit the "Add another item", you get a pair of fields, in our case, another code and a code-definition field.

### Compound fields are a good usability solution ###

For examples, see this site http://deims.lternet.edu/nbiimirror

See this screenshot ![http://inigo.lternet.edu/compoundFields.jpg](http://inigo.lternet.edu/compoundFields.jpg)