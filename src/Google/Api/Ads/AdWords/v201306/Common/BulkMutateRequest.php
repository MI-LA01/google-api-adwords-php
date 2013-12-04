<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A request part of a {@link BulkMutateJob}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BulkMutateRequest {
	/**
	 * @access public
	 * @var integer
	 */
	public $partIndex;

	/**
	 * @access public
	 * @var OperationStream[]
	 */
	public $operationStreams;

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
		return "BulkMutateRequest";
	}

	public function __construct($partIndex = NULL, $operationStreams = NULL) {
		$this->partIndex = $partIndex;
		$this->operationStreams = $operationStreams;
	}
}