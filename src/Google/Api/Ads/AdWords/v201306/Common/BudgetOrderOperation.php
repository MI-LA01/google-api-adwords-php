<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Operation for {@link BudgetOrder}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrderOperation extends Operation {
	/**
	 * @access public
	 * @var BudgetOrder
	 */
	public $operand;

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
		return "BudgetOrderOperation";
	}

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}