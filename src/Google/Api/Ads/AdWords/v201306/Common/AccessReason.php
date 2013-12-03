<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * AccessReason in the AccountUserListStatus table. This indicates the way the userlist is
 * related to a user.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AccessReason {
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
		return "AccessReason";
	}

	public function __construct() {
	}
}