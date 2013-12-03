<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * CampaignAdExtension service operation. <b>Note:</b> The {@code SET} operator
 * is not supported.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignAdExtensionOperation extends Operation {
	/**
	 * @access public
	 * @var CampaignAdExtension
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
		return "CampaignAdExtensionOperation";
	}

	public function __construct($operand = NULL, $operator = NULL, $OperationType = NULL) {
		parent::__construct();
		$this->operand = $operand;
		$this->operator = $operator;
		$this->OperationType = $OperationType;
	}
}