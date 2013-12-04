<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns information about changed entities inside a customer's account.
 *
 * @param selector Specifies the filter for selecting changehistory events for a customer.
 * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
 * changed at each level.  All Campaigns that are requested in the selector will be returned,
 * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncServiceGet {
	/**
	 * @access public
	 * @var CustomerSyncSelector
	 */
	public $selector;

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
		return "";
	}

	public function __construct($selector = NULL) {
		$this->selector = $selector;
	}
}