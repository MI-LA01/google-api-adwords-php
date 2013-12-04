<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a feed item's value for a particular feed attribute. A feed item's value is
 * composed of a collection of these attribute values.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedItemAttributeValue {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedAttributeId;

	/**
	 * @access public
	 * @var integer
	 */
	public $integerValue;

	/**
	 * @access public
	 * @var double
	 */
	public $doubleValue;

	/**
	 * @access public
	 * @var boolean
	 */
	public $booleanValue;

	/**
	 * @access public
	 * @var string
	 */
	public $stringValue;

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
		return "FeedItemAttributeValue";
	}

	public function __construct($feedAttributeId = NULL, $integerValue = NULL, $doubleValue = NULL, $booleanValue = NULL, $stringValue = NULL) {
		$this->feedAttributeId = $feedAttributeId;
		$this->integerValue = $integerValue;
		$this->doubleValue = $doubleValue;
		$this->booleanValue = $booleanValue;
		$this->stringValue = $stringValue;
	}
}