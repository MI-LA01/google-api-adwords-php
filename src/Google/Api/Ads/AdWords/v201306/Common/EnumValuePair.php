<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents information about enum values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class EnumValuePair {
	/**
	 * @access public
	 * @var string
	 */
	public $enumValue;

	/**
	 * @access public
	 * @var string
	 */
	public $enumDisplayValue;

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
		return "EnumValuePair";
	}

	public function __construct($enumValue = NULL, $enumDisplayValue = NULL) {
		$this->enumValue = $enumValue;
		$this->enumDisplayValue = $enumDisplayValue;
	}
}