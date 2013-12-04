<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Holds information about a changed campaign and any ad groups under
 * that have changed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignChangeData {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var tnsChangeStatus
	 */
	public $campaignChangeStatus;

	/**
	 * @access public
	 * @var AdGroupChangeData[]
	 */
	public $changedAdGroups;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $addedCampaignCriteria;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $deletedCampaignCriteria;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $addedAdExtensions;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $deletedAdExtensions;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $changedFeeds;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $deletedFeeds;

	/**
	 * @access public
	 * @var boolean
	 */
	public $campaignTargetingChanged;

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
		return "CampaignChangeData";
	}

	public function __construct($campaignId = NULL, $campaignChangeStatus = NULL, $changedAdGroups = NULL, $addedCampaignCriteria = NULL, $deletedCampaignCriteria = NULL, $addedAdExtensions = NULL, $deletedAdExtensions = NULL, $changedFeeds = NULL, $deletedFeeds = NULL, $campaignTargetingChanged = NULL) {
		$this->campaignId = $campaignId;
		$this->campaignChangeStatus = $campaignChangeStatus;
		$this->changedAdGroups = $changedAdGroups;
		$this->addedCampaignCriteria = $addedCampaignCriteria;
		$this->deletedCampaignCriteria = $deletedCampaignCriteria;
		$this->addedAdExtensions = $addedAdExtensions;
		$this->deletedAdExtensions = $deletedAdExtensions;
		$this->changedFeeds = $changedFeeds;
		$this->deletedFeeds = $deletedFeeds;
		$this->campaignTargetingChanged = $campaignTargetingChanged;
	}
}