<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * This represents an entry in a map with a key of type Size
 * and value of type Dimensions.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Media_Size_DimensionsMapEntry {
	/**
	 * @access public
	 * @var tnsMediaSize
	 */
	public $key;

	/**
	 * @access public
	 * @var Dimensions
	 */
	public $value;

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
		return "Media_Size_DimensionsMapEntry";
	}

	public function __construct($key = NULL, $value = NULL) {
		$this->key = $key;
		$this->value = $value;
	}
}