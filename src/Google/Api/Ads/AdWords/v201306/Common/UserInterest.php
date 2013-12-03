<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a particular interest based vertical to be targeted.
 * User interest may be used for defining logical user lists.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class UserInterest {
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
	 * @var tnsSizeRange
	 */
	public $sizeRange;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/rm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "UserInterest";
	}

	public function __construct($id = NULL, $name = NULL, $sizeRange = NULL) {
		$this->id = $id;
		$this->name = $name;
		$this->sizeRange = $sizeRange;
	}
}