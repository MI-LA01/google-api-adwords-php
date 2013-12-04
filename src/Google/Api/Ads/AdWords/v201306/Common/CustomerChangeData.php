<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Holds information about changes to a customer
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerChangeData {
	/**
	 * @access public
	 * @var CampaignChangeData[]
	 */
	public $changedCampaigns;

	/**
	 * @access public
	 * @var FeedChangeData[]
	 */
	public $changedFeeds;

	/**
	 * @access public
	 * @var string
	 */
	public $lastChangeTimestamp;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/ch/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "CustomerChangeData";
	}

	public function __construct($changedCampaigns = NULL, $changedFeeds = NULL, $lastChangeTimestamp = NULL) {
		$this->changedCampaigns = $changedCampaigns;
		$this->changedFeeds = $changedFeeds;
		$this->lastChangeTimestamp = $lastChangeTimestamp;
	}
}