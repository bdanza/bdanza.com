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
 * Generated from xml/schema/CRM/Core/CustomField.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_CustomField extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_custom_field';
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
   * Unique Custom Field ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to civicrm_custom_group.
   *
   * @var int unsigned
   */
  public $custom_group_id;
  /**
   * Variable name/programmatic handle for this group.
   *
   * @var string
   */
  public $name;
  /**
   * Text for form field label (also friendly name for administering this custom property).
   *
   * @var string
   */
  public $label;
  /**
   * Controls location of data storage in extended_data table.
   *
   * @var string
   */
  public $data_type;
  /**
   * HTML types plus several built-in extended types.
   *
   * @var string
   */
  public $html_type;
  /**
   * Use form_options.is_default for field_types which use options.
   *
   * @var string
   */
  public $default_value;
  /**
   * Is a value required for this property.
   *
   * @var boolean
   */
  public $is_required;
  /**
   * Is this property searchable.
   *
   * @var boolean
   */
  public $is_searchable;
  /**
   * Is this property range searchable.
   *
   * @var boolean
   */
  public $is_search_range;
  /**
   * Controls field display order within an extended property group.
   *
   * @var int
   */
  public $weight;
  /**
   * Description and/or help text to display before this field.
   *
   * @var text
   */
  public $help_pre;
  /**
   * Description and/or help text to display after this field.
   *
   * @var text
   */
  public $help_post;
  /**
   * Optional format instructions for specific field types, like date types.
   *
   * @var string
   */
  public $mask;
  /**
   * Store collection of type-appropriate attributes, e.g. textarea  needs rows/cols attributes
   *
   * @var string
   */
  public $attributes;
  /**
   * Optional scripting attributes for field.
   *
   * @var string
   */
  public $javascript;
  /**
   * Is this property active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Is this property set by PHP Code? A code field is viewable but not editable
   *
   * @var boolean
   */
  public $is_view;
  /**
   * number of options per line for checkbox and radio
   *
   * @var int unsigned
   */
  public $options_per_line;
  /**
   * field length if alphanumeric
   *
   * @var int unsigned
   */
  public $text_length;
  /**
   * Date may be up to start_date_years years prior to the current date.
   *
   * @var int
   */
  public $start_date_years;
  /**
   * Date may be up to end_date_years years after the current date.
   *
   * @var int
   */
  public $end_date_years;
  /**
   * date format for custom date
   *
   * @var string
   */
  public $date_format;
  /**
   * time format for custom date
   *
   * @var int unsigned
   */
  public $time_format;
  /**
   *  Number of columns in Note Field
   *
   * @var int unsigned
   */
  public $note_columns;
  /**
   *  Number of rows in Note Field
   *
   * @var int unsigned
   */
  public $note_rows;
  /**
   * Name of the column that holds the values for this field.
   *
   * @var string
   */
  public $column_name;
  /**
   * For elements with options, the option group id that is used
   *
   * @var int unsigned
   */
  public $option_group_id;
  /**
   * Stores Contact Get API params contact reference custom fields. May be used for other filters in the future.
   *
   * @var string
   */
  public $filter;
  /**
   * Should the multi-record custom field values be displayed in tab table listing
   *
   * @var boolean
   */
  public $in_selector;
  /**
   * class constructor
   *
   * @return civicrm_custom_field
   */
  function __construct()
  {
    $this->__table = 'civicrm_custom_field';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'custom_group_id', 'civicrm_custom_group', 'id');
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
          'title' => ts('Custom Field ID') ,
          'description' => 'Unique Custom Field ID',
          'required' => true,
        ) ,
        'custom_group_id' => array(
          'name' => 'custom_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Custom Group') ,
          'description' => 'FK to civicrm_custom_group.',
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_CustomGroup',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_custom_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Name') ,
          'description' => 'Variable name/programmatic handle for this group.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Label') ,
          'description' => 'Text for form field label (also friendly name for administering this custom property).',
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'data_type' => array(
          'name' => 'data_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Data Type') ,
          'description' => 'Controls location of data storage in extended_data table.',
          'required' => true,
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_BAO_CustomField::dataType',
          )
        ) ,
        'html_type' => array(
          'name' => 'html_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field HTML Type') ,
          'description' => 'HTML types plus several built-in extended types.',
          'required' => true,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::customHtmlType',
          )
        ) ,
        'default_value' => array(
          'name' => 'default_value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Default') ,
          'description' => 'Use form_options.is_default for field_types which use options.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'is_required' => array(
          'name' => 'is_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Custom Field Is Required?') ,
          'description' => 'Is a value required for this property.',
        ) ,
        'is_searchable' => array(
          'name' => 'is_searchable',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Allow Searching on Field?') ,
          'description' => 'Is this property searchable.',
        ) ,
        'is_search_range' => array(
          'name' => 'is_search_range',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Search as a Range') ,
          'description' => 'Is this property range searchable.',
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Controls field display order within an extended property group.',
          'required' => true,
          'default' => '1',
        ) ,
        'help_pre' => array(
          'name' => 'help_pre',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Custom Field Pre Text') ,
          'description' => 'Description and/or help text to display before this field.',
        ) ,
        'help_post' => array(
          'name' => 'help_post',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Custom Field Post Text') ,
          'description' => 'Description and/or help text to display after this field.',
        ) ,
        'mask' => array(
          'name' => 'mask',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Formatting') ,
          'description' => 'Optional format instructions for specific field types, like date types.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'attributes' => array(
          'name' => 'attributes',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Attributes') ,
          'description' => 'Store collection of type-appropriate attributes, e.g. textarea  needs rows/cols attributes',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'javascript' => array(
          'name' => 'javascript',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Field Javascript') ,
          'description' => 'Optional scripting attributes for field.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Custom Field Is Active?') ,
          'description' => 'Is this property active?',
        ) ,
        'is_view' => array(
          'name' => 'is_view',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Field is Viewable') ,
          'description' => 'Is this property set by PHP Code? A code field is viewable but not editable',
        ) ,
        'options_per_line' => array(
          'name' => 'options_per_line',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Options Per Line') ,
          'description' => 'number of options per line for checkbox and radio',
        ) ,
        'text_length' => array(
          'name' => 'text_length',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Length') ,
          'description' => 'field length if alphanumeric',
        ) ,
        'start_date_years' => array(
          'name' => 'start_date_years',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Start Date') ,
          'description' => 'Date may be up to start_date_years years prior to the current date.',
        ) ,
        'end_date_years' => array(
          'name' => 'end_date_years',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field End Date') ,
          'description' => 'Date may be up to end_date_years years after the current date.',
        ) ,
        'date_format' => array(
          'name' => 'date_format',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Field Data Format') ,
          'description' => 'date format for custom date',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'time_format' => array(
          'name' => 'time_format',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Time Format') ,
          'description' => 'time format for custom date',
        ) ,
        'note_columns' => array(
          'name' => 'note_columns',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Note Columns') ,
          'description' => ' Number of columns in Note Field ',
        ) ,
        'note_rows' => array(
          'name' => 'note_rows',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Note Rows') ,
          'description' => ' Number of rows in Note Field ',
        ) ,
        'column_name' => array(
          'name' => 'column_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Field Column Name') ,
          'description' => 'Name of the column that holds the values for this field.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'option_group_id' => array(
          'name' => 'option_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Field Option Group') ,
          'description' => 'For elements with options, the option group id that is used',
        ) ,
        'filter' => array(
          'name' => 'filter',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Field Filter') ,
          'description' => 'Stores Contact Get API params contact reference custom fields. May be used for other filters in the future.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'in_selector' => array(
          'name' => 'in_selector',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Field Display') ,
          'description' => 'Should the multi-record custom field values be displayed in tab table listing',
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
        'custom_group_id' => 'custom_group_id',
        'name' => 'name',
        'label' => 'label',
        'data_type' => 'data_type',
        'html_type' => 'html_type',
        'default_value' => 'default_value',
        'is_required' => 'is_required',
        'is_searchable' => 'is_searchable',
        'is_search_range' => 'is_search_range',
        'weight' => 'weight',
        'help_pre' => 'help_pre',
        'help_post' => 'help_post',
        'mask' => 'mask',
        'attributes' => 'attributes',
        'javascript' => 'javascript',
        'is_active' => 'is_active',
        'is_view' => 'is_view',
        'options_per_line' => 'options_per_line',
        'text_length' => 'text_length',
        'start_date_years' => 'start_date_years',
        'end_date_years' => 'end_date_years',
        'date_format' => 'date_format',
        'time_format' => 'time_format',
        'note_columns' => 'note_columns',
        'note_rows' => 'note_rows',
        'column_name' => 'column_name',
        'option_group_id' => 'option_group_id',
        'filter' => 'filter',
        'in_selector' => 'in_selector',
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
            self::$_import['custom_field'] = & $fields[$name];
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
            self::$_export['custom_field'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
