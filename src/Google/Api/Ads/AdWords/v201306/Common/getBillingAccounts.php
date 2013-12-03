<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Returns all the open/active BillingAccounts associated with the current
 * manager.
 * @return A list of {@link BillingAccount}s.
 * @throws ApiException
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class getBillingAccounts {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/billing/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "";
	}

	public function __construct() {
	}
}