<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Operation for modifying ManagedCustomer links. See {@link ManagedCustomerService#mutateLink}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LinkOperation extends Operation {
	/**
	 * @access public
	 * @var ManagedCustomerLink
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
		return "LinkOperation";
	}

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}