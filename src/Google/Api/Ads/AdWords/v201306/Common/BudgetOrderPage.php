<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A page of {@link BudgetOrder}s from {@link BudgetOrderService#get}
 * method.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrderPage extends Page {
	/**
	 * @access public
	 * @var BudgetOrder[]
	 */
	public $entries;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/billing/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "BudgetOrderPage";
	}

	public function __construct($entries = NULL, $totalNumEntries = NULL, $PageType = NULL) {
		parent::__construct();
		$this->entries = $entries;
		$this->totalNumEntries = $totalNumEntries;
		$this->PageType = $PageType;
	}
}