<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Attribute for the product condition.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ProductConditionOperand {
	/**
	 * @access public
	 * @var string
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
		return "ProductConditionOperand";
	}

	public function __construct($operand = NULL) {
		$this->operand = $operand;
	}
}