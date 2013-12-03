<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a feed attribute reference to use in a function.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedAttributeOperand extends FunctionArgumentOperand {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedId;

	/**
	 * @access public
	 * @var integer
	 */
	public $feedAttributeId;

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
		return "FeedAttributeOperand";
	}

	public function __construct($feedId = NULL, $feedAttributeId = NULL, $FunctionArgumentOperandType = NULL) {
		parent::__construct();
		$this->feedId = $feedId;
		$this->feedAttributeId = $feedAttributeId;
		$this->FunctionArgumentOperandType = $FunctionArgumentOperandType;
	}
}