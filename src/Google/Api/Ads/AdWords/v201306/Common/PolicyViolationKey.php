<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Key of the violation. The key is used for referring to a violation when
 * filing an exemption request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PolicyViolationKey {
	/**
	 * @access public
	 * @var string
	 */
	public $policyName;

	/**
	 * @access public
	 * @var string
	 */
	public $violatingText;

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
		return "PolicyViolationKey";
	}

	public function __construct($policyName = NULL, $violatingText = NULL) {
		$this->policyName = $policyName;
		$this->violatingText = $violatingText;
	}
}