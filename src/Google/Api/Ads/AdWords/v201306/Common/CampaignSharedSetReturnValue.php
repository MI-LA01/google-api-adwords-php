<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignSharedSetReturnValue extends ListReturnValue {
	/**
	 * @access public
	 * @var CampaignSharedSet[]
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
		return "CampaignSharedSetReturnValue";
	}

	public function __construct($value = NULL, $ListReturnValueType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->ListReturnValueType = $ListReturnValueType;
	}
}