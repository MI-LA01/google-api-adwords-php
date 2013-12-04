<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A set of estimates for a criterion's performance for a specific bid
 * amount.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BidLandscapeLandscapePoint {
	/**
	 * @access public
	 * @var Money
	 */
	public $bid;

	/**
	 * @access public
	 * @var integer
	 */
	public $clicks;

	/**
	 * @access public
	 * @var Money
	 */
	public $cost;

	/**
	 * @access public
	 * @var Money
	 */
	public $marginalCpc;

	/**
	 * @access public
	 * @var integer
	 */
	public $impressions;

	/**
	 * @access public
	 * @var integer
	 */
	public $promotedImpressions;

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
		return "BidLandscape.LandscapePoint";
	}

	public function __construct($bid = NULL, $clicks = NULL, $cost = NULL, $marginalCpc = NULL, $impressions = NULL, $promotedImpressions = NULL) {
		$this->bid = $bid;
		$this->clicks = $clicks;
		$this->cost = $cost;
		$this->marginalCpc = $marginalCpc;
		$this->impressions = $impressions;
		$this->promotedImpressions = $promotedImpressions;
	}
}