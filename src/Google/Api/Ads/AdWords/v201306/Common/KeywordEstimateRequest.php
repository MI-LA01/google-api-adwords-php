<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a keyword to be estimated.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class KeywordEstimateRequest extends EstimateRequest {
	/**
	 * @access public
	 * @var Keyword
	 */
	public $keyword;

	/**
	 * @access public
	 * @var Money
	 */
	public $maxCpc;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isNegative;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/o/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "KeywordEstimateRequest";
	}

	public function __construct($keyword = NULL, $maxCpc = NULL, $isNegative = NULL, $EstimateRequestType = NULL) {
		parent::__construct();
		$this->keyword = $keyword;
		$this->maxCpc = $maxCpc;
		$this->isNegative = $isNegative;
		$this->EstimateRequestType = $EstimateRequestType;
	}
}