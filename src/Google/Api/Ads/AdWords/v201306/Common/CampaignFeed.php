<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * CampaignFeeds are used to link a feed to a campaign using a matching function,
 * making the feed's feed items available in the campaign's ads for substitution.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignFeed {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedId;

	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var Function
	 */
	public $matchingFunction;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $placeholderTypes;

	/**
	 * @access public
	 * @var tnsCampaignFeedStatus
	 */
	public $status;

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
		return "CampaignFeed";
	}

	public function __construct($feedId = NULL, $campaignId = NULL, $matchingFunction = NULL, $placeholderTypes = NULL, $status = NULL) {
		$this->feedId = $feedId;
		$this->campaignId = $campaignId;
		$this->matchingFunction = $matchingFunction;
		$this->placeholderTypes = $placeholderTypes;
		$this->status = $status;
	}
}