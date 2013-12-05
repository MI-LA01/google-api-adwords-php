<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a campaign that will be estimated.<p>
 *
 * Returns traffic estimates for the requested set of campaigns.
 * The campaigns can be all new or all existing, or a mixture of
 * new and existing. Only existing campaigns may contain estimates for existing
 * ad groups.<p>
 *
 * For existing campaigns, the campaign and optionally the ad group will be
 * used as context to produce more accurate estimates. Traffic estimates may
 * only be requested on keywords, so regardless of whether campaign and ad group
 * IDs are provided or left blank, at least one keyword is required to estimate
 * traffic.<p>
 *
 * To make a keyword estimates request in which estimates do not consider
 * existing account information (e.g. historical ad group performance), set
 * {@link #campaignId} to {@code null}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignEstimateRequest extends EstimateRequest {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var AdGroupEstimateRequest[]
	 */
	public $adGroupEstimateRequests;

	/**
	 * @access public
	 * @var Criterion[]
	 */
	public $criteria;

	/**
	 * @access public
	 * @var NetworkSetting
	 */
	public $networkSetting;

	/**
	 * @access public
	 * @var Money
	 */
	public $dailyBudget;

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
		return "CampaignEstimateRequest";
	}

	public function __construct($campaignId = NULL, $adGroupEstimateRequests = NULL, $criteria = NULL, $networkSetting = NULL, $dailyBudget = NULL, $EstimateRequestType = NULL) {
		parent::__construct();
		$this->campaignId = $campaignId;
		$this->adGroupEstimateRequests = $adGroupEstimateRequests;
		$this->criteria = $criteria;
		$this->networkSetting = $networkSetting;
		$this->dailyBudget = $dailyBudget;
		$this->EstimateRequestType = $EstimateRequestType;
	}
}