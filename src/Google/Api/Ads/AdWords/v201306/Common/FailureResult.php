<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a failure result for an individual mutate operation.
 *
 * <p>Currently, operations are applied in transactional batches, so the
 * corresponding operation for this result may not itself be faulty.</p>
 *
 * <p>The errors in the exception may contain {@code OGNL path}s that identify
 * the faulty operations in the batch. Please see the subsequent
 * {@link BatchFailureResult}s to determine the remaining operations that were
 * also applied in the batch and their positions within the batch.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FailureResult extends OperationResult {
	/**
	 * @access public
	 * @var ApiException
	 */
	public $cause;

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
		return "FailureResult";
	}

	public function __construct($cause = NULL, $OperationResultType = NULL) {
		parent::__construct();
		$this->cause = $cause;
		$this->OperationResultType = $OperationResultType;
	}
}