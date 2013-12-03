<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * AdExtensionOverride errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverrideError extends ApiError {
	/**
	 * @access public
	 * @var tnsAdExtensionOverrideErrorReason
	 */
	public $reason;

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
		return "AdExtensionOverrideError";
	}

	public function __construct($reason = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}