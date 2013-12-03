<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Conversion optimizer bidding strategy helps you maximize your return on investment
 * (ROI) by automatically getting you the most possible conversions for your budget.
 *
 * <p class="warning">{@code pricingMode} currently defaults to {@code CLICKS} and
 * cannot be changed.</p>
 *
 * <p>Note that campaigns must meet <a
 * href="//support.google.com/adwords/bin/answer.py?answer=2471188">specific
 * eligibility requirements</a> before they can use the <code>ConversionOptimizer</code>
 * bidding strategy.
 *
 * For more information on conversion optimizer, visit the
 * <a href="http://www.google.com/adwords/conversionoptimizer/index.html"
 * >Conversion Optimizer site</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ConversionOptimizerBiddingScheme extends BiddingScheme {
	/**
	 * @access public
	 * @var tnsConversionOptimizerBiddingSchemePricingMode
	 */
	public $pricingMode;

	/**
	 * @access public
	 * @var tnsConversionOptimizerBiddingSchemeBidType
	 */
	public $bidType;

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
		return "ConversionOptimizerBiddingScheme";
	}

	public function __construct($pricingMode = NULL, $bidType = NULL, $BiddingSchemeType = NULL) {
		parent::__construct();
		$this->pricingMode = $pricingMode;
		$this->bidType = $bidType;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}