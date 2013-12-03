<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Adgroup level bid multipliers used in manual CPM bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManualCPMAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers {
	/**
	 * @access public
	 * @var BidMultiplier
	 */
	public $maxCpmMultiplier;

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
		return "ManualCPMAdGroupExperimentBidMultipliers";
	}

	public function __construct($maxCpmMultiplier = NULL, $AdGroupExperimentBidMultipliersType = NULL) {
		parent::__construct();
		$this->maxCpmMultiplier = $maxCpmMultiplier;
		$this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
	}
}
