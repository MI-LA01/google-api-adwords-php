<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * Class to represent a single sitelink
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Sitelink {
	/**
	 * @access public
	 * @var string
	 */
	public $displayText;

	/**
	 * @access public
	 * @var string
	 */
	public $destinationUrl;

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
		return "Sitelink";
	}

	public function __construct($displayText = NULL, $destinationUrl = NULL) {
		$this->displayText = $displayText;
		$this->destinationUrl = $destinationUrl;
	}
}