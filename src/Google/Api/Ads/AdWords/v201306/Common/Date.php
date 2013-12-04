<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a date.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Date {
	/**
	 * @access public
	 * @var integer
	 */
	public $year;

	/**
	 * @access public
	 * @var integer
	 */
	public $month;

	/**
	 * @access public
	 * @var integer
	 */
	public $day;

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
		return "Date";
	}

	public function __construct($year = NULL, $month = NULL, $day = NULL) {
		$this->year = $year;
		$this->month = $month;
		$this->day = $day;
	}
}