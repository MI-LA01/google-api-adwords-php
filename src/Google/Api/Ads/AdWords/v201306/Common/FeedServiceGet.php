<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of Feeds that meet the selector criteria.
 *
 * @param selector Determines which Feeds to return. If empty all
 * Feeds are returned.
 * @return The list of Feeds.
 * @throws ApiException Indicates a problem with the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedServiceGet {
	/**
	 * @access public
	 * @var Selector
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