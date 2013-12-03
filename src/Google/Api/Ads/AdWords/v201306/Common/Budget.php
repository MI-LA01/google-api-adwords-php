<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Budgets are used for managing the amount of money spent on AdWords.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Budget {
	/**
	 * @access public
	 * @var integer
	 */
	public $budgetId;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsBudgetBudgetPeriod
	 */
	public $period;

	/**
	 * @access public
	 * @var Money
	 */
	public $amount;

	/**
	 * @access public
	 * @var tnsBudgetBudgetDeliveryMethod
	 */
	public $deliveryMethod;

	/**
	 * @access public
	 * @var integer
	 */
	public $referenceCount;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isExplicitlyShared;

	/**
	 * @access public
	 * @var tnsBudgetBudgetStatus
	 */
	public $status;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/cm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "Budget";
	}

	public function __construct($budgetId = NULL, $name = NULL, $period = NULL, $amount = NULL, $deliveryMethod = NULL, $referenceCount = NULL, $isExplicitlyShared = NULL, $status = NULL) {
		$this->budgetId = $budgetId;
		$this->name = $name;
		$this->period = $period;
		$this->amount = $amount;
		$this->deliveryMethod = $deliveryMethod;
		$this->referenceCount = $referenceCount;
		$this->isExplicitlyShared = $isExplicitlyShared;
		$this->status = $status;
	}
}