<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Enhanced CPC is a bidding strategy that raises your bids for clicks that seem more likely to
 * lead to a conversion and lowers them for clicks where they seem less likely.
 *
 * This bidding scheme does not support criteria level bidding strategy overrides.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class EnhancedCpcBiddingScheme extends BiddingScheme {
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
		return "EnhancedCpcBiddingScheme";
	}

	public function __construct($BiddingSchemeType = NULL) {
		parent::__construct();
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}