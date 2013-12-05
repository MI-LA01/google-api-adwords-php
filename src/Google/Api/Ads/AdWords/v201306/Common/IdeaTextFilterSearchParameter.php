<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A {@link SearchParameter} for {@code KEYWORD} {@link IdeaType}s that
 * specifies a collection of strings by which the results should be
 * constrained. This guarantees that each idea in the result will match
 * at least one of the {@code included} values.
 *
 * For this {@link SearchParameter}, excluded items will always take
 * priority over included ones.
 *
 * This can handle a maximum of 200 (included + excluded) elements.
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class IdeaTextFilterSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var string[]
	 */
	public $included;

	/**
	 * @access public
	 * @var string[]
	 */
	public $excluded;

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
		return "IdeaTextFilterSearchParameter";
	}

	public function __construct($included = NULL, $excluded = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->included = $included;
		$this->excluded = $excluded;
		$this->SearchParameterType = $SearchParameterType;
	}
}