<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Return result of {@link ManagedCustomerService}
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerPage extends Page {
	/**
	 * @access public
	 * @var ManagedCustomer[]
	 */
	public $entries;

	/**
	 * @access public
	 * @var ManagedCustomerLink[]
	 */
	public $links;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "ManagedCustomerPage";
	}

	public function __construct($entries = NULL, $links = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->links = $links;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}