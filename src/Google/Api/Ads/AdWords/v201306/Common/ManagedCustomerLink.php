<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an AdWords manager-client link.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ManagedCustomerLink {
	/**
	 * @access public
	 * @var integer
	 */
	public $managerCustomerId;

	/**
	 * @access public
	 * @var integer
	 */
	public $clientCustomerId;

	/**
	 * @access public
	 * @var tnsLinkStatus
	 */
	public $linkStatus;

	/**
	 * @access public
	 * @var string
	 */
	public $pendingDescriptiveName;

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
		return "ManagedCustomerLink";
	}

	public function __construct($managerCustomerId = NULL, $clientCustomerId = NULL, $linkStatus = NULL, $pendingDescriptiveName = NULL) {
		$this->managerCustomerId = $managerCustomerId;
		$this->clientCustomerId = $clientCustomerId;
		$this->linkStatus = $linkStatus;
		$this->pendingDescriptiveName = $pendingDescriptiveName;
	}
}