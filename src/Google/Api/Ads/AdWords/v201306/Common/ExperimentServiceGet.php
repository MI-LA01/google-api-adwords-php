<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of experiments specified by the experiment selector from
 * the customer's account.
 * @param serviceSelector The selector specifying the {@link Experiment}s to return.
 * If selector is empty, all experiments are returned.
 * @return List of experiments meeting all the criteria of each selector.
 * @throws ApiException if problems occurred while fetching experiment information.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExperimentServiceGet {
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