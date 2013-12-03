<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Indicates where bidding strategy came from: campaign, adgroup or criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BiddingStrategySource {
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
		return "BiddingStrategySource";
	}

	public function __construct() {
	}
}