<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Encodes the reason (cause) of a particular {@link CurrencyCodeError}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CurrencyCodeErrorReason {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/o/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "CurrencyCodeError.Reason";
	}

	public function __construct() {
	}
}