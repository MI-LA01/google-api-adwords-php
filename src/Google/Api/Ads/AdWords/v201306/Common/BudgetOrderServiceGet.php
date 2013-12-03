<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Gets a list of {@link BudgetOrder}s using the generic selector.
 * @param serviceSelector specifies which BudgetOrder to return.
 * @return A {@link BudgetOrderPage} of BudgetOrders of the client customer.
 * All BudgetOrder fields are returned. Stats are not yet supported.
 * @throws ApiException
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrderServiceGet {
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
		return "https://adwords.google.com/api/adwords/billing/v201306";
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