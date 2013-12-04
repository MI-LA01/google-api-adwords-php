<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents data that encapsulates a location criterion.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class LocationCriterion {
	/**
	 * @access public
	 * @var Location
	 */
	public $location;

	/**
	 * @access public
	 * @var string
	 */
	public $canonicalName;

	/**
	 * @access public
	 * @var integer
	 */
	public $reach;

	/**
	 * @access public
	 * @var string
	 */
	public $locale;

	/**
	 * @access public
	 * @var string
	 */
	public $searchTerm;

	/**
	 * @access public
	 * @var string
	 */
	public $countryCode;

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
		return "LocationCriterion";
	}

	public function __construct($location = NULL, $canonicalName = NULL, $reach = NULL, $locale = NULL, $searchTerm = NULL, $countryCode = NULL) {
		$this->location = $location;
		$this->canonicalName = $canonicalName;
		$this->reach = $reach;
		$this->locale = $locale;
		$this->searchTerm = $searchTerm;
		$this->countryCode = $countryCode;
	}
}

