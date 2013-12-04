<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains validation error details for a set of feed attributes.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItemAttributeError {
	/**
	 * @access public
	 * @var integer[]
	 */
	public $feedAttributeIds;

	/**
	 * @access public
	 * @var integer
	 */
	public $validationErrorCode;

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
		return "FeedItemAttributeError";
	}

	public function __construct($feedAttributeIds = NULL, $validationErrorCode = NULL) {
		$this->feedAttributeIds = $feedAttributeIds;
		$this->validationErrorCode = $validationErrorCode;
	}
}
