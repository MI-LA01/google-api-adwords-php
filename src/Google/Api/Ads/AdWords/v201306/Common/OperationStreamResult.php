<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The result of processing an {@link OperationStream}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OperationStreamResult {
	/**
	 * @access public
	 * @var OperationResult[]
	 */
	public $operationResults;

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
		return "OperationStreamResult";
	}

	public function __construct($operationResults = NULL) {
		$this->operationResults = $operationResults;
	}
}