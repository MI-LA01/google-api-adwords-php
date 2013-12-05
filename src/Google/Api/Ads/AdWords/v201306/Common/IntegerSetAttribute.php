<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * {@link Attribute} type that contains a Set of integer values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class IntegerSetAttribute extends Attribute {
	/**
	 * @access public
	 * @var integer[]
	 */
	public $value;

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
		return "IntegerSetAttribute";
	}

	public function __construct($value = NULL, $AttributeType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->AttributeType = $AttributeType;
	}
}