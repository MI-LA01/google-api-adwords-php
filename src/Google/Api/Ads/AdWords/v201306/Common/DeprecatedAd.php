<?php 

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a deprecated ad.
 *
 * Deprecated ads can be deleted, but cannot be created.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DeprecatedAd extends Ad {
	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsDeprecatedAdType
	 */
	public $type;

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
		return "DeprecatedAd";
	}

	public function __construct($name = NULL, $type = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
		$this->name = $name;
		$this->type = $type;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->devicePreference = $devicePreference;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->AdType = $AdType;
	}
}