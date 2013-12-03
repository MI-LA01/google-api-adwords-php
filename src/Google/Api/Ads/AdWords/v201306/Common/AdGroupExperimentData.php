<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Data associated with an advertiser experiment for this adgroup.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupExperimentData {
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
	 * @var AdGroupExperimentBidMultipliers
	 */
	public $experimentBidMultipliers;

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
		return "AdGroupExperimentData";
	}

	public function __construct($experimentId = NULL, $experimentDeltaStatus = NULL, $experimentDataStatus = NULL, $experimentBidMultipliers = NULL) {
		$this->experimentId = $experimentId;
		$this->experimentDeltaStatus = $experimentDeltaStatus;
		$this->experimentDataStatus = $experimentDataStatus;
		$this->experimentBidMultipliers = $experimentBidMultipliers;
	}
}