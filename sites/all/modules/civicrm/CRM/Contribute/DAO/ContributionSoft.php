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
 * Generated from xml/schema/CRM/Contribute/ContributionSoft.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Contribute_DAO_ContributionSoft extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_contribution_soft';
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
   * Soft Contribution ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to contribution table.
   *
   * @var int unsigned
   */
  public $contribution_id;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * Amount of this soft contribution.
   *
   * @var float
   */
  public $amount;
  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;
  /**
   * FK to civicrm_pcp.id
   *
   * @var int unsigned
   */
  public $pcp_id;
  /**
   *
   * @var boolean
   */
  public $pcp_display_in_roll;
  /**
   *
   * @var string
   */
  public $pcp_roll_nickname;
  /**
   *
   * @var string
   */
  public $pcp_personal_note;
  /**
   * Soft Credit Type ID.Implicit FK to civicrm_option_value where option_group = soft_credit_type.
   *
   * @var int unsigned
   */
  public $soft_credit_type_id;
  /**
   * class constructor
   *
   * @return civicrm_contribution_soft
   */
  function __construct()
  {
    $this->__table = 'civicrm_contribution_soft';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'contribution_id', 'civicrm_contribution', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'pcp_id', 'civicrm_pcp', 'id');
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
        'contribution_soft_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Contribution ID') ,
          'required' => true,
          'import' => true,
          'where' => 'civicrm_contribution_soft.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'contribution_id' => array(
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Contribution - Contribution') ,
          'required' => true,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
        ) ,
        'contribution_soft_contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID') ,
          'required' => true,
          'import' => true,
          'where' => 'civicrm_contribution_soft.contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'dataPattern' => '/^\d+$/',
          'export' => true,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'amount' => array(
          'name' => 'amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Soft Contribution Amount') ,
          'required' => true,
          'precision' => array(
            20,
            2
          ) ,
          'import' => true,
          'where' => 'civicrm_contribution_soft.amount',
          'headerPattern' => '/total(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => true,
        ) ,
        'currency' => array(
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution Currency') ,
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'default' => 'NULL',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'numeric_code',
          )
        ) ,
        'pcp_id' => array(
          'name' => 'pcp_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Contribution PCP') ,
          'default' => 'NULL',
          'FKClassName' => 'CRM_PCP_DAO_PCP',
          'pseudoconstant' => array(
            'table' => 'civicrm_pcp',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'pcp_display_in_roll' => array(
          'name' => 'pcp_display_in_roll',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Soft Contribution Display on PCP') ,
        ) ,
        'pcp_roll_nickname' => array(
          'name' => 'pcp_roll_nickname',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution PCP Nickname') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
        ) ,
        'pcp_personal_note' => array(
          'name' => 'pcp_personal_note',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Soft Contribution PCP Note') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
        ) ,
        'soft_credit_type_id' => array(
          'name' => 'soft_credit_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Soft Credit Type') ,
          'default' => 'NULL',
          'pseudoconstant' => array(
            'optionGroupName' => 'soft_credit_type',
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
        'id' => 'contribution_soft_id',
        'contribution_id' => 'contribution_id',
        'contact_id' => 'contribution_soft_contact_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'pcp_id' => 'pcp_id',
        'pcp_display_in_roll' => 'pcp_display_in_roll',
        'pcp_roll_nickname' => 'pcp_roll_nickname',
        'pcp_personal_note' => 'pcp_personal_note',
        'soft_credit_type_id' => 'soft_credit_type_id',
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
            self::$_import['contribution_soft'] = & $fields[$name];
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
            self::$_export['contribution_soft'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
