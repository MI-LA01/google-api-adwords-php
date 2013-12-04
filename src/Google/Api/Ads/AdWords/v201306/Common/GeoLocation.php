<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Class representing a location with its geographic coordinates.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class GeoLocation {
	/**
	 * @access public
	 * @var GeoPoint
	 */
	public $geoPoint;

	/**
	 * @access public
	 * @var Address
	 */
	public $address;

	/**
	 * @access public
	 * @var base64Binary
	 */
	public $encodedLocation;

	/**
	 * @access public
	 * @var string
	 */
	public $GeoLocationType;

	private $_parameterMap = array (
			"GeoLocation.Type" => "GeoLocationType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	*/
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

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
		return "GeoLocation";
	}

	public function __construct($geoPoint = NULL, $address = NULL, $encodedLocation = NULL, $GeoLocationType = NULL) {
		$this->geoPoint = $geoPoint;
		$this->address = $address;
		$this->encodedLocation = $encodedLocation;
		$this->GeoLocationType = $GeoLocationType;
	}
}