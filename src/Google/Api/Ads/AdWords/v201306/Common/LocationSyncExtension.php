<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Local business center(LBC) sync extension that ties a LBC account with a campaign.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationSyncExtension extends AdExtension {
	/**
	 * @access public
	 * @var string
	 */
	public $email;

	/**
	 * @access public
	 * @var string
	 */
	public $authToken;

	/**
	 * @access public
	 * @var OAuthInfo
	 */
	public $oAuthInfo;

	/**
	 * @access public
	 * @var integer
	 */
	public $iconMediaId;

	/**
	 * @access public
	 * @var boolean
	 */
	public $shouldSyncUrl;

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
		return "LocationSyncExtension";
	}

	public function __construct($email = NULL, $authToken = NULL, $oAuthInfo = NULL, $iconMediaId = NULL, $shouldSyncUrl = NULL, $id = NULL, $AdExtensionType = NULL) {
		parent::__construct();
		$this->email = $email;
		$this->authToken = $authToken;
		$this->oAuthInfo = $oAuthInfo;
		$this->iconMediaId = $iconMediaId;
		$this->shouldSyncUrl = $shouldSyncUrl;
		$this->id = $id;
		$this->AdExtensionType = $AdExtensionType;
	}
}