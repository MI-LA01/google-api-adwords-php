<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Settings for Real-Time Bidding, a feature only available for campaigns
 * targeting the Ad Exchange network.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RealTimeBiddingSetting extends Setting {
	/**
	 * @access public
	 * @var boolean
	 */
	public $optIn;

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
		return "RealTimeBiddingSetting";
	}

	public function __construct($optIn = NULL, $SettingType = NULL) {
		parent::__construct();
		$this->optIn = $optIn;
		$this->SettingType = $SettingType;
	}
}