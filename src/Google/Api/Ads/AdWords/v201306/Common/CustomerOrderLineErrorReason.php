<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Enums for all the reasons an error can be thrown to the user during a CustomerOrderLine mutate
 * operation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerOrderLineErrorReason {
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
		return "CustomerOrderLineError.Reason";
	}

	public function __construct() {
	}
}