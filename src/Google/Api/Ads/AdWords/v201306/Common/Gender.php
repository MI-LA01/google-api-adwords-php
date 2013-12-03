<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a Gender criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only excludable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Gender extends Criterion {
	/**
	 * @access public
	 * @var tnsGenderGenderType
	 */
	public $genderType;

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
		return "Gender";
	}

	public function __construct($genderType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->genderType = $genderType;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}