<?php 

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a multiplier to modify a bid. The final value after
 * modification is represented by the multiplied bid value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BidMultiplier {
	/**
	 * @access public
	 * @var double
	 */
	public $multiplier;

	/**
	 * @access public
	 * @var Bid
	 */
	public $multipliedBid;

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
		return "BidMultiplier";
	}

	public function __construct($multiplier = NULL, $multipliedBid = NULL) {
		$this->multiplier = $multiplier;
		$this->multipliedBid = $multipliedBid;
	}
}