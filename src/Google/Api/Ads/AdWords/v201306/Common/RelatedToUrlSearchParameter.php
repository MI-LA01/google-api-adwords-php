<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code KEYWORD} and {@code PLACEMENT}
 * {@link IdeaType}s that specifies a set of URLs that results should
 * in some way be related too. For example, keyword results would be
 * similar to content keywords found on the related URLs.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class RelatedToUrlSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var string[]
	 */
	public $urls;

	/**
	 * @access public
	 * @var boolean
	 */
	public $includeSubUrls;

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
		return "RelatedToUrlSearchParameter";
	}

	public function __construct($urls = NULL, $includeSubUrls = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->urls = $urls;
		$this->includeSubUrls = $includeSubUrls;
		$this->SearchParameterType = $SearchParameterType;
	}
}