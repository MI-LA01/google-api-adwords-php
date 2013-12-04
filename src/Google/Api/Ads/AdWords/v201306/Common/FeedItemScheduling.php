<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a collection of FeedItem schedules specifying all time intervals for which
 * the feed item may serve. Any time range not covered by the specified FeedItemSchedules will
 * prevent the feed item from serving during those times.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItemScheduling {
	/**
	 * @access public
	 * @var FeedItemSchedule[]
	 */
	public $feedItemSchedules;

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
		return "FeedItemScheduling";
	}

	public function __construct($feedItemSchedules = NULL) {
		$this->feedItemSchedules = $feedItemSchedules;
	}
}