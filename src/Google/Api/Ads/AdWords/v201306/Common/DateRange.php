<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DateRange {
	/**
	 * @access public
	 * @var string
	 */
	public $min;

	/**
	 * @access public
	 * @var string
	 */
	public $max;

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
		return "DateRange";
	}

	public function __construct($min = NULL, $max = NULL) {
		$this->min = $min;
		$this->max = $max;
	}
}