<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains offline-validation and approval results for a given FeedItem and FeedMapping. Each
 * validation detail indicates any issues found on the feed item when used in the context
 * of the feed mapping.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItemValidationDetail {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedMappingId;

	/**
	 * @access public
	 * @var tnsFeedItemValidationDetailValidationStatus
	 */
	public $validationStatus;

	/**
	 * @access public
	 * @var FeedItemAttributeError[]
	 */
	public $validationErrors;

	/**
	 * @access public
	 * @var tnsFeedItemValidationDetailApprovalStatus
	 */
	public $approvalStatus;

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
		return "FeedItemValidationDetail";
	}

	public function __construct($feedMappingId = NULL, $validationStatus = NULL, $validationErrors = NULL, $approvalStatus = NULL) {
		$this->feedMappingId = $feedMappingId;
		$this->validationStatus = $validationStatus;
		$this->validationErrors = $validationErrors;
		$this->approvalStatus = $approvalStatus;
	}
}