<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Immutable structure to hold an ad schedule target.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdScheduleTarget extends Target {
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
	 * @access public
	 * @var double
	 */
	public $bidMultiplier;

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
		return "AdScheduleTarget";
	}

	public function __construct($dayOfWeek = NULL, $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL, $bidMultiplier = NULL, $TargetType = NULL) {
		parent::__construct();
		$this->dayOfWeek = $dayOfWeek;
		$this->startHour = $startHour;
		$this->startMinute = $startMinute;
		$this->endHour = $endHour;
		$this->endMinute = $endMinute;
		$this->bidMultiplier = $bidMultiplier;
		$this->TargetType = $TargetType;
	}
}