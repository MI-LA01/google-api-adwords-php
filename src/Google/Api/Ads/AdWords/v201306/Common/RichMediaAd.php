<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Data associated with a rich media ad.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RichMediaAd extends Ad {
	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var Dimensions
	 */
	public $dimensions;

	/**
	 * @access public
	 * @var string
	 */
	public $snippet;

	/**
	 * @access public
	 * @var string
	 */
	public $impressionBeaconUrl;

	/**
	 * @access public
	 * @var integer
	 */
	public $adDuration;

	/**
	 * @access public
	 * @var integer
	 */
	public $certifiedVendorFormatId;

	/**
	 * @access public
	 * @var string
	 */
	public $sourceUrl;

	/**
	 * @access public
	 * @var tnsRichMediaAdRichMediaAdType
	 */
	public $richMediaAdType;

	/**
	 * @access public
	 * @var tnsRichMediaAdAdAttribute[]
	 */
	public $adAttributes;

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
		return "RichMediaAd";
	}

	public function __construct($name = NULL, $dimensions = NULL, $snippet = NULL, $impressionBeaconUrl = NULL, $adDuration = NULL, $certifiedVendorFormatId = NULL, $sourceUrl = NULL, $richMediaAdType = NULL, $adAttributes = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
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