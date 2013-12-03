<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents additional override info with which to augment the override
 * extension.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OverrideInfo {
	/**
	 * @access public
	 * @var LocationOverrideInfo
	 */
	public $LocationOverrideInfo;

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
		return "OverrideInfo";
	}

	public function __construct($LocationOverrideInfo = NULL) {
		$this->LocationOverrideInfo = $LocationOverrideInfo;
	}
}