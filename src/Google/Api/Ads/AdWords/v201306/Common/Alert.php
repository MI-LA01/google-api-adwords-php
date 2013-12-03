<?php


namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Alert for a single client. Triggering events are grouped by {@link AlertType} into the same alert
 * with multiple {@link Details}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Alert {
	/**
	 * @access public
	 * @var tnsAlertSeverity
	 */
	public $alertSeverity;

	/**
	 * @access public
	 * @var tnsAlertType
	 */
	public $alertType;

	/**
	 * @access public
	 * @var integer
	 */
	public $clientCustomerId;

	/**
	 * @access public
	 * @var Detail[]
	 */
	public $details;

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
		return "Alert";
	}

	public function __construct($alertSeverity = NULL, $alertType = NULL, $clientCustomerId = NULL, $details = NULL) {
		$this->alertSeverity = $alertSeverity;
		$this->alertType = $alertType;
		$this->clientCustomerId = $clientCustomerId;
		$this->details = $details;
	}
}