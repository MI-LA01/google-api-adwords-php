<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The possible reasons for an {@link AlertError} to occur.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AlertErrorReason {
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
		return "AlertError.Reason";
	}

	public function __construct() {
	}
}