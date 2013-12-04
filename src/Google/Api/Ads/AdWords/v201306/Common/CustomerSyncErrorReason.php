<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The request attempted to access a campaign that either does not
 * exist or belongs to a different account.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncErrorReason {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/ch/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "CustomerSyncError.Reason";
	}

	public function __construct() {
	}
}