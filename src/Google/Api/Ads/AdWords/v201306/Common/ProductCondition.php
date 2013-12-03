<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Conditions to filter the products defined in product feed for targeting.
 * The condition is defined as operand=argument.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ProductCondition {
	/**
	 * @access public
	 * @var string
	 */
	public $argument;

	/**
	 * @access public
	 * @var ProductConditionOperand
	 */
	public $operand;

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
		return "ProductCondition";
	}

	public function __construct($argument = NULL, $operand = NULL) {
		$this->argument = $argument;
		$this->operand = $operand;
	}
}