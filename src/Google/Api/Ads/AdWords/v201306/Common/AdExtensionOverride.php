<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an ad level ad extension override. An ad extension override
 * specifies the ad extension that must be used if the ad is served with
 * any ad extension data.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverride {
	/**
	 * @access public
	 * @var integer
	 */
	public $adId;

	/**
	 * @access public
	 * @var AdExtension
	 */
	public $adExtension;

	/**
	 * @access public
	 * @var OverrideInfo
	 */
	public $overrideInfo;

	/**
	 * @access public
	 * @var tnsAdExtensionOverrideStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var tnsAdExtensionOverrideApprovalStatus
	 */
	public $approvalStatus;

	/**
	 * @access public
	 * @var AdExtensionOverrideStats
	 */
	public $stats;

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
		return "AdExtensionOverride";
	}

	public function __construct($adId = NULL, $adExtension = NULL, $overrideInfo = NULL, $status = NULL, $approvalStatus = NULL, $stats = NULL) {
		$this->adId = $adId;
		$this->adExtension = $adExtension;
		$this->overrideInfo = $overrideInfo;
		$this->status = $status;
		$this->approvalStatus = $approvalStatus;
		$this->stats = $stats;
	}
}