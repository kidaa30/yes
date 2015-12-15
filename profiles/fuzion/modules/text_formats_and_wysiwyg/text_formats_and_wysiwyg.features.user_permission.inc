<?php
/**
 * @file
 * text_formats_and_wysiwyg.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function text_formats_and_wysiwyg_user_default_permissions() {
  $permissions = array();

  // Exported permission: use text format filtered_html
  $permissions['use text format filtered_html'] = array(
    'name' => 'use text format filtered_html',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
    ),
    'module' => 'filter',
  );

  // Exported permission: use text format full_html
  $permissions['use text format full_html'] = array(
    'name' => 'use text format full_html',
    'roles' => array(
      0 => 'CMS admin',
      1 => 'CMS editor',
      2 => 'CRM editor',
      3 => 'administrator',
      4 => 'site owner',
    ),
    'module' => 'filter',
  );

  // Exported permission: use text format rich_text
  $permissions['use text format rich_text'] = array(
    'name' => 'use text format rich_text',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
    ),
    'module' => 'filter',
  );

  // Exported permission: use text format rich_text_admin_
  $permissions['use text format rich_text_admin_'] = array(
    'name' => 'use text format rich_text_admin_',
    'roles' => array(
      0 => 'CMS admin',
      1 => 'CMS editor',
      2 => 'administrator',
      3 => 'site owner',
    ),
    'module' => 'filter',
  );

  return $permissions;
}
