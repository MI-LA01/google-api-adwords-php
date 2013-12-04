<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a FeedItem device preference.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItemDevicePreference {
	/**
	 * @access public
	 * @var integer
	 */
	public $devicePreference;

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
		return "FeedItemDevicePreference";
	}

	public function __construct($devicePreference = NULL) {
		$this->devicePreference = $devicePreference;
	}
}