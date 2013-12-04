<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A Feed identifies a source of data and its schema. The data for the Feed can either be
 * user-entered via the FeedItemService or system-generated, in which case the data is provided
 * automatically.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Feed {
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
	 * @var FeedAttribute[]
	 */
	public $attributes;

	/**
	 * @access public
	 * @var tnsFeedStatus
	 */
	public $status;

	/**
	 * @access public
	 * @var tnsFeedOrigin
	 */
	public $origin;

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
		return "Feed";
	}

	public function __construct($id = NULL, $name = NULL, $attributes = NULL, $status = NULL, $origin = NULL) {
		$this->id = $id;
		$this->name = $name;
		$this->attributes = $attributes;
		$this->status = $status;
		$this->origin = $origin;
	}
}