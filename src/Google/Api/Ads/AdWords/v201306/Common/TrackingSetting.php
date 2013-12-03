<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Campaign level settings for tracking information.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TrackingSetting extends Setting {
	/**
	 * @access public
	 * @var string
	 */
	public $trackingUrl;

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
		return "TrackingSetting";
	}

	public function __construct($trackingUrl = NULL, $SettingType = NULL) {
		parent::__construct();
		$this->trackingUrl = $trackingUrl;
		$this->SettingType = $SettingType;
	}
}