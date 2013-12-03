<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Use verticals to target or exclude placements in the Google Display Network
 * based on the category into which the placement falls (for example, "Pets &amp;
 * Animals/Pets/Dogs").
 * <a href="/adwords/api/docs/appendix/verticals">View the complete list
 * of available vertical categories.</a>
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Vertical extends Criterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $verticalId;

	/**
	 * @access public
	 * @var integer
	 */
	public $verticalParentId;

	/**
	 * @access public
	 * @var string[]
	 */
	public $path;

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
		return "Vertical";
	}

	public function __construct($verticalId = NULL, $verticalParentId = NULL, $path = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->verticalId = $verticalId;
		$this->verticalParentId = $verticalParentId;
		$this->path = $path;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}