<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains a subset of experiment resulting from the filtering and paging of the
 * {@link com.google.ads.api.services.campaignmgmt.campaign.ExperimentService#get} call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExperimentPage extends Page {
	/**
	 * @access public
	 * @var Experiment[]
	 */
	public $entries;

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
		return "ExperimentPage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}