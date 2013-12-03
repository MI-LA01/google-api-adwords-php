<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Limits at various levels of the account.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class EntityCountLimitExceededReason {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/cm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "EntityCountLimitExceeded.Reason";
	}

	public function __construct() {
	}
}