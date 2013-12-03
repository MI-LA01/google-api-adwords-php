<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Parameter of Webpage criterion, expressed as a list of conditions, or
 * logical expressions, for targeting webpages of an advertiser's website.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class WebpageParameter extends CriterionParameter {
	/**
	 * @access public
	 * @var string
	 */
	public $criterionName;

	/**
	 * @access public
	 * @var WebpageCondition[]
	 */
	public $conditions;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/cm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "WebpageParameter";
	}

	public function __construct($criterionName = NULL, $conditions = NULL, $CriterionParameterType = NULL) {
		parent::__construct();
		$this->criterionName = $criterionName;
		$this->conditions = $conditions;
		$this->CriterionParameterType = $CriterionParameterType;
	}
}