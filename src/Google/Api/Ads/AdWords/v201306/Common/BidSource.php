<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Indicate where a criterion's bid came from: criterion or the adgroup it
 * belongs to.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BidSource {
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
		return "BidSource";
	}

	public function __construct() {
	}
}