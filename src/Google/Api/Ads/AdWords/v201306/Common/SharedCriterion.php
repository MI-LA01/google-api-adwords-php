<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SharedCriterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $sharedSetId;

	/**
	 * @access public
	 * @var Criterion
	 */
	public $criterion;

	/**
	 * @access public
	 * @var boolean
	 */
	public $negative;

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
		return "SharedCriterion";
	}

	public function __construct($sharedSetId = NULL, $criterion = NULL, $negative = NULL) {
		$this->sharedSetId = $sharedSetId;
		$this->criterion = $criterion;
		$this->negative = $negative;
	}
}