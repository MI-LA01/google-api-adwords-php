<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * CPA Bids.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CpaBid extends Bids {
	/**
	 * @access public
	 * @var Money
	 */
	public $bid;

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
		return "CpaBid";
	}

	public function __construct($bid = NULL, $BidsType = NULL) {
		parent::__construct();
		$this->bid = $bid;
		$this->BidsType = $BidsType;
	}
}