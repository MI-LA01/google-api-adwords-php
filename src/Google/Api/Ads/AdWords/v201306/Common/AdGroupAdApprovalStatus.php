<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the possible approval statuses.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupAdApprovalStatus {
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
		return "AdGroupAd.ApprovalStatus";
	}

	public function __construct() {
	}
}