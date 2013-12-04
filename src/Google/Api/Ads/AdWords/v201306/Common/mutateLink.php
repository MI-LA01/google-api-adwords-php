<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
 *
 *
 *
 * Modifies the ManagedCustomer forest. These actions are possible (categorized by
 * Operator + Link Status):
 *
 * <ul>
 * <li>ADD + PENDING:   manager extends invitations
 * <li>SET + CANCELLED: manager rescinds invitations
 * <li>SET + INACTIVE:  manager/client terminates links
 * <li>SET + ACTIVE:    client accepts invitations
 * <li>SET + REFUSED:   client declines invitations
 * </ul>
 *
 * @param operations the list of operations
 * @return results for the given operations
 * @throws ApiException with a {@link ManagedCustomerServiceError}
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class mutateLink {
	/**
	 * @access public
	 * @var LinkOperation[]
	 */
	public $operations;

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

	public function __construct($operations = NULL) {
		$this->operations = $operations;
	}
}