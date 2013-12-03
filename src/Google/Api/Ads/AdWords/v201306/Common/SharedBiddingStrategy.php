<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Bidding strategies store shared bidding configuration data and are account-level objects.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SharedBiddingStrategy {
	/**
	 * @access public
	 * @var BiddingScheme
	 */
	public $biddingScheme;

	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsSharedBiddingStrategyBiddingStrategyStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var tnsBiddingStrategyType
	 */
	public $type;

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
		return "SharedBiddingStrategy";
	}

	public function __construct($biddingScheme = NULL, $id = NULL, $name = NULL, $status = NULL, $type = NULL) {
		$this->biddingScheme = $biddingScheme;
		$this->id = $id;
		$this->name = $name;
		$this->status = $status;
		$this->type = $type;
	}
}