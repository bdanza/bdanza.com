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
 * Generated from xml/schema/CRM/Core/Country.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_Country extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_country';
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
   * Country Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Country Name
   *
   * @var string
   */
  public $name;
  /**
   * ISO Code
   *
   * @var string
   */
  public $iso_code;
  /**
   * National prefix to be used when dialing TO this country.
   *
   * @var string
   */
  public $country_code;
  /**
   * Foreign key to civicrm_address_format.id.
   *
   * @var int unsigned
   */
  public $address_format_id;
  /**
   * International direct dialing prefix from within the country TO another country
   *
   * @var string
   */
  public $idd_prefix;
  /**
   * Access prefix to call within a country to a different area
   *
   * @var string
   */
  public $ndd_prefix;
  /**
   * Foreign key to civicrm_worldregion.id.
   *
   * @var int unsigned
   */
  public $region_id;
  /**
   * Should state/province be displayed as abbreviation for contacts from this country?
   *
   * @var boolean
   */
  public $is_province_abbreviated;
  /**
   * class constructor
   *
   * @return civicrm_country
   */
  function __construct()
  {
    $this->__table = 'civicrm_country';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'address_format_id', 'civicrm_address_format', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'region_id', 'civicrm_worldregion', 'id');
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
          'title' => ts('Country ID') ,
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Country') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'import' => true,
          'where' => 'civicrm_country.name',
          'headerPattern' => '/country/i',
          'dataPattern' => '/^[A-Z][a-z]+\.?(\s+[A-Z][a-z]+){0,3}$/',
          'export' => true,
        ) ,
        'iso_code' => array(
          'name' => 'iso_code',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Country ISO Code') ,
          'maxlength' => 2,
          'size' => CRM_Utils_Type::TWO,
        ) ,
        'country_code' => array(
          'name' => 'country_code',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Country Phone Prefix') ,
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
        ) ,
        'address_format_id' => array(
          'name' => 'address_format_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Address Format') ,
          'FKClassName' => 'CRM_Core_DAO_AddressFormat',
        ) ,
        'idd_prefix' => array(
          'name' => 'idd_prefix',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Outgoing Phone Prefix') ,
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
        ) ,
        'ndd_prefix' => array(
          'name' => 'ndd_prefix',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Area Code') ,
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
        ) ,
        'region_id' => array(
          'name' => 'region_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Region') ,
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_Worldregion',
        ) ,
        'is_province_abbreviated' => array(
          'name' => 'is_province_abbreviated',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Abbreviate Province?') ,
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
        'iso_code' => 'iso_code',
        'country_code' => 'country_code',
        'address_format_id' => 'address_format_id',
        'idd_prefix' => 'idd_prefix',
        'ndd_prefix' => 'ndd_prefix',
        'region_id' => 'region_id',
        'is_province_abbreviated' => 'is_province_abbreviated',
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
            self::$_import['country'] = & $fields[$name];
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
            self::$_export['country'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
