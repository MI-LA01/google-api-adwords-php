<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Number value type for constructing long valued ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LongValue extends NumberValue {
	/**
	 * @access public
	 * @var integer
	 */
	public $number;

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
		return "LongValue";
	}

	public function __construct($number = NULL, $ComparableValueType = NULL) {
		parent::__construct();
		$this->number = $number;
		$this->ComparableValueType = $ComparableValueType;
	}
}