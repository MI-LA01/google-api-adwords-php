<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a {@link TargetingIdea} returned by search criteria specified in
 * the {@link TargetingIdeaSelector}. Targeting ideas are keywords or placements
 * that are similar to those the user inputs.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TargetingIdea {
	/**
	 * @access public
	 * @var Type_AttributeMapEntry[]
	 */
	public $data;

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
		return "TargetingIdea";
	}

	public function __construct($data = NULL) {
		$this->data = $data;
	}
}