<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Pending invitation result for the getPendingInvitations method.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PendingInvitation {
	/**
	 * @access public
	 * @var ManagedCustomer
	 */
	public $manager;

	/**
	 * @access public
	 * @var ManagedCustomer
	 */
	public $client;

	/**
	 * @access public
	 * @var string
	 */
	public $creationDate;

	/**
	 * @access public
	 * @var string
	 */
	public $expirationDate;

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
		return "PendingInvitation";
	}

	public function __construct($manager = NULL, $client = NULL, $creationDate = NULL, $expirationDate = NULL) {
		$this->manager = $manager;
		$this->client = $client;
		$this->creationDate = $creationDate;
		$this->expirationDate = $expirationDate;
	}
}