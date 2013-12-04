<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of customers that meet the selector criteria.
 *
 * @param selector The selector specifying the {@link ManagedCustomer}s to return.
 * @return List of customers identified by the selector.
 * @throws ApiException When there is at least one error with the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerServiceGet {
	/**
	 * @access public
	 * @var Selector
	 */
	public $serviceSelector;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "";
	}

	public function __construct($serviceSelector = NULL) {
		$this->serviceSelector = $serviceSelector;
	}
}