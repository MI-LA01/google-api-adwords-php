<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

class AdGroupBidModifier {
	/**
	 * @access public
	 * @var integer
	 */
	public $campaignId;

	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var Criterion
	 */
	public $criterion;

	/**
	 * @access public
	 * @var double
	 */
	public $bidModifier;

	/**
	 * @access public
	 * @var tnsBidModifierSource
	 */
	public $bidModifierSource;

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
		return "AdGroupBidModifier";
	}

	public function __construct($campaignId = NULL, $adGroupId = NULL, $criterion = NULL, $bidModifier = NULL, $bidModifierSource = NULL) {
		$this->campaignId = $campaignId;
		$this->adGroupId = $adGroupId;
		$this->criterion = $criterion;
		$this->bidModifier = $bidModifier;
		$this->bidModifierSource = $bidModifierSource;
	}
}