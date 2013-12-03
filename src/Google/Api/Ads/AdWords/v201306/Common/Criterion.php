<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a criterion (such as a keyword, placement, or vertical).
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Criterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var tnsCriterionType
	 */
	public $type;

	/**
	 * @access public
	 * @var string
	 */
	public $CriterionType;

	private $_parameterMap = array (
			"Criterion.Type" => "CriterionType",
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
		return "Criterion";
	}

	public function __construct($id = NULL, $type = NULL, $CriterionType = NULL) {
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}