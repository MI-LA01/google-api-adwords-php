<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Experiment is currently active and receiving traffic
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExperimentServingStatus {
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
		return "ExperimentServingStatus";
	}

	public function __construct() {
	}
}