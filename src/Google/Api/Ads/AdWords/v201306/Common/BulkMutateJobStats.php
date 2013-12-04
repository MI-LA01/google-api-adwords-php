<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Bulk mutate job-handling statistics.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BulkMutateJobStats extends JobStats {
	/**
	 * @access public
	 * @var integer
	 */
	public $numOperations;

	/**
	 * @access public
	 * @var integer
	 */
	public $numFailedOperations;

	/**
	 * @access public
	 * @var integer
	 */
	public $numUnprocessedOperations;

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
		return "BulkMutateJobStats";
	}

	public function __construct($numOperations = NULL, $numFailedOperations = NULL, $numUnprocessedOperations = NULL, $progressPercent = NULL, $pendingTimeMillis = NULL, $processingTimeMillis = NULL, $JobStatsType = NULL) {
		parent::__construct();
		$this->numOperations = $numOperations;
		$this->numFailedOperations = $numFailedOperations;
		$this->numUnprocessedOperations = $numUnprocessedOperations;
		$this->progressPercent = $progressPercent;
		$this->pendingTimeMillis = $pendingTimeMillis;
		$this->processingTimeMillis = $processingTimeMillis;
		$this->JobStatsType = $JobStatsType;
	}
}