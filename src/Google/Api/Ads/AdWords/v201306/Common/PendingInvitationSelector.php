<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Selector for getPendingInvitations method.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PendingInvitationSelector {
	/**
	 * @access public
	 * @var integer[]
	 */
	public $managerCustomerIds;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $clientCustomerIds;

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
		return "PendingInvitationSelector";
	}

	public function __construct($managerCustomerIds = NULL, $clientCustomerIds = NULL) {
		$this->managerCustomerIds = $managerCustomerIds;
		$this->clientCustomerIds = $clientCustomerIds;
	}
}