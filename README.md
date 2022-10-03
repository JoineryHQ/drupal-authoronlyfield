# Drupal module: Author-Only Fields
Allows site administrators to specify fields to be editable by the node author only.

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Installation
Install as normal for any Drupal 7 contributed module (see ["Installing modules"
on drupal.org](https://www.drupal.org/docs/7/extend/installing-modules)).

## Configuration and usage
After installation, navigate to _Structure_ > _Author-only Fields_. There you'll
be given a list of all field instances on all content types. Select any of those
field instances and save the form. Selected field instances will then be protected
such that only the node author will be able to edit the field.

Notes:

* This protection applies only when editing an existing node. (When creating a
  new node, the current user is, by definition, the node author.)
* If a field protected by this configuration happens to be required, that
  requirement will not be enforced when the field is protected from the current
  user. E.g., Consider a field instance "Favorite Color" on nodes of type Article,
  configured as a required field, and also protected as "Author-only" by this
  module's configuration; and consider an existing Article node which contains
  this field, created by User 2. When this node is edited by User 2, the "Favorite
  Color" field will behave normally: it is both editable and required. When the
  same node is edited by any other user, the "Favorite Color" field will be
  neither editable nor required.


## Support
![screenshot](/images/joinery-logo.png)

Joinery has developed this module for the specific need of one of our clients.
We'll happily accept bug reports and suggestions for improvement, but make no
promise of unending free support. If you require urgent or highly customized
improvements, we may suggest conducting a fee-based project under our standard
commercial terms, based on availability.

In any case, the place to start is the [github issue queue](https://github.com/JoineryHQ/drupal-authoronlyfield/issues).
Let us hear what you need and we'll be glad to help where we can.

You can learn more about Joinery's work at https://joineryhq.com/.
