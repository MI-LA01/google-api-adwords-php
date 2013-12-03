<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a page of AdParams returned by the {@link AdParamService}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdParamPage {
	/**
	 * @access public
	 * @var AdParam[]
	 */
	public $entries;

	/**
	 * @access public
	 * @var integer
	 */
	public $totalNumEntries;

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
		return "AdParamPage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL) {
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
	}
}