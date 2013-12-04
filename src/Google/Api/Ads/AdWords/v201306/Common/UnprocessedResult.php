<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Indicates that the mutate operation was not processed. This could result
 * if the job was aborted by the back-end workflow because the developer's API
 * quota was exceeded or if the job encountered some severe workflow system
 * failure.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UnprocessedResult extends OperationResult {
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
		return "UnprocessedResult";
	}

	public function __construct($OperationResultType = NULL) {
		parent::__construct();
		$this->OperationResultType = $OperationResultType;
	}
}