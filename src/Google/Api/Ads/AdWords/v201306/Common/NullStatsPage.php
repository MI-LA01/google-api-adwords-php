<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Base class for Get results for a page of entities that do not use statistics,
 * but still require a specific type paramter for {@link StatsEntry}
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NullStatsPage extends Page {
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
		return "NullStatsPage";
	}

	public function __construct($totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}