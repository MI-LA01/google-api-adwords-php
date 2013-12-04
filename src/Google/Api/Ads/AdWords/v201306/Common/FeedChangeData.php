<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Holds information about a changed feed and any feeds items within the feed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedChangeData {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedId;

	/**
	 * @access public
	 * @var tnsChangeStatus
	 */
	public $feedChangeStatus;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $changedFeedItems;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $deletedFeedItems;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/ch/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "FeedChangeData";
	}

	public function __construct($feedId = NULL, $feedChangeStatus = NULL, $changedFeedItems = NULL, $deletedFeedItems = NULL) {
		$this->feedId = $feedId;
		$this->feedChangeStatus = $feedChangeStatus;
		$this->changedFeedItems = $changedFeedItems;
		$this->deletedFeedItems = $deletedFeedItems;
	}
}