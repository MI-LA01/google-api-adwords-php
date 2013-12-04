<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Usage stats about a single {@link ConversionTracker}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ConversionTrackerStats {
	/**
	 * @access public
	 * @var integer
	 */
	public $numConversionEvents;

	/**
	 * @access public
	 * @var Money
	 */
	public $conversionValue;

	/**
	 * @access public
	 * @var string
	 */
	public $mostRecentConversionDate;

	/**
	 * @access public
	 * @var integer
	 */
	public $numConvertedClicks;

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
		return "ConversionTrackerStats";
	}

	public function __construct($numConversionEvents = NULL, $conversionValue = NULL, $mostRecentConversionDate = NULL, $numConvertedClicks = NULL) {
		$this->numConversionEvents = $numConversionEvents;
		$this->conversionValue = $conversionValue;
		$this->mostRecentConversionDate = $mostRecentConversionDate;
		$this->numConvertedClicks = $numConvertedClicks;
	}
}