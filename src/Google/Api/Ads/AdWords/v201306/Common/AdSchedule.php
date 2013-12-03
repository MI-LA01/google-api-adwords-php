<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an AdSchedule Criterion.
 * AdSchedule is specified as day and time of the week criteria to target
 * the Ads.
 * <p><b>Note:</b> An AdSchedule may not have more than <b>six</b> intervals
 * in a day.</p>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdSchedule extends Criterion {
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
		return "AdSchedule";
	}

	public function __construct($dayOfWeek = NULL, $startHour = NULL, $startMinute = NULL, $endHour = NULL, $endMinute = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->dayOfWeek = $dayOfWeek;
		$this->startHour = $startHour;
		$this->startMinute = $startMinute;
		$this->endHour = $endHour;
		$this->endMinute = $endMinute;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}