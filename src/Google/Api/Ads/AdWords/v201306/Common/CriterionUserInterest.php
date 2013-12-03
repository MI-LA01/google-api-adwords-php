<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * User Interest - represents a particular interest based vertical to be targeted.
 * Targeting UserInterest is currently in a limited beta.  If you'd like access
 * please speak with your account representative.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CriterionUserInterest extends Criterion {
	/**
	 * @access public
	 * @var integer
	 */
	public $userInterestId;

	/**
	 * @access public
	 * @var string
	 */
	public $userInterestName;

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
		return "CriterionUserInterest";
	}

	public function __construct($userInterestId = NULL, $userInterestName = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->userInterestId = $userInterestId;
		$this->userInterestName = $userInterestName;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}