<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The results of a simple mutation job.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SimpleMutateResult {
	/**
	 * @access public
	 * @var Operand[]
	 */
	public $results;

	/**
	 * @access public
	 * @var ApiError[]
	 */
	public $errors;

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
		return "SimpleMutateResult";
	}

	public function __construct($results = NULL, $errors = NULL) {
		$this->results = $results;
		$this->errors = $errors;
	}
}