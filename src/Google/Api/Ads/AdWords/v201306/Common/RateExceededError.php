<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Signals that a call failed because a measured rate exceeded.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RateExceededError extends ApiError {
	/**
	 * @access public
	 * @var tnsRateExceededErrorReason
	 */
	public $reason;

	/**
	 * @access public
	 * @var string
	 */
	public $rateName;

	/**
	 * @access public
	 * @var string
	 */
	public $rateScope;

	/**
	 * @access public
	 * @var integer
	 */
	public $retryAfterSeconds;

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
		return "RateExceededError";
	}

	public function __construct($reason = NULL, $rateName = NULL, $rateScope = NULL, $retryAfterSeconds = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->rateName = $rateName;
		$this->rateScope = $rateScope;
		$this->retryAfterSeconds = $retryAfterSeconds;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}
