<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a campaign level criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignCriterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isNegative;

	/**
	 * @access public
	 * @var Criterion
	 */
	public $criterion;

	/**
	 * @access public
	 * @var double
	 */
	public $bidModifier;

	/**
	 * @access public
	 * @var String_StringMapEntry[]
	 */
	public $forwardCompatibilityMap;

	/**
	 * @access public
	 * @var string
	 */
	public $CampaignCriterionType;

	private $_parameterMap = array (
			"CampaignCriterion.Type" => "CampaignCriterionType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	*/
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

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
		return "CampaignCriterion";
	}

	public function __construct($campaignId = NULL, $isNegative = NULL, $criterion = NULL, $bidModifier = NULL, $forwardCompatibilityMap = NULL, $CampaignCriterionType = NULL) {
		$this->campaignId = $campaignId;
		$this->isNegative = $isNegative;
		$this->criterion = $criterion;
		$this->bidModifier = $bidModifier;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->CampaignCriterionType = $CampaignCriterionType;
	}
}