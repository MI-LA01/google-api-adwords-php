<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Bidding strategy is available for enhanced campaign only.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BiddingErrorsReason {
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
		return "BiddingErrors.Reason";
	}

	public function __construct() {
	}
}