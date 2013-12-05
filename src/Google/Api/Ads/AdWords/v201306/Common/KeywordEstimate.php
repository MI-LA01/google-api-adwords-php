<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the traffic estimate result for a single keyword.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class KeywordEstimate extends Estimate {
	/**
	 * @access public
	 * @var integer
	 */
	public $criterionId;

	/**
	 * @access public
	 * @var StatsEstimate
	 */
	public $min;

	/**
	 * @access public
	 * @var StatsEstimate
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
		return "KeywordEstimate";
	}

	public function __construct($criterionId = NULL, $min = NULL, $max = NULL, $EstimateType = NULL) {
		parent::__construct();
		$this->criterionId = $criterionId;
		$this->min = $min;
		$this->max = $max;
		$this->EstimateType = $EstimateType;
	}
}