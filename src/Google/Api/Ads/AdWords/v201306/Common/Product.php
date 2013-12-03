<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Product targeting criteria, represents a filter for products in the
 * product feed that is defined by the advertiser. The criteria is used to
 * determine the products in a Merchant Center account to be used with the
 * ProductAds in the AdGroup. This criteria is available only to some advertisers.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Product extends Criterion {
	/**
	 * @access public
	 * @var ProductCondition[]
	 */
	public $conditions;

	/**
	 * @access public
	 * @var string
	 */
	public $text;

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
		return "Product";
	}

	public function __construct($conditions = NULL, $text = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->conditions = $conditions;
		$this->text = $text;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}