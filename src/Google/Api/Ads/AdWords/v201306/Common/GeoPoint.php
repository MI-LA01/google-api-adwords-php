<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specifies a geo location with the supplied latitude/longitude.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class GeoPoint {
	/**
	 * @access public
	 * @var integer
	 */
	public $latitudeInMicroDegrees;

	/**
	 * @access public
	 * @var integer
	 */
	public $longitudeInMicroDegrees;

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
		return "GeoPoint";
	}

	public function __construct($latitudeInMicroDegrees = NULL, $longitudeInMicroDegrees = NULL) {
		$this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
		$this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
	}
}