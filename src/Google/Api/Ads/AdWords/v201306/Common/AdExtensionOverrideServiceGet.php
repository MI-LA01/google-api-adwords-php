<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Returns a list of AdExtensionOverrides based on an
 * AdExtensionOverrideSelector.
 * @param selector The selector specifying the query.
 * @return The page containing the AdExtensionOverride which meet the
 * criteria specified by the selector.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverrideServiceGet {
	/**
	 * @access public
	 * @var AdExtensionOverrideSelector
	 */
	public $selector;

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
		return "";
	}

	public function __construct($selector = NULL) {
		$this->selector = $selector;
	}
}