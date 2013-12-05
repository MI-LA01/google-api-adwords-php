<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Base interface for types of display ads.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DisplayType {
	/**
	 * @access public
	 * @var FlashDisplayType
	 */
	public $FlashDisplayType;

	/**
	 * @access public
	 * @var HtmlDisplayType
	 */
	public $HtmlDisplayType;

	/**
	 * @access public
	 * @var ImageDisplayType
	 */
	public $ImageDisplayType;

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
		return "DisplayType";
	}

	public function __construct($FlashDisplayType = NULL, $HtmlDisplayType = NULL, $ImageDisplayType = NULL) {
		$this->FlashDisplayType = $FlashDisplayType;
		$this->HtmlDisplayType = $HtmlDisplayType;
		$this->ImageDisplayType = $ImageDisplayType;
	}
}