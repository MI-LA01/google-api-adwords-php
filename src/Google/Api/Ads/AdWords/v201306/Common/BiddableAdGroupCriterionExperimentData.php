<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Data associated with an advertiser experiment for this {@link BiddableAdGroupCriterion}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BiddableAdGroupCriterionExperimentData {
	/**
	 * @access public
	 * @var integer
	 */
	public $experimentId;

	/**
	 * @access public
	 * @var tnsExperimentDeltaStatus
	 */
	public $experimentDeltaStatus;

	/**
	 * @access public
	 * @var tnsExperimentDataStatus
	 */
	public $experimentDataStatus;

	/**
	 * @access public
	 * @var AdGroupCriterionExperimentBidMultiplier
	 */
	public $experimentBidMultiplier;

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
		return "BiddableAdGroupCriterionExperimentData";
	}

	public function __construct($experimentId = NULL, $experimentDeltaStatus = NULL, $experimentDataStatus = NULL, $experimentBidMultiplier = NULL) {
		$this->experimentId = $experimentId;
		$this->experimentDeltaStatus = $experimentDeltaStatus;
		$this->experimentDataStatus = $experimentDataStatus;
		$this->experimentBidMultiplier = $experimentBidMultiplier;
	}
}