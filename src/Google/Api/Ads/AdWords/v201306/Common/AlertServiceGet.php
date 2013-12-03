<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Gets the list of alerts matching the specified clients and time period.
 *
 * @param selector selects the alerts for which to search.
 * @return a page of alerts.
 * @throws ApiException if an error occurs
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AlertServiceGet {
	/**
	 * @access public
	 * @var AlertSelector
	 */
	public $selector;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
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