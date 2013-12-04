<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Status of the conversion tracker. The user cannot ADD or SET the
 * status to {@code HIDDEN}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ConversionTrackerStatus {
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
		return "ConversionTracker.Status";
	}

	public function __construct() {
	}
}