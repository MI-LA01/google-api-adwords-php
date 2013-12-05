<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Interface for ad specifications to implement. See individual spec
 * documentation for more details on how to use each type, and
 * {@link AdSpecListSearchParameter} to understand what these specs are for.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdSpec {
	/**
	 * @access public
	 * @var DisplayAdSpec
	 */
	public $DisplayAdSpec;

	/**
	 * @access public
	 * @var InStreamAdSpec
	 */
	public $InStreamAdSpec;

	/**
	 * @access public
	 * @var TextAdSpec
	 */
	public $TextAdSpec;

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
		return "AdSpec";
	}

	public function __construct($DisplayAdSpec = NULL, $InStreamAdSpec = NULL, $TextAdSpec = NULL) {
		$this->DisplayAdSpec = $DisplayAdSpec;
		$this->InStreamAdSpec = $InStreamAdSpec;
		$this->TextAdSpec = $TextAdSpec;
	}
}