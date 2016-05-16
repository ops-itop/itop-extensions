/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Object copier
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

See also documentation https://wiki.combodo.com/doku.php?id=extensions:itop-object-copier

This modules allows to prefill new objects with existing object data.
From a source object, users have a new menu. Clicking on this menu opens the object creation form with some values already set.

Several usages are possible:
 * cloning: copy all the data (excepted some fields)
 * create child/parent ticket from an existing ticket
 * mutate an object, for instance turn a server into a virtual server

Configuration
-------------
See module.itop-object-copier.php for a few examples.

For any source/destination couple, you will have to define a rule:
 * source_scope: an OQL (no parameter)
 * allowed_profiles: A CSV list of profiles. If no profile is defined then anybody can see the menu
 * menu_label: Label or dictionary entry for the new menu entry. It is optional and defaults to "Clone..."
 * form_label: Label or dictionary entry for the form header. It is optional and defaults to "Cloning %1$s"
 * report_label: Label or dictionary entry for the report once the object has been created. It is optional and defaults to "Cloned from %1$s"
 * dest_class: Class of the object to create. If empty, it defaults to the class of the source object
 * preset: Series of actions to preset the object in the creation form
 * retrofit: Series of actions to retrofit some information from the created object to the source object

Localizing labels
-----------------
To localize the labels, append the language code to the setting code.
For instance, to handle french and english (english being the default), you will have to define
 * 'menu_label' and 'menu_label/FR FR'
 * 'form_label' and 'form_label/FR FR'
 * 'report_label' and 'report_label/FR FR'

The actions availables to preset or retrofit are the same.
Anyhow, the read/written objects will vary depending on the situation:
 * preset: reads the source object and writes the new object
 * retrofit: reads the new object and writes the source object


Available actions
-----------------
 * clone_scalars(): clone all scalar attributes
 * clone(att1,att2,...): clone the given attributes
 * reset(att1): reset the attribute to its default value (date -> now)
 * nullify(att1): reset the attribute to its null value
 * copy(attRead,attWrite): copy an attribute ('id' can be used here)
 * append(att,string): appends a literal to the attribute, placeholders are available (e.g. $this->name$, $current_contact_id$, $current_contact_friendlyname$, $current_date$ or $current_time$)
 * set(att,value): sets a value, placeholders are available (e.g. $this->name$ or $current_contact_id$)
 * add_to_list(attRead,attWrite,attLink,value): attRead is an external key on the read object, attWrite is a N-N link set on the written object, attLink is an attribute on the link class that will be set to <value>. 
 * apply_stimulus(stimulusCode): applies a stimulus and saves the object (which will be saved again later so that you can execute several sequences of set + apply stimulus)

Notes about strings:
- as the separator is the coma, you will have to escape comas within the action argument. Example: "append(description,blah\,blah)" will append the string "blah,blah" to the attribute description.
- newlines are allowed (only "\n")
- the character set must be utf-8

Implementation
--------------
Should you implement a new rule on a production server, it is highly recommended to follow the following process:
1) Test the OQL query for the source scope
2) Create the rule, setting the allowed profiles to Administrator so that the rule will not prevent normal users from doing their work
3) Test/fix the preset actions and menu label. As testing the preset does not alter the data, you can loop and just check that the form is preset as expected. Be aware that some web browsers cache the input status (combo boxes in FireFox) so we recommend you to restart the test from the beginning at each loop (click on the menu).
4) Test/fix the retrofit actions and the report message. At this stage, you will indeed create data and alter the source object used for testing. Do not forget to disable the notifications. Or develop the rule on a staging server.
5) Once the rule is stable enough, enlarge the scope of authorized users (parameter: allowed_profiles)


Troubleshooting
---------------
All errors are logged to the file log/error.log

The behavior from the end-user perspective is:
 * When the parameters source_scope is wrong, the rule is ignored
 * When dest_class is not a valid class, the rule is ignored
 * When source_scope/dest_class/allowed_profiles/preset/retrofit are missing, the rule is ignored
 * When the list of profiles contain wrong names, those names are simply ignored, and if all the names in the list are wrong then no one will have the menu to clone the object.
 * When a preset action is wrong (syntaxically or grammatically), the preset is stopped at that point, the form is displayed with a message explaining the issue: "An error has been encountered while presetting the object to create: <error message>. Please contact your administrator." The user can proceed with the object creation.
 * When a retrofit action is wrong, the retrofit is stopped at that point, the operation completes (object created as expected) and the report contains: "An error has been encountered while retrofitting some information back to the source object: <error message>. Please contact your administrator."
