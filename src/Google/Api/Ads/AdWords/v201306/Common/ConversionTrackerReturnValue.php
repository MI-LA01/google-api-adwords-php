<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A container for return values from the ConversionTrackerService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ConversionTrackerReturnValue extends ListReturnValue {
	/**
	 * @access public
	 * @var ConversionTracker[]
	 */
	public $value;

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
		return "ConversionTrackerReturnValue";
	}

	public function __construct($value = NULL, $ListReturnValueType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->ListReturnValueType = $ListReturnValueType;
	}
}