<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an operation on an {@link AdParam}. The supported operators
 * are {@code SET} and {@code REMOVE}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdParamOperation extends Operation {
	/**
	 * @access public
	 * @var AdParam
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
		return "AdParamOperation";
	}

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}