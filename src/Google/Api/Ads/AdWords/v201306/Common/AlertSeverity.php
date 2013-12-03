<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Severity of an alert, represented as a "color".
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AlertSeverity {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "AlertSeverity";
	}

	public function __construct() {
	}
}