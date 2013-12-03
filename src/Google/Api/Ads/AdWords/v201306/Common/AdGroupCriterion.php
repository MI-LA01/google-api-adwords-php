<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

class AdGroupCriterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var tnsCriterionUse
	 */
	public $criterionUse;

	/**
	 * @access public
	 * @var Criterion
	 */
	public $criterion;

	/**
	 * @access public
	 * @var String_StringMapEntry[]
	 */
	public $forwardCompatibilityMap;

	/**
	 * @access public
	 * @var string
	 */
	public $AdGroupCriterionType;

	private $_parameterMap = array (
			"AdGroupCriterion.Type" => "AdGroupCriterionType",
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
		return "AdGroupCriterion";
	}

	public function __construct($adGroupId = NULL, $criterionUse = NULL, $criterion = NULL, $forwardCompatibilityMap = NULL, $AdGroupCriterionType = NULL) {
		$this->adGroupId = $adGroupId;
		$this->criterionUse = $criterionUse;
		$this->criterion = $criterion;
		$this->forwardCompatibilityMap = $forwardCompatibilityMap;
		$this->AdGroupCriterionType = $AdGroupCriterionType;
	}
}