<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a Language criterion.
 * <p>A criterion of this type can only be created using an ID. A criterion of this type is only targetable.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Language extends Criterion {
	/**
	 * @access public
	 * @var string
	 */
	public $code;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

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
		return "Language";
	}

	public function __construct($code = NULL, $name = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->code = $code;
		$this->name = $name;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}