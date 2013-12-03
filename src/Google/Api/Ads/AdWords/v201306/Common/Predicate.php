<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Predicate {
	/**
	 * @access public
	 * @var string
	 */
	public $field;

	/**
	 * @access public
	 * @var tnsPredicateOperator
	 */
	public $operator;

	/**
	 * @access public
	 * @var string[]
	 */
	public $values;

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
		return "Predicate";
	}

	public function __construct($field = NULL, $operator = NULL, $values = NULL) {
		$this->field = $field;
		$this->operator = $operator;
		$this->values = $values;
	}
}