<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains a subset of {@link CriterionBidLandscapePage} objects resulting from the
 * filtering and paging of
 * {@link com.google.ads.api.services.campaignmgmt.data.DataService#getCriterionBidLandscape}
 * call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CriterionBidLandscapePage extends NoStatsPage {
	/**
	 * @access public
	 * @var CriterionBidLandscape[]
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
		return "CriterionBidLandscapePage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}