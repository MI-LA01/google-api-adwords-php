<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specification of which managed accounts a client manager is interested in.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ClientSpec {
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
		return "ClientSpec";
	}

	public function __construct() {
	}
}