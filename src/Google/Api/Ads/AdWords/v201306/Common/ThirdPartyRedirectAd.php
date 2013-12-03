<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Data associated with rich media extension attributes.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ThirdPartyRedirectAd extends RichMediaAd {
	/**
	 * @access public
	 * @var boolean
	 */
	public $isCookieTargeted;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isUserInterestTargeted;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isTagged;

	/**
	 * @access public
	 * @var tnsVideoType[]
	 */
	public $videoTypes;

	/**
	 * @access public
	 * @var tnsThirdPartyRedirectAdExpandingDirection[]
	 */
	public $expandingDirections;

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
		return "ThirdPartyRedirectAd";
	}

	public function __construct($isCookieTargeted = NULL, $isUserInterestTargeted = NULL, $isTagged = NULL, $videoTypes = NULL, $expandingDirections = NULL, $name = NULL, $dimensions = NULL, $snippet = NULL, $impressionBeaconUrl = NULL, $adDuration = NULL, $certifiedVendorFormatId = NULL, $sourceUrl = NULL, $richMediaAdType = NULL, $adAttributes = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
		$this->isCookieTargeted = $isCookieTargeted;
		$this->isUserInterestTargeted = $isUserInterestTargeted;
		$this->isTagged = $isTagged;
		$this->videoTypes = $videoTypes;
		$this->expandingDirections = $expandingDirections;
		$this->name = $name;
		$this->dimensions = $dimensions;
		$this->snippet = $snippet;
		$this->impressionBeaconUrl = $impressionBeaconUrl;
		$this->adDuration = $adDuration;
		$this->certifiedVendorFormatId = $certifiedVendorFormatId;
		$this->sourceUrl = $sourceUrl;
		$this->richMediaAdType = $richMediaAdType;
		$this->adAttributes = $adAttributes;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->devicePreference = $devicePreference;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->AdType = $AdType;
	}
}