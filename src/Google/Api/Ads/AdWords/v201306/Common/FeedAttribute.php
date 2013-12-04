<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * FeedAttributes define the types of data expected to be present in a Feed. A single FeedAttribute
 * specifies the expected type of the FeedItemAttributes with the same FeedAttributeId. Optionally,
 * a FeedAttribute can be marked as being part of a FeedItem's unique key.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedAttribute {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsFeedAttributeType
	 */
	public $type;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isPartOfKey;

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
		return "FeedAttribute";
	}

	public function __construct($id = NULL, $name = NULL, $type = NULL, $isPartOfKey = NULL) {
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
		$this->isPartOfKey = $isPartOfKey;
	}
}