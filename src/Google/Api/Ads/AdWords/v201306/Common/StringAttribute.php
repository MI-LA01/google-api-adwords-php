<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * {@link Attribute} type that contains a string value.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class StringAttribute extends Attribute {
	/**
	 * @access public
	 * @var string
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
		return "StringAttribute";
	}

	public function __construct($value = NULL, $AttributeType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->AttributeType = $AttributeType;
	}
}