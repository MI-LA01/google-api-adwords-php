<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of media that meet the criteria specified by the selector.
 * <p class="note"><b>Note:</b> {@code MediaService} will not return any
 * {@link ImageAd} image files.</p>
 *
 * @param serviceSelector Selects which media objects to return.
 * @return A list of {@code Media} objects.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MediaServiceGet {
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