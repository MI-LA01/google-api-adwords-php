<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Indicates that the number of entries in the request or response exceeds the system limit.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SizeLimitError extends ApiError {
	/**
	 * @access public
	 * @var tnsSizeLimitErrorReason
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
		return "SizeLimitError";
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