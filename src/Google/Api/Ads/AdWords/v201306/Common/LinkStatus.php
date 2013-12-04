<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * These status values match the values in the ServicedAccounts.Status column.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LinkStatus {
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
		return "LinkStatus";
	}

	public function __construct() {
	}
}