<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A container for return values from the UserListService.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListReturnValue extends ListReturnValue {
	/**
	 * @access public
	 * @var UserList[]
	 */
	public $value;

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
		return "UserListReturnValue";
	}

	public function __construct($value = NULL, $ListReturnValueType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->ListReturnValueType = $ListReturnValueType;
	}
}