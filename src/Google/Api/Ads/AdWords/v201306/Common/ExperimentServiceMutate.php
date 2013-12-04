<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 *
 *
 *
 * Mutates (add, update or remove) experiments.
 * <b>Note:</b> To REMOVE use SET and mark status to DELETED.
 * @param operations A list of unique operations.
 * The same experiment cannot be specified in more than one operation.
 * @return The updated experiments. The list of experiments is returned in
 * the same order in which it came in as input.
 * @throws ApiException if problems occurred while updating experiment information.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ExperimentServiceMutate {
	/**
	 * @access public
	 * @var ExperimentOperation[]
	 */
	public $operations;

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
		return "";
	}

	public function __construct($operations = NULL) {
		$this->operations = $operations;
	}
}