<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD, REMOVE.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignSharedSet {
	/**
	 * @access public
	 * @var integer
	 */
	public $sharedSetId;

	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var string
	 */
	public $sharedSetName;

	/**
	 * @access public
	 * @var tnsSharedSetType
	 */
	public $sharedSetType;

	/**
	 * @access public
	 * @var string
	 */
	public $campaignName;

	/**
	 * @access public
	 * @var tnsCampaignSharedSetStatus
	 */
	public $status;

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
		return "CampaignSharedSet";
	}

	public function __construct($sharedSetId = NULL, $campaignId = NULL, $sharedSetName = NULL, $sharedSetType = NULL, $campaignName = NULL, $status = NULL) {
		$this->sharedSetId = $sharedSetId;
		$this->campaignId = $campaignId;
		$this->sharedSetName = $sharedSetName;
		$this->sharedSetType = $sharedSetType;
		$this->campaignName = $campaignName;
		$this->status = $status;
	}
}