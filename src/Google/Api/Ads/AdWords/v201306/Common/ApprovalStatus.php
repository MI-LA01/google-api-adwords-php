<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * Approval status for the criterion.
 * Note: there are more states involved but we only expose two to users.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApprovalStatus {
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
		return "ApprovalStatus";
	}

	public function __construct() {
	}
}