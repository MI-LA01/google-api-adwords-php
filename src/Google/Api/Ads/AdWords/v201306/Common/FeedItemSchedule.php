<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a FeedItem schedule, which specifies a time interval on a given day
 * when the feed item may serve. The FeedItemSchedule times are in the account's time zone.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItemSchedule {
	/**
	 * @access public
	 * @var tnsDayOfWeek
	 */
	public $dayOfWeek;

	/**
	 * @access public
	 * @var integer
	 */
	public $startHour;

	/**
	 * @access public
	 * @var tnsMinuteOfHour
	 */
	public $startMinute;

	/**
	 * @access public
	 * @var integer
	 */
	public $endHour;

	/**
	 * @access public
	 * @var tnsMinuteOfHour
	 */
	public $endMinute;

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
		return "FeedItemSchedule";
	}

	public function __construct($dayOfWeek = NULL, $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL) {
		$this->dayOfWeek = $dayOfWeek;
		$this->startHour = $startHour;
		$this->startMinute = $startMinute;
		$this->endHour = $endHour;
		$this->endMinute = $endMinute;
	}
}