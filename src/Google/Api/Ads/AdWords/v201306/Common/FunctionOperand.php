<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A function operand in a matching function.
 * Used to represent nested functions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FunctionOperand extends FunctionArgumentOperand {
	/**
	 * @access public
	 * @var Function
	 */
	public $value;

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
		return "FunctionOperand";
	}

	public function __construct($value = NULL, $FunctionArgumentOperandType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
	}
}