<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A negative criterion in an adgroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NegativeAdGroupCriterion extends AdGroupCriterion {
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
		return "NegativeAdGroupCriterion";
	}

	public function __construct($adGroupId = NULL, $criterionUse = NULL, $criterion = NULL, $forwardCompatibilityMap = NULL, $AdGroupCriterionType = NULL) {
		parent::__construct();
		$this->adGroupId = $adGroupId;
		$this->criterionUse = $criterionUse;
		$this->criterion = $criterion;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->AdGroupCriterionType = $AdGroupCriterionType;
	}
}