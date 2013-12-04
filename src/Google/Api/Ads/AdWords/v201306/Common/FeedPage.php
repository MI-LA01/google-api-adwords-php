<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The result of a call to FeedService#get.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedPage extends NullStatsPage {
	/**
	 * @access public
	 * @var Feed[]
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
		return "FeedPage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}