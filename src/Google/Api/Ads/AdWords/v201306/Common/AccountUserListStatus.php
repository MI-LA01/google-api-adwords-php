<?php


namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Status in the AccountUserListStatus table. This indicates if the user list share or
 * the licensing of the userlist is still active.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AccountUserListStatus {
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
		return "AccountUserListStatus";
	}

	public function __construct() {
	}
}