<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an ad group that will be estimated. Ad groups may be all
 * new or all existing, or a mixture of new and existing. Only existing
 * campaigns can contain estimates for existing ad groups.<p>
 *
 * <p>To make a keyword estimates request in which estimates do not consider
 * existing account information (e.g. historical ad group performance), set both
 * {@link #adGroupId} and the enclosing {@link CampaignEstimateRequest}'s
 * {@code campaignId} to {@code null}.
 *
 * <p>For more details on usage, refer to document at
 * {@link CampaignEstimateRequest}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupEstimateRequest extends EstimateRequest {
	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var KeywordEstimateRequest[]
	 */
	public $keywordEstimateRequests;

	/**
	 * @access public
	 * @var Money
	 */
	public $maxCpc;

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
		return "AdGroupEstimateRequest";
	}

	public function __construct($adGroupId = NULL, $keywordEstimateRequests = NULL, $maxCpc = NULL, $EstimateRequestType = NULL) {
		parent::__construct();
		$this->adGroupId = $adGroupId;
		$this->keywordEstimateRequests = $keywordEstimateRequests;
		$this->maxCpc = $maxCpc;
		$this->EstimateRequestType = $EstimateRequestType;
	}
}