<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Match type of a keyword. i.e. the way we match a keyword string with
 * search queries.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class KeywordMatchType {
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
		return "KeywordMatchType";
	}

	public function __construct() {
	}
}