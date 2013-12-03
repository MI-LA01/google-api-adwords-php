<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a user list that is a custom combination of user lists and user
 * interests.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LogicalUserList extends UserList {
	/**
	 * @access public
	 * @var UserListLogicalRule[]
	 */
	public $rules;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/rm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "LogicalUserList";
	}

	public function __construct($rules = NULL, $id = NULL, $isReadOnly = NULL, $name = NULL, $description = NULL, $status = NULL, $integrationCode = NULL, $accessReason = NULL, $accountUserListStatus = NULL, $membershipLifeSpan = NULL, $size = NULL, $sizeRange = NULL, $UserListType = NULL) {
		parent::__construct();
		$this->rules = $rules;
		$this->id = $id;
		$this->isReadOnly = $isReadOnly;
		$this->name = $name;
		$this->description = $description;
		$this->status = $status;
		$this->integrationCode = $integrationCode;
		$this->accessReason = $accessReason;
		$this->accountUserListStatus = $accountUserListStatus;
		$this->membershipLifeSpan = $membershipLifeSpan;
		$this->size = $size;
		$this->sizeRange = $sizeRange;
		$this->UserListType = $UserListType;
	}
}