<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Creating and updating external remarketing user lists is not supported.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListErrorReason {
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
		return "UserListError.Reason";
	}

	public function __construct() {
	}
}