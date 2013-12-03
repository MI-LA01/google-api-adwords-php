<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Page-One Promoted bidding scheme, which sets max cpc bids to
 * target impressions on page one or page one promoted slots on google.com.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PageOnePromotedBiddingScheme extends BiddingScheme {
	/**
	 * @access public
	 * @var tnsPageOnePromotedBiddingSchemeStrategyGoal
	 */
	public $strategyGoal;

	/**
	 * @access public
	 * @var Money
	 */
	public $bidCeiling;

	/**
	 * @access public
	 * @var double
	 */
	public $bidModifier;

	/**
	 * @access public
	 * @var boolean
	 */
	public $bidChangesForRaisesOnly;

	/**
	 * @access public
	 * @var boolean
	 */
	public $raiseBidWhenBudgetConstained;

	/**
	 * @access public
	 * @var boolean
	 */
	public $raiseBidWhenLowQualityScore;

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
		return "PageOnePromotedBiddingScheme";
	}

	public function __construct($strategyGoal = NULL, $bidCeiling = NULL, $bidModifier = NULL, $bidChangesForRaisesOnly = NULL, $raiseBidWhenBudgetConstained = NULL, $raiseBidWhenLowQualityScore = NULL, $BiddingSchemeType = NULL) {
		parent::__construct();
		$this->strategyGoal = $strategyGoal;
		$this->bidCeiling = $bidCeiling;
		$this->bidModifier = $bidModifier;
		$this->bidChangesForRaisesOnly = $bidChangesForRaisesOnly;
		$this->raiseBidWhenBudgetConstained = $raiseBidWhenBudgetConstained;
		$this->raiseBidWhenLowQualityScore = $raiseBidWhenLowQualityScore;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}