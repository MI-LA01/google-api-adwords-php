<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains how many changes were made associated with an experiment at
 * the adgroup, critieria and creative levels
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExperimentSummaryStats {
	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupsCount;

	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupCriteriaCount;

	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupAdsCount;

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
		return "ExperimentSummaryStats";
	}

	public function __construct($adGroupsCount = NULL, $adGroupCriteriaCount = NULL, $adGroupAdsCount = NULL) {
		$this->adGroupsCount = $adGroupsCount;
		$this->adGroupCriteriaCount = $adGroupCriteriaCount;
		$this->adGroupAdsCount = $adGroupAdsCount;
	}
}