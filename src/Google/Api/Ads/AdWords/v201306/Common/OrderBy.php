<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specifies how the resulting information should be sorted.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OrderBy {
	/**
	 * @access public
	 * @var string
	 */
	public $field;

	/**
	 * @access public
	 * @var tnsSortOrder
	 */
	public $sortOrder;

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
		return "OrderBy";
	}

	public function __construct($field = NULL, $sortOrder = NULL) {
		$this->field = $field;
		$this->sortOrder = $sortOrder;
	}
}