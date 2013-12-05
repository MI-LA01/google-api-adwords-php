<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the estimate results for a single campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignEstimate extends Estimate {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var AdGroupEstimate[]
	 */
	public $adGroupEstimates;

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
		return "CampaignEstimate";
	}

	public function __construct($campaignId = NULL, $adGroupEstimates = NULL, $EstimateType = NULL) {
		parent::__construct();
		$this->campaignId = $campaignId;
		$this->adGroupEstimates = $adGroupEstimates;
		$this->EstimateType = $EstimateType;
	}
}