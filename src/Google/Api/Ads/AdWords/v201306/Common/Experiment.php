<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Class representing a experiment for the ExperimentService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Experiment {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var integer
	 */
	public $controlId;

	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsExperimentStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var tnsExperimentServingStatus
	 */
	public $servingStatus;

	/**
	 * @access public
	 * @var integer
	 */
	public $queryPercentage;

	/**
	 * @access public
	 * @var string
	 */
	public $startDateTime;

	/**
	 * @access public
	 * @var string
	 */
	public $endDateTime;

	/**
	 * @access public
	 * @var string
	 */
	public $lastModifiedDateTime;

	/**
	 * @access public
	 * @var ExperimentSummaryStats
	 */
	public $experimentSummaryStats;

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
		return "Experiment";
	}

	public function __construct($id = NULL, $controlId = NULL, $campaignId = NULL, $name = NULL, $status = NULL, $servingStatus = NULL, $queryPercentage = NULL, $startDateTime = NULL, $endDateTime = NULL, $lastModifiedDateTime = NULL, $experimentSummaryStats = NULL) {
		$this->id = $id;
		$this->controlId = $controlId;
		$this->campaignId = $campaignId;
		$this->name = $name;
		$this->status = $status;
		$this->servingStatus = $servingStatus;
		$this->queryPercentage = $queryPercentage;
		$this->startDateTime = $startDateTime;
		$this->endDateTime = $endDateTime;
		$this->lastModifiedDateTime = $lastModifiedDateTime;
		$this->experimentSummaryStats = $experimentSummaryStats;
	}
}