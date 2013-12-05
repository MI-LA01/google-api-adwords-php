<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A set of {@link SearchParameter}s are supplied to the
 * {@link com.google.ads.api.services.targetingideas.TargetingIdeaSelector}
 * to specify how the user wants to filter the set of all possible
 * {@link com.google.ads.api.services.targetingideas.TargetingIdea}s.
 *
 * There is a {@link SearchParameter} for all types of inputs.
 * {@link SearchParameter}s can conceptually be broken down into two types.
 * <ul>
 * <li>Input {@link SearchParameter}s provide the seed information from which
 * ideas should be generated or statistic information is desired
 * (e.g. {@link RelatedToQuerySearchParameter},
 * {@link RelatedToUrlSearchParameter}, etc).
 * Such {@link SearchParameters} are required for valid requests.</li>
 * <li>Filter {@link SearchParameter}s are used to trim down the results based
 * on {@link com.google.ads.api.services.targetingideas.attributes.Attribute}
 * related information (eg. {@link CompetitionSearchParameter}, etc.).</li>
 * </ul><p>
 *
 * A request should only contain one instance of each {@link SearchParameter}
 * <p>One or more of the following {@link SearchParameter}s are required:<br/>
 * <ul><li>{@link CategoryProductsAndServicesSearchParameter}</li>
 * <li>{@link RelatedToQuerySearchParameter}</li>
 * <li>{@link RelatedToUrlSearchParameter}</li>
 * <li>{@link SeedAdGroupIdSearchParameter}</li>
 * </ul><p>
 * <p><b>{@link IdeaType} KEYWORD supports following {@link SearchParameter}s:</b><br/>
 * <ul>
 * <li>{@link CompetitionSearchParameter}</li>
 * <li>{@link ExcludedKeywordSearchParameter}</li>
 * <li>{@link IdeaTextFilterSearchParameter}</li>
 * <li>{@link IncludeAdultContentSearchParameter}</li>
 * <li>{@link CategoryProductsAndServicesSearchParameter}</li>
 * <li>{@link LanguageSearchParameter}</li>
 * <li>{@link NetworkSearchParameter}</li>
 * <li>{@link RelatedToQuerySearchParameter}</li>
 * <li>{@link RelatedToUrlSearchParameter}</li>
 * <li>{@link SearchVolumeSearchParameter}</li>
 * <li>{@link SeedAdGroupIdSearchParameter}</li>
 * </ul><p>
 * <p><b>{@link IdeaType} PLACEMENT supports following {@link SearchParameter}s:</b><br/>
 * <ul>
 * <li>{@link LanguageSearchParameter}</li>
 * <li>{@link PlacementTypeSearchParameter}</li>
 * <li>{@link RelatedToQuerySearchParameter}</li>
 * <li>{@link RelatedToUrlSearchParameter}</li>
 * </ul><p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SearchParameter {
	/**
	 * @access public
	 * @var string
	 */
	public $SearchParameterType;

	private $_parameterMap = array (
			"SearchParameter.Type" => "SearchParameterType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	*/
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

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
		return "SearchParameter";
	}

	public function __construct($SearchParameterType = NULL) {
		$this->SearchParameterType = $SearchParameterType;
	}
}