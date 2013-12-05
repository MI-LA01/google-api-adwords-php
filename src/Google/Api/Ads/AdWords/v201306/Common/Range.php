<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a range of values that has either an upper or a lower bound.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Range {
	/**
	 * @access public
	 * @var ComparableValue
	 */
	public $min;

	/**
	 * @access public
	 * @var ComparableValue
	 */
	public $max;

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
		return "Range";
	}

	public function __construct($min = NULL, $max = NULL) {
		$this->min = $min;
		$this->max = $max;
	}
}