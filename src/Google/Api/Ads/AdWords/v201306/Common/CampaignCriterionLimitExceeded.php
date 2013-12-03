<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Error to indicate that too many negative criteria added to some campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignCriterionLimitExceeded extends EntityCountLimitExceeded {
	/**
	 * @access public
	 * @var tnsCampaignCriterionLimitExceededCriteriaLimitType
	 */
	public $limitType;

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
		return "CampaignCriterionLimitExceeded";
	}

	public function __construct($limitType = NULL, $reason = NULL, $enclosingId = NULL, $limit = NULL, $accountLimitType = NULL, $existingCount = NULL, $fieldPath = NULL, $trigger = NULL, $errorString = NULL, $ApiErrorType = NULL) {
		parent::__construct();
		$this->limitType = $limitType;
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