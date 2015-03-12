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
 * Generated from xml/schema/CRM/Event/ParticipantStatusType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Event_DAO_ParticipantStatusType extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_participant_status_type';
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
   * unique participant status type id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * non-localized name of the status type
   *
   * @var string
   */
  public $name;
  /**
   * localized label for display of this status type
   *
   * @var string
   */
  public $label;
  /**
   * the general group of status type this one belongs to
   *
   * @var string
   */
  public $class;
  /**
   * whether this is a status type required by the system
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * whether this status type is active
   *
   * @var boolean
   */
  public $is_active;
  /**
   * whether this status type is counted against event size limit
   *
   * @var boolean
   */
  public $is_counted;
  /**
   * controls sort order
   *
   * @var int unsigned
   */
  public $weight;
  /**
   * whether the status type is visible to the public, an implicit foreign key to option_value.value related to the `visibility` option_group
   *
   * @var int unsigned
   */
  public $visibility_id;
  /**
   * class constructor
   *
   * @return civicrm_participant_status_type
   */
  function __construct()
  {
    $this->__table = 'civicrm_participant_status_type';
    parent::__construct();
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
          'title' => ts('Participant Status Type ID') ,
          'required' => true,
        ) ,
        'participant_status' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participant Status') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'import' => true,
          'where' => 'civicrm_participant_status_type.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participant Status Label') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'class' => array(
          'name' => 'class',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participant Status Class') ,
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Event_PseudoConstant::participantStatusClassOptions',
          )
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Participant Status Is Reserved?>') ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Participant Status is Active') ,
          'default' => '1',
        ) ,
        'is_counted' => array(
          'name' => 'is_counted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Participant Status Counts?') ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'required' => true,
        ) ,
        'visibility_id' => array(
          'name' => 'visibility_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Participant Status Visibility') ,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'visibility',
          )
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
        'name' => 'participant_status',
        'label' => 'label',
        'class' => 'class',
        'is_reserved' => 'is_reserved',
        'is_active' => 'is_active',
        'is_counted' => 'is_counted',
        'weight' => 'weight',
        'visibility_id' => 'visibility_id',
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
            self::$_import['participant_status_type'] = & $fields[$name];
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
            self::$_export['participant_status_type'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
