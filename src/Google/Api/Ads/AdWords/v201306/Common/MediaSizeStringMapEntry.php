<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * This represents an entry in a map with a key of type Size
 * and value of type String.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MediaSizeStringMapEntry {
	/**
	 * @access public
	 * @var tnsMediaSize
	 */
	public $key;

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
		return "https://adwords.google.com/api/adwords/cm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "Media_Size_StringMapEntry";
	}

	public function __construct($key = NULL, $value = NULL) {
		$this->key = $key;
		$this->value = $value;
	}
}