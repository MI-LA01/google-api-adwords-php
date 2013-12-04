<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of {@link LocationCriterion}'s that match the specified selector.
 *
 * @param selector filters the LocationCriterion to be returned.
 * @return A list of location criterion.
 * @throws ApiException when there is at least one error with the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationCriterionServiceGet {
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