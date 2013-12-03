<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a campaign level ad extension. A campaign ad extension specifies
 * a campaign and an ad extension which can extend any ad under that campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignAdExtension {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var AdExtension
	 */
	public $adExtension;

	/**
	 * @access public
	 * @var tnsCampaignAdExtensionStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var tnsCampaignAdExtensionApprovalStatus
	 */
	public $approvalStatus;

	/**
	 * @access public
	 * @var CampaignAdExtensionStats
	 */
	public $stats;

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
		return "CampaignAdExtension";
	}

	public function __construct($campaignId = NULL, $adExtension = NULL, $status = NULL, $approvalStatus = NULL, $stats = NULL) {
		$this->campaignId = $campaignId;
		$this->adExtension = $adExtension;
		$this->status = $status;
		$this->approvalStatus = $approvalStatus;
		$this->stats = $stats;
	}
}