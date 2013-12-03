<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an BillingAccount.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BillingAccount {
	/**
	 * @access public
	 * @var string
	 */
	public $id;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @access public
	 * @var string
	 */
	public $primaryBillingId;

	/**
	 * @access public
	 * @var string
	 */
	public $secondaryBillingId;

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
		return "BillingAccount";
	}

	public function __construct($id = NULL, $name = NULL, $currencyCode = NULL, $primaryBillingId = NULL, $secondaryBillingId = NULL) {
		$this->id = $id;
		$this->name = $name;
		$this->currencyCode = $currencyCode;
		$this->primaryBillingId = $primaryBillingId;
		$this->secondaryBillingId = $secondaryBillingId;
	}
}