<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Policy violation for an AdParam.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdParamPolicyError extends PolicyViolationError {
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
		return "AdParamPolicyError";
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