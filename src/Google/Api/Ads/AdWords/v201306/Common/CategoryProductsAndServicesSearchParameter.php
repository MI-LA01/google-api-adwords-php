<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
 * sets a keyword category that all search results should belong to.
 * Uses the newer "Products and Services" taxonomy.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CategoryProductsAndServicesSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var integer
	 */
	public $categoryId;

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
		return "CategoryProductsAndServicesSearchParameter";
	}

	public function __construct($categoryId = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->categoryId = $categoryId;
		$this->SearchParameterType = $SearchParameterType;
	}
}