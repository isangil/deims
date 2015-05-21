# DEIMS Conditional Fields #

Sometimes we need to enter information about a person in the personnel directory.  But sometimes, we need to enter information about an institution or even a position (a role, a job). All these options share many common things, such as a location (address), a phone, a fax, email, etc.  But there are ever so slightly different, that you may want to narrow the not-common fields offering through a choice of "person", "organization" or position.  Enter conditional fields.  We create a field, that allows you to pick one of these three options, and after you pick, you'll be presented with the fields relevant to your choice, that is, for a person, a "first name" and "last name", for an organization, an "organization name".

### Use of conditional fields makes forms less ambiguous, more usable. ###

## Other DEIMS Examples for Conditional Fields ##
Also, for the case of a variable -- you can decide whether is a "physical quantity", a "set of codes", a "date", or something else. Using conditional fields to offer these options, you can present the user with the relevant fields:
  * physical quantity--> units, max, min, precision
  * date --> date format, range

However, these variables share common fields unaffected by the choice of type, such as the variable name, label, description, missing values, and others.

Examples at http://deims.lternet.edu/nbiimirror and others.

A screenshot: ![http://inigo.lternet.edu/conditionalFields.jpg](http://inigo.lternet.edu/conditionalFields.jpg)

Other example.  May be your form is too cluttered with the type of "you've got to be kidding me" type of input fields.  Use a conditional field that says: Display mandatory fields?  YES/NO, and upon your choice, a crowded or just minimal form will be presented to you.

In the back end nothing changes, those fields not presented to the user will not be filled up.