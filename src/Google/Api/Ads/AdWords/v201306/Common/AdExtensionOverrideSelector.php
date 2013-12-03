<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specifies criteria for selecting a set of AdExtensionOverrides.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverrideSelector {
	/**
	 * @access public
	 * @var integer[]
	 */
	public $campaignIds;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $adIds;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $adExtensionIds;

	/**
	 * @access public
	 * @var tnsAdExtensionOverrideStatus[]
	 */
	public $statuses;

	/**
	 * @access public
	 * @var Paging
	 */
	public $paging;

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
		return "AdExtensionOverrideSelector";
	}

	public function __construct($campaignIds = NULL, $adIds = NULL, $adExtensionIds = NULL, $statuses = NULL, $paging = NULL) {
		$this->campaignIds = $campaignIds;
		$this->adIds = $adIds;
		$this->adExtensionIds = $adExtensionIds;
		$this->statuses = $statuses;
		$this->paging = $paging;
	}
}