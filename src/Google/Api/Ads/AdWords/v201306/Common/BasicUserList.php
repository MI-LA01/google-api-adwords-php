<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * User list targeting as a collection of conversion types.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BasicUserList extends UserList {
	/**
	 * @access public
	 * @var UserListConversionType[]
	 */
	public $conversionTypes;

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
		return "BasicUserList";
	}

	public function __construct($conversionTypes = NULL, $id = NULL, $isReadOnly = NULL, $name = NULL, $description = NULL, $status = NULL, $integrationCode = NULL, $accessReason = NULL, $accountUserListStatus = NULL, $membershipLifeSpan = NULL, $size = NULL, $sizeRange = NULL, $UserListType = NULL) {
		parent::__construct();
		$this->conversionTypes = $conversionTypes;
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