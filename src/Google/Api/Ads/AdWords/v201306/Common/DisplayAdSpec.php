<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Placement request/response object which provides details about display
 * ad types, options, and other available configuration variables.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DisplayAdSpec {
	/**
	 * @access public
	 * @var DisplayType[]
	 */
	public $displayTypes;

	/**
	 * @access public
	 * @var tnsDisplayAdSpecActivationOption[]
	 */
	public $activationOptions;

	/**
	 * @access public
	 * @var DisplayAdSpecAdSizeSpec[]
	 */
	public $adSizeSpecs;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/o/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "DisplayAdSpec";
	}

	public function __construct($displayTypes = NULL, $activationOptions = NULL, $adSizeSpecs = NULL) {
		$this->displayTypes = $displayTypes;
		$this->activationOptions = $activationOptions;
		$this->adSizeSpecs = $adSizeSpecs;
	}
}