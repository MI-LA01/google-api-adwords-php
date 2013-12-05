<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A descriptor for finding {@link TargetingIdea}s that match the specified
 * criteria.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TargetingIdeaSelector {
	/**
	 * @access public
	 * @var SearchParameter[]
	 */
	public $searchParameters;

	/**
	 * @access public
	 * @var tnsIdeaType
	 */
	public $ideaType;

	/**
	 * @access public
	 * @var tnsRequestType
	 */
	public $requestType;

	/**
	 * @access public
	 * @var tnsAttributeType[]
	 */
	public $requestedAttributeTypes;

	/**
	 * @access public
	 * @var Paging
	 */
	public $paging;

	/**
	 * @access public
	 * @var string
	 */
	public $localeCode;

	/**
	 * @access public
	 * @var string
	 */
	public $currencyCode;

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
		return "TargetingIdeaSelector";
	}

	public function __construct($searchParameters = NULL, $ideaType = NULL, $requestType = NULL, $requestedAttributeTypes = NULL, $paging = NULL, $localeCode = NULL, $currencyCode = NULL) {
		$this->searchParameters = $searchParameters;
		$this->ideaType = $ideaType;
		$this->requestType = $requestType;
		$this->requestedAttributeTypes = $requestedAttributeTypes;
		$this->paging = $paging;
		$this->localeCode = $localeCode;
		$this->currencyCode = $currencyCode;
	}
}