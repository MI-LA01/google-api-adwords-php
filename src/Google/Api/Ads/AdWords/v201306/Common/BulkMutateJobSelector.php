<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specifies additional criteria for selecting bulk mutate jobs.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BulkMutateJobSelector extends JobSelector {
	/**
	 * @access public
	 * @var integer[]
	 */
	public $jobIds;

	/**
	 * @access public
	 * @var integer
	 */
	public $resultPartIndex;

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
		return "BulkMutateJobSelector";
	}

	public function __construct($jobIds = NULL, $resultPartIndex = NULL, $includeHistory = NULL, $includeStats = NULL, $JobSelectorType = NULL) {
		parent::__construct();
		$this->jobIds = $jobIds;
		$this->resultPartIndex = $resultPartIndex;
		$this->includeHistory = $includeHistory;
		$this->includeStats = $includeStats;
		$this->JobSelectorType = $JobSelectorType;
	}
}