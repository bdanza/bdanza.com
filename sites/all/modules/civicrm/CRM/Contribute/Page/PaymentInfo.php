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
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 * $Id$
 *
 */
class CRM_Contribute_Page_PaymentInfo extends CRM_Core_Page {
  public function preProcess() {
    $this->_component = CRM_Utils_Request::retrieve('component', 'String', $this, TRUE);
    $this->_action = CRM_Utils_Request::retrieve('action', 'String', $this, FALSE, 'browse');
    $this->_id = CRM_Utils_Request::retrieve('id', 'Positive', $this, TRUE);
    $this->_context = CRM_Utils_Request::retrieve('context', 'String', $this, TRUE);
    $this->_cid = CRM_Utils_Request::retrieve('cid', 'String', $this, TRUE);

    $this->assign('cid', $this->_cid);
    $this->assign('id', $this->_id);
    $this->assign('context', $this->_context);
    $this->assign('component', $this->_component);
  }

  public function browse() {
    $getTrxnInfo = $this->_context == 'transaction' ? TRUE : FALSE;
    $paymentInfo = CRM_Contribute_BAO_Contribution::getPaymentInfo($this->_id, $this->_component, $getTrxnInfo, TRUE);
    if ($this->_context == 'payment_info') {
      $this->assign('paymentInfo', $paymentInfo);
    }
  }

  /**
   * This function takes care of all the things common to all
   * pages. This typically involves assigning the appropriate
   * smarty variable :)
   *
   * @return string
   *   The content generated by running this page
   */
  /**
   * @return string
   */
  public function run() {
    $this->preProcess();
    if ($this->_action) {
      $this->browse();
    }

    return parent::run();
  }

}
