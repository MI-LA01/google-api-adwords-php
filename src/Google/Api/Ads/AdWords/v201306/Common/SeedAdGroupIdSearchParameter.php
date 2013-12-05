<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s
 * that specifies that the supplied AdGroup should be used as a seed
 * for generating new ideas. For example, an AdGroup's keywords
 * would be used to generate new and related keywords.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SeedAdGroupIdSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

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
		return "SeedAdGroupIdSearchParameter";
	}

	public function __construct($adGroupId = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->adGroupId = $adGroupId;
		$this->SearchParameterType = $SearchParameterType;
	}
}