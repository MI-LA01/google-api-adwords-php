<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the billing summary of the job that provides the overall cost of
 * the job's operations, i.e., for the work done <i>by</i> the job. This
 * therefore excludes the cost of operating on the job itself - setting up the
 * job, polling for its status, retrieving the result, etc.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BillingSummary {
	/**
	 * @access public
	 * @var integer
	 */
	public $numOperations;

	/**
	 * @access public
	 * @var integer
	 */
	public $numUnits;

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
		return "BillingSummary";
	}

	public function __construct($numOperations = NULL, $numUnits = NULL) {
		$this->numOperations = $numOperations;
		$this->numUnits = $numUnits;
	}
}