<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a Carrier Criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Carrier extends Criterion {
	/**
	 * @access public
	 * @var string
	 */
	public $name;

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
		return "Carrier";
	}

	public function __construct($name = NULL, $countryCode = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->name = $name;
		$this->countryCode = $countryCode;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}