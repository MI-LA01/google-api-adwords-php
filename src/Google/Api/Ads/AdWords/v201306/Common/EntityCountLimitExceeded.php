<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Signals that an entity count limit was exceeded for some level.
 * For example, too many criteria for a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class EntityCountLimitExceeded extends ApiError {
	/**
	 * @access public
	 * @var tnsEntityCountLimitExceededReason
	 */
	public $reason;

	/**
	 * @access public
	 * @var string
	 */
	public $enclosingId;

	/**
	 * @access public
	 * @var integer
	 */
	public $limit;

	/**
	 * @access public
	 * @var string
	 */
	public $accountLimitType;

	/**
	 * @access public
	 * @var integer
	 */
	public $existingCount;

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
		return "EntityCountLimitExceeded";
	}

	public function __construct($reason = NULL, $enclosingId = NULL, $limit = NULL, $accountLimitType = NULL, $existingCount = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->reason = $reason;
		$this->enclosingId = $enclosingId;
		$this->limit = $limit;
		$this->accountLimitType = $accountLimitType;
		$this->existingCount = $existingCount;
		$this->fieldPath = $fieldPath;
		$this->trigger = $trigger;
		$this->errorString = $errorString;
		$this->ApiErrorType = $ApiErrorType;
	}
}