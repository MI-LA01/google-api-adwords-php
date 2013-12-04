<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the result of processing an individual mutate operation that
 * however failed to get durably saved despite the service's best efforts.
 *
 * <p>The operation is considered to have completed processing because it
 * either was successfully performed or failed with validation errors, and
 * cannot be retried without the risk of doing duplicate work.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LostResult extends OperationResult {
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
		return "LostResult";
	}

	public function __construct($OperationResultType = NULL) {
		parent::__construct();
		$this->OperationResultType = $OperationResultType;
	}
}