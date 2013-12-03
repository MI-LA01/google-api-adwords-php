<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * A QueryError represents possible errors for query parsing and execution.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class QueryError extends ApiError {
	/**
	 * @access public
	 * @var tnsQueryErrorReason
	 */
	public $reason;

	/**
	 * @access public
	 * @var string
	 */
	public $message;

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
		return "QueryError";
	}

	public function __construct($reason = NULL, $message = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->message = $message;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}