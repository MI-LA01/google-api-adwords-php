<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for both {@code PLACEMENT} and {@code KEYWORD}
 * {@link IdeaType}s used to indicate multiple language being targeted. This can
 * be used, for example, to search for {@code KEYWORD} {@link IdeaType}s that
 * are best for Japanese language.
 *
 * <p>The service allows at most one language to be targeted for KEYWORD requests and 10 languages
 * for PLACEMENT requests.
 * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LanguageSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var Language[]
	 */
	public $languages;

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
		return "LanguageSearchParameter";
	}

	public function __construct($languages = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->languages = $languages;
		$this->SearchParameterType = $SearchParameterType;
	}
}