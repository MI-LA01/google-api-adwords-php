<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Errors that are thrown if a quota limit is exceeded.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class QuotaError extends ApiError {
	/**
	 * @access public
	 * @var tnsQuotaErrorReason
	 */
	public $reason;

	/**
	 * @access public
	 * @var integer
	 */
	public $limit;

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
		return "QuotaError";
	}

	public function __construct($reason = NULL, $limit = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->limit = $limit;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}