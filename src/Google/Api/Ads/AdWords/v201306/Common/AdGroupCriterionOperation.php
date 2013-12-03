<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Operation (add, remove and set) on adgroup criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupCriterionOperation extends Operation {
	/**
	 * @access public
	 * @var AdGroupCriterion
	 */
	public $operand;

	/**
	 * @access public
	 * @var ExemptionRequest[]
	 */
	public $exemptionRequests;

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
		return "AdGroupCriterionOperation";
	}

	public function __construct($operand = NULL, $exemptionRequests = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->exemptionRequests = $exemptionRequests;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}