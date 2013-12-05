<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Placement request/response object which provides details about instream
 * ad types, options, and other available configuration variables.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class InStreamAdSpec {
	/**
	 * @access public
	 * @var tnsInStreamAdSpecInStreamType[]
	 */
	public $inStreamTypes;

	/**
	 * @access public
	 * @var integer[]
	 */
	public $durations;

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
		return "InStreamAdSpec";
	}

	public function __construct($inStreamTypes = NULL, $durations = NULL) {
		$this->inStreamTypes = $inStreamTypes;
		$this->durations = $durations;
	}
}