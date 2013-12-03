<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a phone extension.
 *
 * <p>This type of ad extension attaches a phone number
 * to a text ad, which lets customers call the advertiser directly from the ad.
 * Phone extensions will appear as clickable phone numbers beneath the main text ad,
 * and will be visible to high-end mobile device users who access google.com search,
 * Voice search, Google Mobile App, or Google Maps for Mobile from their phone.
 * </p>
 * <p>Learn more about
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2453991">
 * phone extensions</a>.
 * </p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MobileExtension extends AdExtension {
	/**
	 * @access public
	 * @var string
	 */
	public $phoneNumber;

	/**
	 * @access public
	 * @var string
	 */
	public $countryCode;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isCallTrackingEnabled;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isCallOnly;

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
		return "MobileExtension";
	}

	public function __construct($phoneNumber = NULL, $countryCode = NULL, $isCallTrackingEnabled = NULL, $isCallOnly = NULL, $id = NULL, $AdExtensionType = NULL) {
		parent::__construct();
		$this->phoneNumber = $phoneNumber;
		$this->countryCode = $countryCode;
		$this->isCallTrackingEnabled = $isCallTrackingEnabled;
		$this->isCallOnly = $isCallOnly;
		$this->id = $id;
		$this->AdExtensionType = $AdExtensionType;
	}
}
