<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Data object that represents a managed customer.  Member of {@link ManagedCustomerPage}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomer {
	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var string
	 */
	public $login;

	/**
	 * @access public
	 * @var string
	 */
	public $companyName;

	/**
	 * @access public
	 * @var integer
	 */
	public $customerId;

	/**
	 * @access public
	 * @var boolean
	 */
	public $canManageClients;

	/**
	 * @access public
	 * @var string
	 */
	public $currencyCode;

	/**
	 * @access public
	 * @var string
	 */
	public $dateTimeZone;

	/**
	 * @access public
	 * @var boolean
	 */
	public $testAccount;

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
		return "ManagedCustomer";
	}

	public function __construct($name = NULL, $login = NULL, $companyName = NULL, $customerId = NULL, $canManageClients = NULL, $currencyCode = NULL, $dateTimeZone = NULL, $testAccount = NULL) {
		$this->name = $name;
		$this->login = $login;
		$this->companyName = $companyName;
		$this->customerId = $customerId;
		$this->canManageClients = $canManageClients;
		$this->currencyCode = $currencyCode;
		$this->dateTimeZone = $dateTimeZone;
		$this->testAccount = $testAccount;
	}
}