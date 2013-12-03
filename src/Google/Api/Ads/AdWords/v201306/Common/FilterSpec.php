<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Describes how a result set of alerts should be filtered based on the triggering account's
 * ability to manage clients.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FilterSpec {
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
		return "FilterSpec";
	}

	public function __construct() {
	}
}