<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Manual impression based bids.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CpmBid extends Bids {
	/**
	 * @access public
	 * @var Money
	 */
	public $bid;

	/**
	 * @access public
	 * @var tnsBidSource
	 */
	public $cpmBidSource;

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
		return "CpmBid";
	}

	public function __construct($bid = NULL, $cpmBidSource = NULL, $BidsType = NULL) {
		parent::__construct();
		$this->bid = $bid;
		$this->cpmBidSource = $cpmBidSource;
		$this->BidsType = $BidsType;
	}
}