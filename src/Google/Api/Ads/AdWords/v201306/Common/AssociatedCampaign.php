<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * This class represents a campaign which is or was linked to the parent budget object.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AssociatedCampaign {
	/**
	 * @access public
	 * @var string
	 */
	public $associatedCampaignName;

	/**
	 * @access public
	 * @var integer
	 */
	public $associatedCampaignId;

	/**
	 * @access public
	 * @var tnsAssociatedCampaignCampaignStatus
	 */
	public $associatedCampaignStatus;

	/**
	 * @access public
	 * @var tnsAssociatedCampaignBudgetCampaignAssociationStatus
	 */
	public $budgetCampaignAssociationStatus;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/cm/v201302";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "AssociatedCampaign";
	}

	public function __construct($associatedCampaignName = NULL, $associatedCampaignId = NULL, $associatedCampaignStatus = NULL, $budgetCampaignAssociationStatus = NULL) {
		$this->associatedCampaignName = $associatedCampaignName;
		$this->associatedCampaignId = $associatedCampaignId;
		$this->associatedCampaignStatus = $associatedCampaignStatus;
		$this->budgetCampaignAssociationStatus = $budgetCampaignAssociationStatus;
	}
}