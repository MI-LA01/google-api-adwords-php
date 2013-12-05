<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s used to
 * filter the results by the amount of competition (eg: LOW, MEDIUM, HIGH).
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CompetitionSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var tnsCompetitionSearchParameterLevel[]
	 */
	public $levels;

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
		return "CompetitionSearchParameter";
	}

	public function __construct($levels = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->levels = $levels;
		$this->SearchParameterType = $SearchParameterType;
	}
}