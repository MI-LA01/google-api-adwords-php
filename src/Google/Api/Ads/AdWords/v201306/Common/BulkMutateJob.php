<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@code BulkMutateJob} is essentially a mixed collection of mutate
 * operations from the following AdWords API campaign management services:
 * <ul>
 * <li>{@link CampaignService}</li>
 * <li>{@link CampaignTargetService}</li>
 * <li>{@link CampaignCriterionService}</li>
 * <li>{@link AdGroupService}</li>
 * <li>{@link AdGroupAdService}</li>
 * <li>{@link AdGroupCriterionService}</li>
 * </ul>
 *
 * <p>The mutate operations in a job's request are constructed in exactly the
 * same way as they are for synchronous calls to these services.</p>
 *
 * <p>The mutate operations are grouped by their scoping entity in the
 * AdWords customer tree. Currently, mutate operations can be grouped either
 * by the customer or by their parent campaign. However, they cannot be
 * grouped both ways - some by customer and others by campaigns - in the same
 * job.</p>
 *
 * <p class="note"><b>Note:</b> A job may have no more than 500,000 mutate
 * operations in total, and no more than 10 different scoping campaigns.</p>
 *
 * <p>The mutate operations must be packaged into containers called
 * {@code Operation Streams}, each tagged with the ID of the scoping entity of
 * its operations.</p>
 *
 * <p>To facilitate the building of very large bulk mutate jobs, the operation
 * streams of a job can be submitted using multiple request parts. A job is
 * queued for processing as soon as it can be determined that all of its
 * request parts have been received.</p>
 *
 * <p class="note"><b>Note:</b> A job may have no more than 100 request parts.
 * Each part may have no more than 25 operation streams and no more than 10,000
 * operations in total.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BulkMutateJob extends Job {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var BulkMutateJobPolicy
	 */
	public $policy;

	/**
	 * @access public
	 * @var BulkMutateRequest
	 */
	public $request;

	/**
	 * @access public
	 * @var tnsBasicJobStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var BulkMutateJobEvent[]
	 */
	public $history;

	/**
	 * @access public
	 * @var BulkMutateResult
	 */
	public $result;

	/**
	 * @access public
	 * @var integer
	 */
	public $numRequestParts;

	/**
	 * @access public
	 * @var integer
	 */
	public $numRequestPartsReceived;

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
		return "BulkMutateJob";
	}

	public function __construct($id = NULL, $policy = NULL, $request = NULL, $status = NULL, $history = NULL, $result = NULL, $numRequestParts = NULL, $numRequestPartsReceived = NULL, $failureReason = NULL, $stats = NULL, $billingSummary = NULL, $JobType = NULL) {
		parent::__construct();
		$this->id = $id;
		$this->policy = $policy;
		$this->request = $request;
		$this->status = $status;
		$this->history = $history;
		$this->result = $result;
		$this->numRequestParts = $numRequestParts;
		$this->numRequestPartsReceived = $numRequestPartsReceived;
		$this->failureReason = $failureReason;
		$this->stats = $stats;
		$this->billingSummary = $billingSummary;
		$this->JobType = $JobType;
	}
}