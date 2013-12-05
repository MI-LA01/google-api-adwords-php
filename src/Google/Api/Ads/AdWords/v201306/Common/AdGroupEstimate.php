<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the estimate results for a single ad group.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupEstimate extends Estimate {
	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var KeywordEstimate[]
	 */
	public $keywordEstimates;

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
		return "AdGroupEstimate";
	}

	public function __construct($adGroupId = NULL, $keywordEstimates = NULL, $EstimateType = NULL) {
		parent::__construct();
		$this->adGroupId = $adGroupId;
		$this->keywordEstimates = $keywordEstimates;
		$this->EstimateType = $EstimateType;
	}
}