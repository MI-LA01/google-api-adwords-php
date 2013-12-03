<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents violations of a single policy by some text in a field.
 *
 * Violations of a single policy by the same string in multiple places
 * within a field is reported in one instance of this class and only one
 * exemption needs to be filed.
 * Violations of a single policy by two different strings is reported
 * as two separate instances of this class.
 *
 * e.g. If 'ACME' violates 'capitalization' and occurs twice in a text ad it
 * would be represented by one instance. If the ad also contains 'INC' which
 * also violates 'capitalization' it would be represented in a separate
 * instance.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PolicyViolationError extends ApiError {
	/**
	 * @access public
	 * @var PolicyViolationKey
	 */
	public $key;

	/**
	 * @access public
	 * @var string
	 */
	public $externalPolicyName;

	/**
	 * @access public
	 * @var string
	 */
	public $externalPolicyUrl;

	/**
	 * @access public
	 * @var string
	 */
	public $externalPolicyDescription;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isExemptable;

	/**
	 * @access public
	 * @var PolicyViolationErrorPart[]
	 */
	public $violatingParts;

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
		return "PolicyViolationError";
	}

	public function __construct($key = NULL, $externalPolicyName = NULL, $externalPolicyUrl = NULL, $externalPolicyDescription = NULL, $isExemptable = NULL, $violatingParts = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->key = $key;
		$this->externalPolicyName = $externalPolicyName;
		$this->externalPolicyUrl = $externalPolicyUrl;
		$this->externalPolicyDescription = $externalPolicyDescription;
		$this->isExemptable = $isExemptable;
		$this->violatingParts = $violatingParts;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}