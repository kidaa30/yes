<?php

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Allows the profile to alter the site configuration form.
 */
function fuzion_form_install_configure_form_alter(&$form, $form_state) {
  // Pre-populate a few default values.
  $form['site_information']['site_name']['#default_value']    = $_SERVER['SERVER_NAME'];
  $form['site_information']['site_mail']['#default_value']    = 'admin@fuzion.co.nz';
  $form['admin_account']['account']['name']['#default_value'] = 'admin';
  $form['admin_account']['account']['mail']['#default_value'] = 'admin@fuzion.co.nz';
}
