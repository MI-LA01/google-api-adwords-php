<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents possible error codes in AdGroupService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupServiceError extends ApiError {
	/**
	 * @access public
	 * @var tnsAdGroupServiceErrorReason
	 */
	public $reason;

	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

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
		return "AdGroupServiceError";
	}

	public function __construct($reason = NULL, $adGroupId = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->adGroupId = $adGroupId;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}