<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Target Cpa bidding strategy helps you maximize your return on investment
 * (ROI) by automatically getting you the most possible conversions for your budget.
 *
 * This is similar to the <code>ConversionOptimizerBiddingScheme<code> but does not
 * support user-entered AdGroup-level target CPA bids, but rather a strategy-wide
 * average CPA target.
 *
 * <p>Note that campaigns must meet <a
 * href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific
 * eligibility requirements</a> before they can use the <code>TargetCpaBiddingScheme</code>
 * bidding strategy.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TargetCpaBiddingScheme extends BiddingScheme {
	/**
	 * @access public
	 * @var Money
	 */
	public $targetCpa;

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
		return "TargetCpaBiddingScheme";
	}

	public function __construct($targetCpa = NULL, $BiddingSchemeType = NULL) {
		parent::__construct();
		$this->targetCpa = $targetCpa;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}
