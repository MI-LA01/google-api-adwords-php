<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Exception class for holding a list of service errors.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ApiException extends ApplicationException {
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
		return "ApiException";
	}

	public function __construct($errors = NULL, $message = NULL, $ApplicationExceptionType = NULL) {
		parent::__construct();
		$this->errors = $errors;
		$this->message = $message;
		$this->ApplicationExceptionType = $ApplicationExceptionType;
	}
}