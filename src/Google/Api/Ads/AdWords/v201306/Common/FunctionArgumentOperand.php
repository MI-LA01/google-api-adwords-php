<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * An operand that can be used in a function expression.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FunctionArgumentOperand {
	/**
	 * @access public
	 * @var string
	 */
	public $FunctionArgumentOperandType;

	private $_parameterMap = array (
			"FunctionArgumentOperand.Type" => "FunctionArgumentOperandType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	*/
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

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
		return "FunctionArgumentOperand";
	}

	public function __construct($FunctionArgumentOperandType = NULL) {
		$this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
	}
}