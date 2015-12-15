<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Member/MembershipBlock.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Member_DAO_MembershipBlock extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_membership_block';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Membership Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name for Membership Status
   *
   * @var string
   */
  public $entity_table;
  /**
   * FK to civicrm_contribution_page.id
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * Membership types to be exposed by this block
   *
   * @var string
   */
  public $membership_types;
  /**
   * Optional foreign key to membership_type
   *
   * @var int unsigned
   */
  public $membership_type_default;
  /**
   * Display minimum membership fee
   *
   * @var boolean
   */
  public $display_min_fee;
  /**
   * Should membership transactions be processed separately
   *
   * @var boolean
   */
  public $is_separate_payment;
  /**
   * Title to display at top of block
   *
   * @var string
   */
  public $new_title;
  /**
   * Text to display below title
   *
   * @var text
   */
  public $new_text;
  /**
   * Title for renewal
   *
   * @var string
   */
  public $renewal_title;
  /**
   * Text to display for member renewal
   *
   * @var text
   */
  public $renewal_text;
  /**
   * Is membership sign up optional
   *
   * @var boolean
   */
  public $is_required;
  /**
   * Is this membership_block enabled
   *
   * @var boolean
   */
  public $is_active;
  /**
   * class constructor
   *
   * @return civicrm_membership_block
   */
  function __construct()
  {
    $this->__table = 'civicrm_membership_block';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'entity_id', 'civicrm_contribution_page', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'membership_type_default', 'civicrm_membership_type', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Block ID') ,
          'description' => 'Membership Id',
          'required' => true,
        ) ,
        'entity_table' => array(
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block Entity Table') ,
          'description' => 'Name for Membership Status',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Block Entity ID') ,
          'description' => 'FK to civicrm_contribution_page.id',
          'required' => true,
          'FKClassName' => 'CRM_Contribute_DAO_ContributionPage',
        ) ,
        'membership_types' => array(
          'name' => 'membership_types',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block Membership Types') ,
          'description' => 'Membership types to be exposed by this block',
          'maxlength' => 1024,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'membership_type_default' => array(
          'name' => 'membership_type_default',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Block Default Type') ,
          'description' => 'Optional foreign key to membership_type',
          'FKClassName' => 'CRM_Member_DAO_MembershipType',
        ) ,
        'display_min_fee' => array(
          'name' => 'display_min_fee',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Membership Block Display Minimum Fee') ,
          'description' => 'Display minimum membership fee',
          'default' => '1',
        ) ,
        'is_separate_payment' => array(
          'name' => 'is_separate_payment',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Membership Block Is Separate Payment') ,
          'description' => 'Should membership transactions be processed separately',
          'default' => '1',
        ) ,
        'new_title' => array(
          'name' => 'new_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block New Title') ,
          'description' => 'Title to display at top of block',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'new_text' => array(
          'name' => 'new_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Membership Block New Text') ,
          'description' => 'Text to display below title',
        ) ,
        'renewal_title' => array(
          'name' => 'renewal_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block Renewal Title') ,
          'description' => 'Title for renewal',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'renewal_text' => array(
          'name' => 'renewal_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Membership Block Renewal Text') ,
          'description' => 'Text to display for member renewal',
        ) ,
        'is_required' => array(
          'name' => 'is_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Required') ,
          'description' => 'Is membership sign up optional',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active') ,
          'description' => 'Is this membership_block enabled',
          'default' => '1',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'entity_table' => 'entity_table',
        'entity_id' => 'entity_id',
        'membership_types' => 'membership_types',
        'membership_type_default' => 'membership_type_default',
        'display_min_fee' => 'display_min_fee',
        'is_separate_payment' => 'is_separate_payment',
        'new_title' => 'new_title',
        'new_text' => 'new_text',
        'renewal_title' => 'renewal_title',
        'renewal_text' => 'renewal_text',
        'is_required' => 'is_required',
        'is_active' => 'is_active',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['membership_block'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['membership_block'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
