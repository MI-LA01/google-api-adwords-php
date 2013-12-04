<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Sets a list of targets on a specified campaign.
 * <p class="note"><b>Note:</b> Only the <code>SET</code> operator is supported.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignTargetOperation extends Operation {
	/**
	 * @access public
	 * @var TargetList
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
		return "CampaignTargetOperation";
	}

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}