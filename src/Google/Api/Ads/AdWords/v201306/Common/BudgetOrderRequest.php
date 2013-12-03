<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Holds fields that provide information on the last set of values that were passed in through
 * the parent BudgetOrder for mutate.add and mutate.set.
 * <span class="constraint Billing">This element only applies if manager account is whitelisted for new billing backend.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrderRequest {
	/**
	 * @access public
	 * @var tnsBudgetOrderRequestStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var string
	 */
	public $date;

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
		return "BudgetOrderRequest";
	}

	public function __construct($status = NULL, $date = NULL, $billingAccountName = NULL, $poNumber = NULL, $budgetOrderName = NULL, $spendingLimit = NULL, $startDateTime = NULL, $endDateTime = NULL) {
		$this->status = $status;
		$this->date = $date;
		$this->billingAccountName = $billingAccountName;
		$this->poNumber = $poNumber;
		$this->budgetOrderName = $budgetOrderName;
		$this->spendingLimit = $spendingLimit;
		$this->startDateTime = $startDateTime;
		$this->endDateTime = $endDateTime;
	}
}