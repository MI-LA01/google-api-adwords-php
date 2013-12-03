<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Selector for querying for alerts.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AlertSelector {
	/**
	 * @access public
	 * @var AlertQuery
	 */
	public $query;

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
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "AlertSelector";
	}

	public function __construct($query = NULL, $paging = NULL) {
		$this->query = $query;
		$this->paging = $paging;
	}
}}

if (!class_exists("NoStatsPage", FALSE)) {
	/**
	 * Base class for Get results for a page of entities that do not use statistics.
	 * @package GoogleApiAdsAdWords
	 * @subpackage v201306
	 */
	class NoStatsPage extends Page {
		/**
		 * Gets the namesapce of this class
		 * @return the namespace of this class
		 */
		public function getNamespace() {
			return "https://adwords.google.com/api/adwords/mcm/v201306";
		}

		/**
		 * Gets the xsi:type name of this class
		 * @return the xsi:type name of this class
		 */
		public function getXsiTypeName() {
			return "NoStatsPage";
		}

		public function __construct($totalNumEntries = NULL, $PageType = NULL) {
			parent::__construct();
			$this->totalNumEntries = $totalNumEntries;
			$this->PageType = $PageType;
		}
	}