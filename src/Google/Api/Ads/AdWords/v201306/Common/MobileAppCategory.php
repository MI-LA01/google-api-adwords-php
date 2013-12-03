<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the mobile app category to be targeted.
 * <a href="/adwords/api/docs/appendix/mobileappcategories">View the complete list of
 * available mobile app categories</a>.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MobileAppCategory extends Criterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $mobileAppCategoryId;

	/**
	 * @access public
	 * @var string
	 */
	public $displayName;

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
		return "MobileAppCategory";
	}

	public function __construct($mobileAppCategoryId = NULL, $displayName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->mobileAppCategoryId = $mobileAppCategoryId;
		$this->displayName = $displayName;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}