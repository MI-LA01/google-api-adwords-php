<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A selector used to fetch geographic coordinates for given addresses.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class GeoLocationSelector {
	/**
	 * @access public
	 * @var Address[]
	 */
	public $addresses;

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
		return "GeoLocationSelector";
	}

	public function __construct($addresses = NULL) {
		$this->addresses = $addresses;
	}
}