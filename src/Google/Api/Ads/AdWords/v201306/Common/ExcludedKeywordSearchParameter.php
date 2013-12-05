<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
 * specifies {@link Keyword}s that should be excluded from the results.<p>
 *
 * The {@link KeywordMatchType} associated with these keywords is used to
 * provide various filtering strategies. For example, the excluded keyword
 * <b>"brand x player"</b> will exclude ideas from the resulting ideas as
 * described by the table below.
 *
 * <table border="1">
 * <tr style="font-weight: bold;">
 * <th>Idea</th>
 * <th>{@code BROAD}</th>
 * <th>{@code PHRASE}</th>
 * <th>{@code EXACT}</th>
 * </tr>
 * <tr>
 * <td>brand x player</td>
 * <td>Exclude</td>
 * <td>Exclude</td>
 * <td>Exclude</td>
 * </tr>
 * <tr>
 * <td>blu-ray brand x player</td>
 * <td>Exclude</td>
 * <td>Exclude</td>
 * <td>Include</td>
 * </tr>
 * <tr>
 * <td>brand x dvd player</td>
 * <td>Exclude</td>
 * <td>Include</td>
 * <td>Include</td>
 * </tr>
 * <tr>
 * <td>brand x dvd</td>
 * <td>Include</td>
 * <td>Include</td>
 * <td>Include</td>
 * </tr>
 * </table>
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExcludedKeywordSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var Keyword[]
	 */
	public $keywords;

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
		return "ExcludedKeywordSearchParameter";
	}

	public function __construct($keywords = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->keywords = $keywords;
		$this->SearchParameterType = $SearchParameterType;
	}
}