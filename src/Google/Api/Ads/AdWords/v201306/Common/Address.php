<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Structure to specify an address location.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Address {
	/**
	 * @access public
	 * @var string
	 */
	public $streetAddress;

	/**
	 * @access public
	 * @var string
	 */
	public $streetAddress2;

	/**
	 * @access public
	 * @var string
	 */
	public $cityName;

	/**
	 * @access public
	 * @var string
	 */
	public $provinceCode;

	/**
	 * @access public
	 * @var string
	 */
	public $provinceName;

	/**
	 * @access public
	 * @var string
	 */
	public $postalCode;

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
		return "Address";
	}

	public function __construct($streetAddress = NULL, $streetAddress2 = NULL, $cityName = NULL, $provinceCode = NULL, $provinceName = NULL, $postalCode = NULL, $countryCode = NULL) {
		$this->streetAddress = $streetAddress;
		$this->streetAddress2 = $streetAddress2;
		$this->cityName = $cityName;
		$this->provinceCode = $provinceCode;
		$this->provinceName = $provinceName;
		$this->postalCode = $postalCode;
		$this->countryCode = $countryCode;
	}
}