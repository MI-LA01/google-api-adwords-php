<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Simplified way of submitting a mutation job. The provided list of
 * operations, if valid, will create a new job with a unique id, which will
 * be returned. This id can later be used in invocations of
 * {@link #get} and {@link #getResult}. Policy can optionally be specified.
 *
 * <p>When this method returns with success, the job will be in
 * {@code PROCESSING} or {@code PENDING} state and no further action is
 * needed for the job to get executed.</p>
 *
 * <p>You should not use the returned {@link BulkMutateJobId} with bulk API
 * {@link BulkMutateJobService#mutate} method.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MutateJobServiceMutate {
	/**
	 * @access public
	 * @var Operation[]
	 */
	public $operations;

	/**
	 * @access public
	 * @var BulkMutateJobPolicy
	 */
	public $policy;

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
		return "";
	}

	public function __construct($operations = NULL, $policy = NULL) {
		$this->operations = $operations;
		$this->policy = $policy;
	}
}