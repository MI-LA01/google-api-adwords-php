<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents data about a bid landscape for an ad group or criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BidLandscape extends DataEntry {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var string
	 */
	public $startDate;

	/**
	 * @access public
	 * @var string
	 */
	public $endDate;

	/**
	 * @access public
	 * @var BidLandscapeLandscapePoint[]
	 */
	public $landscapePoints;

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
		return "BidLandscape";
	}

	public function __construct($campaignId = NULL, $adGroupId = NULL, $startDate = NULL, $endDate = NULL, $landscapePoints = NULL, $DataEntryType = NULL) {
		parent::__construct();
		$this->campaignId = $campaignId;
		$this->adGroupId = $adGroupId;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->landscapePoints = $landscapePoints;
		$this->DataEntryType = $DataEntryType;
	}
}