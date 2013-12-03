<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Membership status of the user list. This status indicates whether a user list
 * can accumulate more users and may be targeted to.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListMembershipStatus {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/rm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "UserListMembershipStatus";
	}

	public function __construct() {
	}
}