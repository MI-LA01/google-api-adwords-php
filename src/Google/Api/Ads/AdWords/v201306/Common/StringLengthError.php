<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Errors associated with the length of the given string being
 * out of bounds.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class StringLengthError extends ApiError {
	/**
	 * @access public
	 * @var tnsStringLengthErrorReason
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
		return "StringLengthError";
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