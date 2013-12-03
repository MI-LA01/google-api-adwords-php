<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * AdGroupFeeds are used to link a feed to an adgroup using a matching function,
 * making the feed's feed items available in the adgroup's ads for substitution.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupFeed {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedId;

	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var Function
	 */
	public $matchingFunction;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $placeholderTypes;

	/**
	 * @access public
	 * @var tnsAdGroupFeedStatus
	 */
	public $status;

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
		return "AdGroupFeed";
	}

	public function __construct($feedId = NULL, $adGroupId = NULL, $matchingFunction = NULL, $placeholderTypes = NULL, $status = NULL) {
		$this->feedId = $feedId;
		$this->adGroupId = $adGroupId;
		$this->matchingFunction = $matchingFunction;
		$this->placeholderTypes = $placeholderTypes;
		$this->status = $status;
	}
}