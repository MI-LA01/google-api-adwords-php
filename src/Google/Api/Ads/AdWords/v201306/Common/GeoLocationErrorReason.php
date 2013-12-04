<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The reasons for the geolocation errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class GeoLocationErrorReason {
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
		return "GeoLocationError.Reason";
	}

	public function __construct() {
	}
}