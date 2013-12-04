<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Error for {@link ManagedCustomerService}
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerServiceError extends ApiError {
	/**
	 * @access public
	 * @var tnsManagedCustomerServiceErrorReason
	 */
	public $reason;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $customerIds;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "ManagedCustomerServiceError";
	}

	public function __construct($reason = NULL, $customerIds = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->customerIds = $customerIds;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}