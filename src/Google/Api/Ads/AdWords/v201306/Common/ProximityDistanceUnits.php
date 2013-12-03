<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The radius distance is expressed in either kilometers or miles.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ProximityDistanceUnits {
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
		return "Proximity.DistanceUnits";
	}

	public function __construct() {
	}
}