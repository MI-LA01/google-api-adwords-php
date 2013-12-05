<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Basic information about a webpage.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class WebpageDescriptor {
	/**
	 * @access public
	 * @var string
	 */
	public $url;

	/**
	 * @access public
	 * @var string
	 */
	public $title;

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
		return "WebpageDescriptor";
	}

	public function __construct($url = NULL, $title = NULL) {
		$this->url = $url;
		$this->title = $title;
	}
}