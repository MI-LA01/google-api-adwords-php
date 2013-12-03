<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Number value types for constructing number valued ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NumberValue extends ComparableValue {
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
		return "NumberValue";
	}

	public function __construct($ComparableValueType = NULL) {
		parent::__construct();
		$this->ComparableValueType = $ComparableValueType;
	}
}