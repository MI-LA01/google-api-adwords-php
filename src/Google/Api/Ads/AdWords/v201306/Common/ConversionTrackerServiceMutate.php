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
 * Applies the list of mutate operations such as adding or updating conversion trackers.
 * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
 * <code>REMOVE</code> operator.</p>
 *
 * @param operations A list of mutate operations to perform.
 * @return The list of the conversion trackers as they appear after mutation,
 * in the same order as they appeared in the list of operations.
 * @throws com.google.ads.api.services.common.error.ApiException if problems
 * occurred while updating the data.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ConversionTrackerServiceMutate {
	/**
	 * @access public
	 * @var ConversionTrackerOperation[]
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