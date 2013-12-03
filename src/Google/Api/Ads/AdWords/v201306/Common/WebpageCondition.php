<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Logical expression for targeting webpages of an advertiser's website.
 *
 * <p>A condition is defined as {@code operand OP argument}
 * where {@code operand} is one of the values enumerated in
 * {@link WebpageConditionOperand}, and, based on this value,
 * {@code OP} is either of {@code EQUALS} or {@code CONTAINS}.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class WebpageCondition {
	/**
	 * @access public
	 * @var tnsWebpageConditionOperand
	 */
	public $operand;

	/**
	 * @access public
	 * @var string
	 */
	public $argument;

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
		return "WebpageCondition";
	}

	public function __construct($operand = NULL, $argument = NULL) {
		$this->operand = $operand;
		$this->argument = $argument;
	}
}