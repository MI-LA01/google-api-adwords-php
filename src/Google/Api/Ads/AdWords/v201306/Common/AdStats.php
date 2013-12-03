<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents stats specific to Ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdStats extends Stats {
	/**
	 * @access public
	 * @var double
	 */
	public $percentServed;

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
		return "AdStats";
	}

	public function __construct($percentServed = NULL, $startDate = NULL, $endDate = NULL, $network = NULL, $clicks = NULL, $impressions = NULL, $cost = NULL, $averagePosition = NULL, $averageCpc = NULL, $averageCpm = NULL, $ctr = NULL, $conversions = NULL, $viewThroughConversions = NULL, $totalBudget = NULL, $StatsType = NULL) {
		parent::__construct();
		$this->percentServed = $percentServed;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->network = $network;
		$this->clicks = $clicks;
		$this->impressions = $impressions;
		$this->cost = $cost;
		$this->averagePosition = $averagePosition;
		$this->averageCpc = $averageCpc;
		$this->averageCpm = $averageCpm;
		$this->ctr = $ctr;
		$this->conversions = $conversions;
		$this->viewThroughConversions = $viewThroughConversions;
		$this->totalBudget = $totalBudget;
		$this->StatsType = $StatsType;
	}
}
