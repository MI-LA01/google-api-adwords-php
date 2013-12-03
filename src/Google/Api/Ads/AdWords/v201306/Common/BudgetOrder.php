<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link BudgetOrder} links an account wide budget with a {@link BillingAccount}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrder {
	/**
	 * @access public
	 * @var string
	 */
	public $billingAccountId;

	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var string
	 */
	public $billingAccountName;

	/**
	 * @access public
	 * @var string
	 */
	public $poNumber;

	/**
	 * @access public
	 * @var string
	 */
	public $budgetOrderName;

	/**
	 * @access public
	 * @var string
	 */
	public $primaryBillingId;

	/**
	 * @access public
	 * @var string
	 */
	public $secondaryBillingId;

	/**
	 * @access public
	 * @var Money
	 */
	public $spendingLimit;

	/**
	 * @access public
	 * @var string
	 */
	public $startDateTime;

	/**
	 * @access public
	 * @var string
	 */
	public $endDateTime;

	/**
	 * @access public
	 * @var BudgetOrderRequest
	 */
	public $lastRequest;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/billing/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "BudgetOrder";
	}

	public function __construct($billingAccountId = NULL, $id = NULL, $billingAccountName = NULL, $poNumber = NULL, $budgetOrderName = NULL, $primaryBillingId = NULL, $secondaryBillingId = NULL, $spendingLimit = NULL, $startDateTime = NULL, $endDateTime = NULL, $lastRequest = NULL) {
		$this->billingAccountId = $billingAccountId;
		$this->id = $id;
		$this->billingAccountName = $billingAccountName;
		$this->poNumber = $poNumber;
		$this->budgetOrderName = $budgetOrderName;
		$this->primaryBillingId = $primaryBillingId;
		$this->secondaryBillingId = $secondaryBillingId;
		$this->spendingLimit = $spendingLimit;
		$this->startDateTime = $startDateTime;
		$this->endDateTime = $endDateTime;
		$this->lastRequest = $lastRequest;
	}
}