<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
 *
 *
 *
 * Mutates BudgetOrders, supported operations are:
 * <p><code>ADD</code>: Adds a {@link BudgetOrder} to the billing account
 * specified by the billing account ID.</p>
 * <p><code>SET</code>: Sets the start/end date and amount of the
 * {@link BudgetOrder}.</p>
 * <p><code>REMOVE</code>: Cancels the {@link BudgetOrder} (status change).</p>
 * <p class="warning"><b>Warning:</b> The <code>BudgetOrderService</code>
 * is limited to one operation per mutate request. Any attempt to make more
 * than one operation will result in an <code>ApiException</code>.</p>
 * @param operations A list of operations, <b>however currently we only
 * support one operation per mutate call</b>.
 * @return BudgetOrders affected by the mutate operation.
 * @throws ApiException
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BudgetOrderServiceMutate {
	/**
	 * @access public
	 * @var BudgetOrderOperation[]
	 */
	public $operations;

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
		return "";
	}

	public function __construct($operations = NULL) {
		$this->operations = $operations;
	}
}