<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * This represents an entry in a map with a key of type Type
 * and value of type Attribute.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Type_AttributeMapEntry {
	/**
	 * @access public
	 * @var tnsAttributeType
	 */
	public $key;

	/**
	 * @access public
	 * @var Attribute
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
		return "Type_AttributeMapEntry";
	}

	public function __construct($key = NULL, $value = NULL) {
		$this->key = $key;
		$this->value = $value;
	}
}