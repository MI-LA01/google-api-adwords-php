<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code PLACEMENT} {@link IdeaType}s
 * used to filter results based on the type of website, known as
 * {@link com.google.ads.api.services.targetingideas.attributes.Type#PLACEMENT_TYPE},
 * that they appear in. For example, searches may be limited to find
 * results that only appear within mobile websites or feeds.
 * <p>This element is supported by following {@link IdeaType}s: PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class PlacementTypeSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var tnsSiteConstantsPlacementType[]
	 */
	public $placementTypes;

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
		return "PlacementTypeSearchParameter";
	}

	public function __construct($placementTypes = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->placementTypes = $placementTypes;
		$this->SearchParameterType = $SearchParameterType;
	}
}