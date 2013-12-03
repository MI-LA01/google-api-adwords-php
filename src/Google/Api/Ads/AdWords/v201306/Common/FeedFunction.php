<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a function where its operator is applied to its argument operands
 * resulting in a return value. It has the form
 * (Operand... Operator Operand...). The type of the return value depends on
 * the operator being applied and the type of the operands.
 *
 * <p class="special">Operands per function is limited to <b>20</b>.</p>
 *
 * <p>Here is a code example:</p>
 *
 * <pre><code>
 *
 * // For example "feed_attribute == 30" can be represented as:
 * FeedId feedId = (FeedId of Feed associated with feed_attribute)
 * FeedAttributeId feedAttributeId = (FeedAttributeId of feed_attribute)
 * Function function = new Function();
 * function.setLhsOperand(
 * Arrays.asList((Operand) new FeedAttributeOperand(feedId, feedAttributeId)));
 * function.setOperator(Operator.IN);
 * function.setRhsOperand(
 * Arrays.asList((Operand) new ConstantOperand(30L)));
 *
 * // Another example matching on multiple values:
 * "feed_item_id IN (10, 20, 30)" can be represented as:
 *
 * Function function = new Function();
 * function.setLhsOperand(
 * Arrays.asList((Operand) new RequestContextOperand(ContextType.FEED_ITEM_ID)));
 * function.setOperator(Operator.IN);
 * function.setRhsOperand(Arrays.asList(
 * (Operand) new ConstantOperand(10L), new ConstantOperand(20L), new ConstantOperand(30L)));
 * </code></pre>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class FeedFunction {
	/**
	 * @access public
	 * @var tnsFunctionOperator
	 */
	public $operator;

	/**
	 * @access public
	 * @var FunctionArgumentOperand[]
	 */
	public $lhsOperand;

	/**
	 * @access public
	 * @var FunctionArgumentOperand[]
	 */
	public $rhsOperand;

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
		return "Function";
	}

	public function __construct($operator = NULL, $lhsOperand = NULL, $rhsOperand = NULL) {
		$this->operator = $operator;
		$this->lhsOperand = $lhsOperand;
		$this->rhsOperand = $rhsOperand;
	}
}