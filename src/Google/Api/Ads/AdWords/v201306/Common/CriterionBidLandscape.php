<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The bid landscape for a criterion.  A bid landscape estimates how a
 * a criterion will perform based on different bid amounts.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CriterionBidLandscape extends BidLandscape {
	/**
	 * @access public
	 * @var integer
	 */
	public $criterionId;

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
		return "CriterionBidLandscape";
	}

	public function __construct($criterionId = NULL, $campaignId = NULL, $adGroupId = NULL, $startDate = NULL, $endDate = NULL, $landscapePoints = NULL, $DataEntryType = NULL) {
		parent::__construct();
		$this->criterionId = $criterionId;
		$this->campaignId = $campaignId;
		$this->adGroupId = $adGroupId;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->landscapePoints = $landscapePoints;
		$this->DataEntryType = $DataEntryType;
	}
}