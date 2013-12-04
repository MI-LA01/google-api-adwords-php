<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents Location criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type can be either targeted or excluded.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Location extends Criterion {
	/**
	 * @access public
	 * @var string
	 */
	public $locationName;

	/**
	 * @access public
	 * @var string
	 */
	public $displayType;

	/**
	 * @access public
	 * @var tnsLocationTargetingStatus
	 */
	public $targetingStatus;

	/**
	 * @access public
	 * @var Location[]
	 */
	public $parentLocations;

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
		return "Location";
	}

	public function __construct($locationName = NULL, $displayType = NULL, $targetingStatus = NULL, $parentLocations = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->locationName = $locationName;
		$this->displayType = $displayType;
		$this->targetingStatus = $targetingStatus;
		$this->parentLocations = $parentLocations;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}