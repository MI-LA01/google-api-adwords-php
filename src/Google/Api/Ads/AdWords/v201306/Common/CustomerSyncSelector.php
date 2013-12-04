<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A filter for selecting change history data for a customer.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CustomerSyncSelector {
	/**
	 * @access public
	 * @var DateTimeRange
	 */
	public $dateTimeRange;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $campaignIds;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $feedIds;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/ch/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "CustomerSyncSelector";
	}

	public function __construct($dateTimeRange = NULL, $campaignIds = NULL, $feedIds = NULL) {
		$this->dateTimeRange = $dateTimeRange;
		$this->campaignIds = $campaignIds;
		$this->feedIds = $feedIds;
	}
}