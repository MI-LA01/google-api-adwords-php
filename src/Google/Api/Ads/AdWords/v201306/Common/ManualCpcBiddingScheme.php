<?php 

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Manual click based bidding where user pays per click.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManualCpcBiddingScheme extends BiddingScheme {
	/**
	 * @access public
	 * @var boolean
	 */
	public $enhancedCpcEnabled;

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
		return "ManualCpcBiddingScheme";
	}

	public function __construct($enhancedCpcEnabled = NULL, $BiddingSchemeType = NULL) {
		parent::__construct();
		$this->enhancedCpcEnabled = $enhancedCpcEnabled;
		$this->BiddingSchemeType = $BiddingSchemeType;
	}
}