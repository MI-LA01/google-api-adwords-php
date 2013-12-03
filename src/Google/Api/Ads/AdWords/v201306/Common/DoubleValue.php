<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * Number value type for constructing double valued ranges.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DoubleValue extends NumberValue {
	/**
	 * @access public
	 * @var double
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
		return "DoubleValue";
	}

	public function __construct($number = NULL, $ComparableValueType = NULL) {
		parent::__construct();
		$this->number = $number;
		$this->ComparableValueType = $ComparableValueType;
	}
}
