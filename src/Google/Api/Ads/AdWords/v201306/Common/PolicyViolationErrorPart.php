<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Points to a substring within an ad field or criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PolicyViolationErrorPart {
	/**
	 * @access public
	 * @var integer
	 */
	public $index;

	/**
	 * @access public
	 * @var integer
	 */
	public $length;

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
		return "PolicyViolationError.Part";
	}

	public function __construct($index = NULL, $length = NULL) {
		$this->index = $index;
		$this->length = $length;
	}
}