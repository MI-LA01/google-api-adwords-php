<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a Proximity Criterion.
 *
 * A proximity is an area within a certain radius of a point with the center point being described
 * by a lat/long pair. The caller may also alternatively provide address fields which will be
 * geocoded into a lat/long pair. Note: If a geoPoint value is provided, the address is not
 * used for calculating the lat/long to target.
 * <p> A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Proximity extends Criterion {
	/**
	 * @access public
	 * @var GeoPoint
	 */
	public $geoPoint;

	/**
	 * @access public
	 * @var tnsProximityDistanceUnits
	 */
	public $radiusDistanceUnits;

	/**
	 * @access public
	 * @var double
	 */
	public $radiusInUnits;

	/**
	 * @access public
	 * @var Address
	 */
	public $address;

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
		return "Proximity";
	}

	public function __construct($geoPoint = NULL, $radiusDistanceUnits = NULL, $radiusInUnits = NULL, $address = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->geoPoint = $geoPoint;
		$this->radiusDistanceUnits = $radiusDistanceUnits;
		$this->radiusInUnits = $radiusInUnits;
		$this->address = $address;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}