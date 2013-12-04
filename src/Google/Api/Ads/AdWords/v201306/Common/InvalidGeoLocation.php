<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Invalid GeoLocation object.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class InvalidGeoLocation extends GeoLocation {
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
		return "InvalidGeoLocation";
	}

	public function __construct($geoPoint = NULL, $address = NULL, $encodedLocation = NULL, $GeoLocationType = NULL) {
		parent::__construct();
		$this->geoPoint = $geoPoint;
		$this->address = $address;
		$this->encodedLocation = $encodedLocation;
		$this->GeoLocationType = $GeoLocationType;
	}
}