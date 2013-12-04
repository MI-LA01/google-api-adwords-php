<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Operation for moving ManagedCustomer links. See {@link ManagedCustomerService#mutateManager}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MoveOperation extends Operation {
	/**
	 * @access public
	 * @var ManagedCustomerLink
	 */
	public $operand;

	/**
	 * @access public
	 * @var integer
	 */
	public $oldManagerCustomerId;

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
		return "MoveOperation";
	}

	public function __construct($operand = NULL, $oldManagerCustomerId = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->oldManagerCustomerId = $oldManagerCustomerId;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}