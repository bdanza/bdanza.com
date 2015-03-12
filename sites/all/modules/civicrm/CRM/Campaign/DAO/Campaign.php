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
 * Generated from xml/schema/CRM/Campaign/Campaign.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Campaign_DAO_Campaign extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_campaign';
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
  static $_log = false;
  /**
   * Unique Campaign ID.
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name of the Campaign.
   *
   * @var string
   */
  public $name;
  /**
   * Title of the Campaign.
   *
   * @var string
   */
  public $title;
  /**
   * Full description of Campaign.
   *
   * @var text
   */
  public $description;
  /**
   * Date and time that Campaign starts.
   *
   * @var datetime
   */
  public $start_date;
  /**
   * Date and time that Campaign ends.
   *
   * @var datetime
   */
  public $end_date;
  /**
   * Campaign Type ID.Implicit FK to civicrm_option_value where option_group = campaign_type
   *
   * @var int unsigned
   */
  public $campaign_type_id;
  /**
   * Campaign status ID.Implicit FK to civicrm_option_value where option_group = campaign_status
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * Unique trusted external ID (generally from a legacy app/datasource). Particularly useful for deduping operations.
   *
   * @var string
   */
  public $external_identifier;
  /**
   * Optional parent id for this Campaign.
   *
   * @var int unsigned
   */
  public $parent_id;
  /**
   * Is this Campaign enabled or disabled/cancelled?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * FK to civicrm_contact, who created this Campaign.
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time that Campaign was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * FK to civicrm_contact, who recently edited this Campaign.
   *
   * @var int unsigned
   */
  public $last_modified_id;
  /**
   * Date and time that Campaign was edited last time.
   *
   * @var datetime
   */
  public $last_modified_date;
  /**
   * General goals for Campaign.
   *
   * @var text
   */
  public $goal_general;
  /**
   * The target revenue for this campaign.
   *
   * @var float
   */
  public $goal_revenue;
  /**
   * class constructor
   *
   * @return civicrm_campaign
   */
  function __construct()
  {
    $this->__table = 'civicrm_campaign';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'parent_id', 'civicrm_campaign', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'last_modified_id', 'civicrm_contact', 'id');
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
          'title' => ts('Campaign ID') ,
          'required' => true,
          'import' => true,
          'where' => 'civicrm_campaign.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Campaign Name') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_campaign.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Campaign Title') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_campaign.title',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Campaign Description') ,
          'rows' => 8,
          'cols' => 60,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Campaign Start Date') ,
          'import' => true,
          'where' => 'civicrm_campaign.start_date',
          'headerPattern' => '/^start|(s(tart\s)?date)$/i',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Campaign End Date') ,
          'import' => true,
          'where' => 'civicrm_campaign.end_date',
          'headerPattern' => '/^end|(e(nd\s)?date)$/i',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'campaign_type_id' => array(
          'name' => 'campaign_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign Type') ,
          'import' => true,
          'where' => 'civicrm_campaign.campaign_type_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'default' => 'NULL',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'campaign_type',
          )
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign Status') ,
          'import' => true,
          'where' => 'civicrm_campaign.status_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'default' => 'NULL',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'campaign_status',
          )
        ) ,
        'external_identifier' => array(
          'name' => 'external_identifier',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Campaign External ID') ,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'import' => true,
          'where' => 'civicrm_campaign.external_identifier',
          'headerPattern' => '/external\s?id/i',
          'dataPattern' => '/^\d{11,}$/',
          'export' => true,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'parent_id' => array(
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Parent Campaign') ,
          'import' => true,
          'where' => 'civicrm_campaign.parent_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'default' => 'NULL',
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => array(
            'type' => 'Autocomplete-Select',
          ) ,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Campaign Active?') ,
          'default' => '1',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign Created By') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Campaign Created Date') ,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'last_modified_id' => array(
          'name' => 'last_modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign Modified By') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'last_modified_date' => array(
          'name' => 'last_modified_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Campaign Modified Date') ,
        ) ,
        'goal_general' => array(
          'name' => 'goal_general',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Campaign Goals') ,
          'html' => array(
            'type' => 'RichTextEditor',
          ) ,
        ) ,
        'goal_revenue' => array(
          'name' => 'goal_revenue',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Goal Revenue') ,
          'precision' => array(
            20,
            2
          ) ,
          'html' => array(
            'type' => 'Text',
          ) ,
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
        'name' => 'name',
        'title' => 'title',
        'description' => 'description',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'campaign_type_id' => 'campaign_type_id',
        'status_id' => 'status_id',
        'external_identifier' => 'external_identifier',
        'parent_id' => 'parent_id',
        'is_active' => 'is_active',
        'created_id' => 'created_id',
        'created_date' => 'created_date',
        'last_modified_id' => 'last_modified_id',
        'last_modified_date' => 'last_modified_date',
        'goal_general' => 'goal_general',
        'goal_revenue' => 'goal_revenue',
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
            self::$_import['campaign'] = & $fields[$name];
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
            self::$_export['campaign'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
