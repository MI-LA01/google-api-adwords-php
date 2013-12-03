<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a UserList object that is sent over the wire.
 * This is a list of users an account may target.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserList {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isReadOnly;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var string
	 */
	public $description;

	/**
	 * @access public
	 * @var tnsUserListMembershipStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var string
	 */
	public $integrationCode;

	/**
	 * @access public
	 * @var tnsAccessReason
	 */
	public $accessReason;

	/**
	 * @access public
	 * @var tnsAccountUserListStatus
	 */
	public $accountUserListStatus;

	/**
	 * @access public
	 * @var integer
	 */
	public $membershipLifeSpan;

	/**
	 * @access public
	 * @var integer
	 */
	public $size;

	/**
	 * @access public
	 * @var tnsSizeRange
	 */
	public $sizeRange;

	/**
	 * @access public
	 * @var string
	 */
	public $UserListType;

	private $_parameterMap = array (
			"UserList.Type" => "UserListType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	*/
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

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
		return "UserList";
	}

	public function __construct($id = NULL, $isReadOnly = NULL, $name = NULL, $description = NULL, $status = NULL, $integrationCode = NULL, $accessReason = NULL, $accountUserListStatus = NULL, $membershipLifeSpan = NULL, $size = NULL, $sizeRange = NULL, $UserListType = NULL) {
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