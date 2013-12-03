<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * A container for return values from the {@link BudgetOrderService#mutate}
 * method.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrderReturnValue extends ListReturnValue {
	/**
	 * @access public
	 * @var BudgetOrder[]
	 */
	public $value;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/billing/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "BudgetOrderReturnValue";
	}

	public function __construct($value = NULL, $ListReturnValueType = NULL) {
		parent::__construct();
		$this->value = $value;
		$this->ListReturnValueType = $ListReturnValueType;
	}
}