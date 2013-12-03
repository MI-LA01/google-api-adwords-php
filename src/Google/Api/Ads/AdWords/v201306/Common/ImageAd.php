<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an ImageAd.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ImageAd extends Ad {
	/**
	 * @access public
	 * @var Image
	 */
	public $image;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var integer
	 */
	public $adToCopyImageFrom;

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
		return "ImageAd";
	}

	public function __construct($image = NULL, $name = NULL, $adToCopyImageFrom = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
		$this->image = $image;
		$this->name = $name;
		$this->adToCopyImageFrom = $adToCopyImageFrom;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->devicePreference = $devicePreference;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->AdType = $AdType;
	}
}