<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * An operation on a managed customer.
 * <p class="note"><b>Note:</b> only <code>ADD</code> operator is supported.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerOperation extends Operation {
	/**
	 * @access public
	 * @var ManagedCustomer
	 */
	public $operand;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "ManagedCustomerOperation";
	}

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}