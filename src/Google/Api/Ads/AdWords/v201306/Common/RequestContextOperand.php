<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * An operand in a function referring to a value in the request context.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RequestContextOperand extends FunctionArgumentOperand {
	/**
	 * @access public
	 * @var tnsRequestContextOperandContextType
	 */
	public $contextType;

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
		return "RequestContextOperand";
	}

	public function __construct($contextType = NULL, $FunctionArgumentOperandType = NULL) {
		parent::__construct();
		$this->contextType = $contextType;
		$this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
	}
}