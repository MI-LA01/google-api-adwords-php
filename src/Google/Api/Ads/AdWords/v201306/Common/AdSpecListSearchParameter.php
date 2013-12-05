<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s used to
 * filter the results by the list of {@link AdSpec}s. See {@link AdSpec}
 * documentation for details on available options.
 * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdSpecListSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var AdSpec[]
	 */
	public $adSpecs;

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
		return "AdSpecListSearchParameter";
	}

	public function __construct($adSpecs = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->adSpecs = $adSpecs;
		$this->SearchParameterType = $SearchParameterType;
	}
}