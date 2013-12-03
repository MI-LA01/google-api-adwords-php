<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a keyword.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Keyword extends Criterion {
	/**
	 * @access public
	 * @var string
	 */
	public $text;

	/**
	 * @access public
	 * @var tnsKeywordMatchType
	 */
	public $matchType;

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
		return "Keyword";
	}

	public function __construct($text = NULL, $matchType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->text = $text;
		$this->matchType = $matchType;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}