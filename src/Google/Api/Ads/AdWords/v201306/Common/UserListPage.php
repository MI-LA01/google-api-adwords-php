<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains a list of user lists resulting from the filtering and paging of the
 * {@link UserListService#get} call.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserListPage extends Page {
	/**
	 * @access public
	 * @var UserList[]
	 */
	public $entries;

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
		return "UserListPage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}