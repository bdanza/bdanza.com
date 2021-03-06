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
 * Generated from xml/schema/CRM/Member/MembershipLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Member_DAO_MembershipLog extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_membership_log';
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
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to Membership table
   *
   * @var int unsigned
   */
  public $membership_id;
  /**
   * New status assigned to membership by this action. FK to Membership Status
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * New membership period start date
   *
   * @var date
   */
  public $start_date;
  /**
   * New membership period expiration date.
   *
   * @var date
   */
  public $end_date;
  /**
   * FK to Contact ID of person under whose credentials this data modification was made.
   *
   * @var int unsigned
   */
  public $modified_id;
  /**
   * Date this membership modification action was logged.
   *
   * @var date
   */
  public $modified_date;
  /**
   * FK to Membership Type.
   *
   * @var int unsigned
   */
  public $membership_type_id;
  /**
   * Maximum number of related memberships.
   *
   * @var int
   */
  public $max_related;
  /**
   * class constructor
   *
   * @return civicrm_membership_log
   */
  function __construct()
  {
    $this->__table = 'civicrm_membership_log';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'membership_id', 'civicrm_membership', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'status_id', 'civicrm_membership_status', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'modified_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'membership_type_id', 'civicrm_membership_type', 'id');
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
          'required' => true,
        ) ,
        'membership_id' => array(
          'name' => 'membership_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to Membership table',
          'required' => true,
          'FKClassName' => 'CRM_Member_DAO_Membership',
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Status') ,
          'description' => 'New status assigned to membership by this action. FK to Membership Status',
          'required' => true,
          'FKClassName' => 'CRM_Member_DAO_MembershipStatus',
        ) ,
        'start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Start Date') ,
          'description' => 'New membership period start date',
        ) ,
        'end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('End Date') ,
          'description' => 'New membership period expiration date.',
        ) ,
        'modified_id' => array(
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to Contact ID of person under whose credentials this data modification was made.',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'modified_date' => array(
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Membership Change Date') ,
          'description' => 'Date this membership modification action was logged.',
        ) ,
        'membership_type_id' => array(
          'name' => 'membership_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to Membership Type.',
          'FKClassName' => 'CRM_Member_DAO_MembershipType',
        ) ,
        'max_related' => array(
          'name' => 'max_related',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Max Related') ,
          'description' => 'Maximum number of related memberships.',
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
        'membership_id' => 'membership_id',
        'status_id' => 'status_id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'modified_id' => 'modified_id',
        'modified_date' => 'modified_date',
        'membership_type_id' => 'membership_type_id',
        'max_related' => 'max_related',
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
            self::$_import['membership_log'] = & $fields[$name];
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
            self::$_export['membership_log'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
