<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * AdGroupCriterion level bid multiplier used in manual CPC bidding strategies.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManualCPCAdGroupCriterionExperimentBidMultiplier extends AdGroupCriterionExperimentBidMultiplier {
	/**
	 * @access public
	 * @var BidMultiplier
	 */
	public $maxCpcMultiplier;

	/**
	 * @access public
	 * @var tnsMultiplierSource
	 */
	public $multiplierSource;

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
		return "ManualCPCAdGroupCriterionExperimentBidMultiplier";
	}

	public function __construct($maxCpcMultiplier = NULL, $multiplierSource = NULL, $AdGroupCriterionExperimentBidMultiplierType = NULL) {
		parent::__construct();
		$this->maxCpcMultiplier = $maxCpcMultiplier;
		$this->multiplierSource = $multiplierSource;
		$this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
	}
}