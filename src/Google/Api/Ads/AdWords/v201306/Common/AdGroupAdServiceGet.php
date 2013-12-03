<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of AdGroupAds.
 *
 * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
 * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
 * @throws ApiException when there is at least one error with the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupAdServiceGet {
	/**
	 * @access public
	 * @var Selector
	 */
	public $serviceSelector;

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

	public function __construct($serviceSelector = NULL) {
		$this->serviceSelector = $serviceSelector;
	}
}
