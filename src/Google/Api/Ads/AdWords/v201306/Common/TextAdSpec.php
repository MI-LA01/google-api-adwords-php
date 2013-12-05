<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specification for a text ad. Currently there are no customizable
 * options on text ads, but the presence of a {@code TextAdSpec} in a
 * request indicates that text ads are a desired result, and the presence
 * of a {@code TextAdSpec} in a response indicates that there are text
 * ads available in the requested inventory.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TextAdSpec {
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
		return "TextAdSpec";
	}

	public function __construct() {
	}
}