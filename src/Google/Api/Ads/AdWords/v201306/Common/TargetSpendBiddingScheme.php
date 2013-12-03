<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Target Spend bidding scheme, in which Google automatically places
 * bids for the user based on their daily/monthly budget or optional
 * spend target.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TargetSpendBiddingScheme extends BiddingScheme {
	/**
	 * @access public
	 * @var Money
	 */
	public $bidCeiling;

	/**
	 * @access public
	 * @var Money
	 */
	public $spendTarget;

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
		return "TargetSpendBiddingScheme";
	}

	public function __construct($bidCeiling = NULL, $spendTarget = NULL, $BiddingSchemeType = NULL) {
		parent::__construct();
		$this->bidCeiling = $bidCeiling;
		$this->spendTarget = $spendTarget;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}