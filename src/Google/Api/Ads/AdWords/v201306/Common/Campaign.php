<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Data representing an AdWords campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Campaign {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsCampaignStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var tnsServingStatus
	 */
	public $servingStatus;

	/**
	 * @access public
	 * @var string
	 */
	public $startDate;

	/**
	 * @access public
	 * @var string
	 */
	public $endDate;

	/**
	 * @access public
	 * @var Budget
	 */
	public $budget;

	/**
	 * @access public
	 * @var ConversionOptimizerEligibility
	 */
	public $conversionOptimizerEligibility;

	/**
	 * @access public
	 * @var CampaignStats
	 */
	public $campaignStats;

	/**
	 * @access public
	 * @var tnsAdServingOptimizationStatus
	 */
	public $adServingOptimizationStatus;

	/**
	 * @access public
	 * @var FrequencyCap
	 */
	public $frequencyCap;

	/**
	 * @access public
	 * @var Setting[]
	 */
	public $settings;

	/**
	 * @access public
	 * @var NetworkSetting
	 */
	public $networkSetting;

	/**
	 * @access public
	 * @var BiddingStrategyConfiguration
	 */
	public $biddingStrategyConfiguration;

	/**
	 * @access public
	 * @var String_StringMapEntry[]
	 */
	public $forwardCompatibilityMap;

	/**
	 * @access public
	 * @var boolean
	 */
	public $enhanced;

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
		return "Campaign";
	}

	public function __construct($id = NULL, $name = NULL, $status = NULL, $servingStatus = NULL, $startDate = NULL, $endDate = NULL, $budget = NULL, $conversionOptimizerEligibility = NULL, $campaignStats = NULL, $adServingOptimizationStatus = NULL, $frequencyCap = NULL, $settings = NULL, $networkSetting = NULL, $biddingStrategyConfiguration = NULL, $forwardCompatibilityMap = NULL, $enhanced = NULL) {
		$this->id = $id;
		$this->name = $name;
		$this->status = $status;
		$this->servingStatus = $servingStatus;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->budget = $budget;
		$this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
		$this->campaignStats = $campaignStats;
		$this->adServingOptimizationStatus = $adServingOptimizationStatus;
		$this->frequencyCap = $frequencyCap;
		$this->settings = $settings;
		$this->networkSetting = $networkSetting;
		$this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->enhanced = $enhanced;
	}
}