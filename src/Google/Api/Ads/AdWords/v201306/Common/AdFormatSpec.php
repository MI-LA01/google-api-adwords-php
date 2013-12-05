<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A placement response object which provides information about one of the ad formats
 * supported by a placement.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdFormatSpec {
	/**
	 * @access public
	 * @var tnsSiteConstantsAdFormat
	 */
	public $format;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/o/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "AdFormatSpec";
	}

	public function __construct($format = NULL) {
		$this->format = $format;
	}
}