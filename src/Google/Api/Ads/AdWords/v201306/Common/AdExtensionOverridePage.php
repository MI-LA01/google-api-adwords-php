<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a page of {@link AdExtensionOverride}s resulting from the query
 * done by {@link AdExtensionOverrideService}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverridePage extends Page {
	/**
	 * @access public
	 * @var AdExtensionOverride[]
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
		return "AdExtensionOverridePage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}