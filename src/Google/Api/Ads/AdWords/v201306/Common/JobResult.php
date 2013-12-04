<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the result data of a job. This contains both the results of
 * successfully processed operations as well as errors returned by failed
 * operations.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class JobResult {
	/**
	 * @access public
	 * @var BulkMutateResult
	 */
	public $BulkMutateResult;

	/**
	 * @access public
	 * @var SimpleMutateResult
	 */
	public $SimpleMutateResult;

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
		return "JobResult";
	}

	public function __construct($BulkMutateResult = NULL, $SimpleMutateResult = NULL) {
		$this->BulkMutateResult = $BulkMutateResult;
		$this->SimpleMutateResult = $SimpleMutateResult;
	}
}