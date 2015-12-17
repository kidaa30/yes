<?php

class CRM_Accountsync_BAO_AccountLineItems extends CRM_Accountsync_DAO_AccountLineItems {

  /**
   * Create a new AccountLineItems based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Accountsync_DAO_AccountLineItems|NULL
   *
  public static function create($params) {
    $className = 'CRM_Accountsync_DAO_AccountLineItems';
    $entityName = 'AccountLineItems';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */
}
