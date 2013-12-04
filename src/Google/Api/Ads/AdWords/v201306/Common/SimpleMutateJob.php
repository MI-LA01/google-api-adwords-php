<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A mutation job, which was submitted using
 * {@link MutateJobService#mutate}, and will execute asynchronously
 * sometime after submission.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SimpleMutateJob extends Job {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var tnsBasicJobStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var JobEvent[]
	 */
	public $history;

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
		return "SimpleMutateJob";
	}

	public function __construct($id = NULL, $status = NULL, $history = NULL, $failureReason = NULL, $stats = NULL, $billingSummary = NULL, $JobType = NULL) {
		parent::__construct();
		$this->id = $id;
		$this->status = $status;
		$this->history = $history;
		$this->failureReason = $failureReason;
		$this->stats = $stats;
		$this->billingSummary = $billingSummary;
		$this->JobType = $JobType;
	}
}