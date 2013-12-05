<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Contains a subset of {@link TargetingIdea}s from the search criteria
 * specified by a {@link TargetingIdeaSelector}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TargetingIdeaPage {
	/**
	 * @access public
	 * @var integer
	 */
	public $totalNumEntries;

	/**
	 * @access public
	 * @var TargetingIdea[]
	 */
	public $entries;

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
		return "TargetingIdeaPage";
	}

	public function __construct($totalNumEntries = NULL, $entries = NULL) {
		$this->totalNumEntries = $totalNumEntries;
		$this->entries = $entries;
	}
}