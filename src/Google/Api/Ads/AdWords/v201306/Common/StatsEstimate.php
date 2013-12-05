<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a set of stats for a traffic estimate.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class StatsEstimate {
	/**
	 * @access public
	 * @var Money
	 */
	public $averageCpc;

	/**
	 * @access public
	 * @var double
	 */
	public $averagePosition;

	/**
	 * @access public
	 * @var double
	 */
	public $clicksPerDay;

	/**
	 * @access public
	 * @var double
	 */
	public $impressionsPerDay;

	/**
	 * @access public
	 * @var double
	 */
	public $clickThroughRate;

	/**
	 * @access public
	 * @var Money
	 */
	public $totalCost;

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
		return "StatsEstimate";
	}

	public function __construct($averageCpc = NULL, $averagePosition = NULL, $clicksPerDay = NULL, $impressionsPerDay = NULL, $clickThroughRate = NULL, $totalCost = NULL) {
		$this->averageCpc = $averageCpc;
		$this->averagePosition = $averagePosition;
		$this->clicksPerDay = $clicksPerDay;
		$this->impressionsPerDay = $impressionsPerDay;
		$this->clickThroughRate = $clickThroughRate;
		$this->totalCost = $totalCost;
	}
}