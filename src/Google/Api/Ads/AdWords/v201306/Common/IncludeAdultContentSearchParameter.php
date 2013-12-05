<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * {@link SearchParameter} that specifies whether adult content should be
 * returned.<p>
 *
 * Presence of this {@link SearchParameter} will allow adult keywords
 * to be included in the results.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class IncludeAdultContentSearchParameter extends SearchParameter {
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
		return "IncludeAdultContentSearchParameter";
	}

	public function __construct($SearchParameterType = NULL) {
		parent::__construct();
		$this->SearchParameterType = $SearchParameterType;
	}
}