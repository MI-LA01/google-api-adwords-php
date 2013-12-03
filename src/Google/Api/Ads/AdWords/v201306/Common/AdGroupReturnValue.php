<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A container for return values from the AdGroupService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupReturnValue extends ListReturnValue {
	/**
	 * @access public
	 * @var AdGroup[]
	 */
	public $value;

	/**
	 * @access public
	 * @var ApiError[]
	 */
	public $partialFailureErrors;

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
		return "AdGroupReturnValue";
	}

	public function __construct($value = NULL, $partialFailureErrors = NULL, $ListReturnValueType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->partialFailureErrors = $partialFailureErrors;
		$this->ListReturnValueType = $ListReturnValueType;
	}
}