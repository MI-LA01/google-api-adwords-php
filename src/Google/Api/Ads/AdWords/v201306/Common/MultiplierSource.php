<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Denotes whether the bid multiplier is derived from the adgroup
 * or the criterion
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MultiplierSource {
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
		return "MultiplierSource";
	}

	public function __construct() {
	}
}