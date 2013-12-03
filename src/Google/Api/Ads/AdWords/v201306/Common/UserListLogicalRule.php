<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A user list logical rule. A rule has a logical operator (and/or/not) and a
 * list of operands that can be user lists or user interests.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListLogicalRule {
	/**
	 * @access public
	 * @var tnsUserListLogicalRuleOperator
	 */
	public $operator;

	/**
	 * @access public
	 * @var LogicalUserListOperand[]
	 */
	public $ruleOperands;

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
		return "UserListLogicalRule";
	}

	public function __construct($operator = NULL, $ruleOperands = NULL) {
		$this->operator = $operator;
		$this->ruleOperands = $ruleOperands;
	}
}