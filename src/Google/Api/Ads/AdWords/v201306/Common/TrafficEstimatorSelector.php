<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains a list of campaigns to perform a traffic estimate on.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TrafficEstimatorSelector {
	/**
	 * @access public
	 * @var CampaignEstimateRequest[]
	 */
	public $campaignEstimateRequests;

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
		return "TrafficEstimatorSelector";
	}

	public function __construct($campaignEstimateRequests = NULL) {
		$this->campaignEstimateRequests = $campaignEstimateRequests;
	}
}