<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Retrieves the geographic location information for the address specified.
 *
 * @param selector specifies the addresses.
 * @return list of {@link GeoLocation} objects. Returns {@link InvalidGeoLocation} object if
 * the address cannot be geocoded.
 * @throws ApiException if problems occurred while retrieving the location information
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class GeoLocationServiceGet {
	/**
	 * @access public
	 * @var GeoLocationSelector
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