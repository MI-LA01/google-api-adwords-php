<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * For selecting jobs whose information will be returned from a get method call
 * of a job service.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class JobSelector {
	/**
	 * @access public
	 * @var boolean
	 */
	public $includeHistory;

	/**
	 * @access public
	 * @var boolean
	 */
	public $includeStats;

	/**
	 * @access public
	 * @var string
	 */
	public $JobSelectorType;

	private $_parameterMap = array (
			"JobSelector.Type" => "JobSelectorType",
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
		return "JobSelector";
	}

	public function __construct($includeHistory = NULL, $includeStats = NULL, $JobSelectorType = NULL) {
		$this->includeHistory = $includeHistory;
		$this->includeStats = $includeStats;
		$this->JobSelectorType = $JobSelectorType;
	}
}