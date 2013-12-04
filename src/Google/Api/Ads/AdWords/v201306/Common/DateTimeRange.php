<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Indicates that this instance is a subtype of ApiError.
 * Although this field is returned in the response, it is ignored on input
 * and cannot be selected. Specify xsi:type instead.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DateTimeRange {
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
		return "DateTimeRange";
	}

	public function __construct($min = NULL, $max = NULL) {
		$this->min = $min;
		$this->max = $max;
	}
}