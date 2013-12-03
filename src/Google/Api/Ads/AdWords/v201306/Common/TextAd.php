<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a TextAd.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TextAd extends Ad {
	/**
	 * @access public
	 * @var string
	 */
	public $headline;

	/**
	 * @access public
	 * @var string
	 */
	public $description1;

	/**
	 * @access public
	 * @var string
	 */
	public $description2;

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
		return "TextAd";
	}

	public function __construct($headline = NULL, $description1 = NULL, $description2 = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
		$this->headline = $headline;
		$this->description1 = $description1;
		$this->description2 = $description2;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->devicePreference = $devicePreference;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->AdType = $AdType;
	}
}