<?php

function _authoronlyfield_settings() {
  $node_field_instances = field_info_instances('node');
  $options = [];
  foreach ($node_field_instances as $entity_type => $instances) {
    $node_type_name = node_type_get_name($entity_type);
    foreach ($instances as $instance) {
      $options[$instance['id']] = $node_type_name . '::' . $instance['label'];
    }
  }
  $form = [];
  $form['authoronlyfield_field_instances'] = array(
    '#type' => 'checkboxes',
    '#options' => $options,
    '#title' => t('Author-only field instances'),
    '#default_value' => variable_get('authoronlyfield_field_instances', []),
    '#description' => t('Field instances selected here will be removed on node-edit forms by users other than the node author.'),
  );
  return system_settings_form($form);
}