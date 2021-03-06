<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a result part of a {@link BulkMutateJob}.
 *
 * <p>Once one or more mutate operations have been processed, the bulk mutate
 * job will eventually be completed. This means that the job will have a result
 * corresponding to each operation. The types of results for an operation are:
 * <ul>
 * <li>{@link ReturnValueResult}: the corresponding operation was successfully
 * processed and this result contains the return value of that operation;
 * </li>
 * <li>{@link FailureResult} or {@link BatchFailureResult}: the corresponding
 * operation was in a batch that failed with errors. Please inspect these
 * errors to determine if the operation itself was faulty and if so what
 * errors need to be fixed before you submit this operation as part of a
 * future job.</li>
 * <li>{@link LostResult}: the corresponding operation was processed - it was
 * either successful and had a return value, or it was a part of a failed
 * batch. Unfortunately, despite our best efforts, we were unable to
 * durably save the result. You may have to retrieve the related state of
 * your account to determine if this operation actually succeeded.</li>
 * <li>{@link UnprocessedResult}: the corresponding operation was not processed
 * because the job was aborted <i>Note: The job's status will be
 * {@code COMPLETED}, signifying that although it may have some operations
 * that were processed, it cannot be resumed.</i></li></p>
 *
 * <p>The results of a job are structured so that the each operation can be
 * easily matched to its corresponding result. So for every
 * {@link BulkMutateRequest} in a job, there is a corresponding
 * {@code BulkMutateResult}; For every {@link OperationStream} in a request
 * part, there is a corresponding {@link OperationStreamResult}; And, for
 * every {@link Operation} in an operation stream, there is an
 * {@link OperationResult}.</p>
 *
 * <p>Within an operation stream, the operations are processed in atomic
 * batches. So even one faulty operation may cause its neighboring non-faulty
 * operations to fail just because they happened to be processed in the same
 * batch. It is important to keep this batch failure reporting scheme in mind
 * when handling operation failures.</p>
 *
 * <p>There will be a single {@link ApiException} returned for each failing
 * batch of operations, and it will have a similar structure and
 * interpretation to the exceptions returned by the synchronous AdWords API
 * services. This exception is returned in a {@link FailureResult} that
 * corresponds to the first operation of the failing batch.</p>
 *
 * <p>The exception may contain multiple errors, and each error may have
 * {@code OGNL path}s that identify the faulty operation(s) by index (or
 * position within the batch). The first operation in the batch has an
 * implicit index of 0. The subsequent operations in the batch have a
 * corresponding {@link BatchFailureResult} which explicitly specifies the
 * index of the operation within the batch.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BulkMutateResult {
	/**
	 * @access public
	 * @var integer
	 */
	public $partIndex;

	/**
	 * @access public
	 * @var OperationStreamResult[]
	 */
	public $operationStreamResults;

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
		return "BulkMutateResult";
	}

	public function __construct($partIndex = NULL, $operationStreamResults = NULL) {
		$this->partIndex = $partIndex;
		$this->operationStreamResults = $operationStreamResults;
	}
}