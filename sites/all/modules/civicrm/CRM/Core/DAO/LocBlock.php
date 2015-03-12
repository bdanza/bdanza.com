<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
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
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Core/LocBlock.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_LocBlock extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_loc_block';
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
   * Unique ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   *
   * @var int unsigned
   */
  public $address_id;
  /**
   *
   * @var int unsigned
   */
  public $email_id;
  /**
   *
   * @var int unsigned
   */
  public $phone_id;
  /**
   *
   * @var int unsigned
   */
  public $im_id;
  /**
   *
   * @var int unsigned
   */
  public $address_2_id;
  /**
   *
   * @var int unsigned
   */
  public $email_2_id;
  /**
   *
   * @var int unsigned
   */
  public $phone_2_id;
  /**
   *
   * @var int unsigned
   */
  public $im_2_id;
  /**
   * class constructor
   *
   * @return civicrm_loc_block
   */
  function __construct()
  {
    $this->__table = 'civicrm_loc_block';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'address_id', 'civicrm_address', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'email_id', 'civicrm_email', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'phone_id', 'civicrm_phone', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'im_id', 'civicrm_im', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'address_2_id', 'civicrm_address', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'email_2_id', 'civicrm_email', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'phone_2_id', 'civicrm_phone', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'im_2_id', 'civicrm_im', 'id');
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
          'title' => ts('Location Block ID') ,
          'required' => true,
        ) ,
        'address_id' => array(
          'name' => 'address_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Block Address') ,
          'FKClassName' => 'CRM_Core_DAO_Address',
        ) ,
        'email_id' => array(
          'name' => 'email_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Block Email') ,
          'FKClassName' => 'CRM_Core_DAO_Email',
        ) ,
        'phone_id' => array(
          'name' => 'phone_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Block Phone') ,
          'FKClassName' => 'CRM_Core_DAO_Phone',
        ) ,
        'im_id' => array(
          'name' => 'im_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Block IM') ,
          'FKClassName' => 'CRM_Core_DAO_IM',
        ) ,
        'address_2_id' => array(
          'name' => 'address_2_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Location Block IM 2') ,
          'FKClassName' => 'CRM_Core_DAO_Address',
        ) ,
        'email_2_id' => array(
          'name' => 'email_2_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Email 2') ,
          'FKClassName' => 'CRM_Core_DAO_Email',
        ) ,
        'phone_2_id' => array(
          'name' => 'phone_2_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Phone 2') ,
          'FKClassName' => 'CRM_Core_DAO_Phone',
        ) ,
        'im_2_id' => array(
          'name' => 'im_2_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Instant Messenger 2') ,
          'FKClassName' => 'CRM_Core_DAO_IM',
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
        'address_id' => 'address_id',
        'email_id' => 'email_id',
        'phone_id' => 'phone_id',
        'im_id' => 'im_id',
        'address_2_id' => 'address_2_id',
        'email_2_id' => 'email_2_id',
        'phone_2_id' => 'phone_2_id',
        'im_2_id' => 'im_2_id',
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
    return self::$_tableName;
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
            self::$_import['loc_block'] = & $fields[$name];
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
            self::$_export['loc_block'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
