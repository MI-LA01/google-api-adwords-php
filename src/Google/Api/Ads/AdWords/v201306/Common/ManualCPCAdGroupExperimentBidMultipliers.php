<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Adgroup level bid multipliers used in manual CPC bidding strategies.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManualCPCAdGroupExperimentBidMultipliers extends AdGroupExperimentBidMultipliers {
	/**
	 * @access public
	 * @var BidMultiplier
	 */
	public $maxCpcMultiplier;

	/**
	 * @access public
	 * @var BidMultiplier
	 */
	public $maxContentCpcMultiplier;

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
		return "ManualCPCAdGroupExperimentBidMultipliers";
	}

	public function __construct($maxCpcMultiplier = NULL, $maxContentCpcMultiplier = NULL, $AdGroupExperimentBidMultipliersType = NULL) {
		parent::__construct();
		$this->maxCpcMultiplier = $maxCpcMultiplier;
		$this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
		$this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
	}
}