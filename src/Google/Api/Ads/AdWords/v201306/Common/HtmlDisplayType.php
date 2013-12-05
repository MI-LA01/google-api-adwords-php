<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * HTML-specific options for display ads are contained within
 * this class.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class HtmlDisplayType {
	/**
	 * @access public
	 * @var tnsHtmlDisplayTypeHtmlOption
	 */
	public $htmlOption;

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
		return "HtmlDisplayType";
	}

	public function __construct($htmlOption = NULL) {
		$this->htmlOption = $htmlOption;
	}
}