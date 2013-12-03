<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Minutes in an hour.  Currently only 0, 15, 30, and 45 are supported
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MinuteOfHour {
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
		return "MinuteOfHour";
	}

	public function __construct() {
	}
}