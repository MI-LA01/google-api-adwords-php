<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * UserList - represents a user list that is defined by the advertiser to be targeted.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CriterionUserList extends Criterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $userListId;

	/**
	 * @access public
	 * @var string
	 */
	public $userListName;

	/**
	 * @access public
	 * @var tnsCriterionUserListMembershipStatus
	 */
	public $userListMembershipStatus;

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
		return "CriterionUserList";
	}

	public function __construct($userListId = NULL, $userListName = NULL, $userListMembershipStatus = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->userListId = $userListId;
		$this->userListName = $userListName;
		$this->userListMembershipStatus = $userListMembershipStatus;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}