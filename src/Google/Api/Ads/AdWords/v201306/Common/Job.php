<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an asynchronous macro unit of work.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Job {
	/**
	 * @access public
	 * @var ApiErrorReason
	 */
	public $failureReason;

	/**
	 * @access public
	 * @var JobStats
	 */
	public $stats;

	/**
	 * @access public
	 * @var BillingSummary
	 */
	public $billingSummary;

	/**
	 * @access public
	 * @var string
	 */
	public $JobType;

	private $_parameterMap = array (
			"Job.Type" => "JobType",
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
		return "Job";
	}

	public function __construct($failureReason = NULL, $stats = NULL, $billingSummary = NULL, $JobType = NULL) {
		$this->failureReason = $failureReason;
		$this->stats = $stats;
		$this->billingSummary = $billingSummary;
		$this->JobType = $JobType;
	}
}