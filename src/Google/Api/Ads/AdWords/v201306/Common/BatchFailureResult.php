<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a failure result for a mutate operation that was applied in a
 * transactional batch. It does not imply that the corresponding operation
 * for this result itself caused the failure. To determine that, please see
 * the {@link FailureResult} provided for the first operation of the batch.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BatchFailureResult extends OperationResult {
	/**
	 * @access public
	 * @var integer
	 */
	public $operationIndexInBatch;

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
		return "BatchFailureResult";
	}

	public function __construct($operationIndexInBatch = NULL, $OperationResultType = NULL) {
		parent::__construct();
		$this->operationIndexInBatch = $operationIndexInBatch;
		$this->OperationResultType = $OperationResultType;
	}
}