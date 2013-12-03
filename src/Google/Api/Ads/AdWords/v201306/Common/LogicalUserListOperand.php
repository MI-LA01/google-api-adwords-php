<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * An interface for a logical user list operand. A logical user list is a
 * combination of logical rules. Each rule is defined as a logical operator and
 * a list of operands. Those operands can be of type UserList or UserInterest.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LogicalUserListOperand {
	/**
	 * @access public
	 * @var UserInterest
	 */
	public $UserInterest;

	/**
	 * @access public
	 * @var UserList
	 */
	public $UserList;

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
		return "LogicalUserListOperand";
	}

	public function __construct($UserInterest = NULL, $UserList = NULL) {
		$this->UserInterest = $UserInterest;
		$this->UserList = $UserList;
	}
}