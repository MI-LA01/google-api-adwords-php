<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a bid of a certain amount.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Bid {
	/**
	 * @access public
	 * @var Money
	 */
	public $amount;

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
		return "Bid";
	}

	public function __construct($amount = NULL) {
		$this->amount = $amount;
	}
}