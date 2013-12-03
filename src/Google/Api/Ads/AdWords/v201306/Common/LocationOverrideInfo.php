<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents override info for ad level LocationExtension overrides.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationOverrideInfo {
	/**
	 * @access public
	 * @var integer
	 */
	public $radius;

	/**
	 * @access public
	 * @var tnsLocationOverrideInfoRadiusUnits
	 */
	public $radiusUnits;

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
		return "LocationOverrideInfo";
	}

	public function __construct($radius = NULL, $radiusUnits = NULL) {
		$this->radius = $radius;
		$this->radiusUnits = $radiusUnits;
	}
}