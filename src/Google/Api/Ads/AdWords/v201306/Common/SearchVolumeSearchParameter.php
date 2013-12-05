<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} that specifies the level of search volume expected in results,
 * and it has a direct relationship to
 * {@link com.google.ads.api.services.targetingideas.external.AttributeType#SEARCH_VOLUME}.
 * Absence of a {@link SearchVolumeSearchParameter} in a
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector} is
 * equivalent to having no constraint on search volume specified.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SearchVolumeSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var LongComparisonOperation
	 */
	public $operation;

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
		return "SearchVolumeSearchParameter";
	}

	public function __construct($operation = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->operation = $operation;
		$this->SearchParameterType = $SearchParameterType;
	}
}