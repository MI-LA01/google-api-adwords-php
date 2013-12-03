<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
 *
 *
 *
 * Sets and removes ad parameters.
 * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
 * for new ad parameters.</p>
 *
 * <ul class="nolist">
 * <li>{@code SET}: Creates or updates an ad parameter, setting the new
 * parameterized value for the given ad group / keyword pair.
 * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
 * </code> specified in the ad text will be used.</li>
 * </ul>
 *
 * @param operations The operations to perform.
 * @return A list of ad parameters, where each entry in the list is the
 * result of applying the operation in the input list with the same index.
 * For a {@code SET} operation, the returned ad parameter will contain the
 * updated values. For a {@code REMOVE} operation, the returned ad parameter
 * will simply be the ad parameter that was removed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdParamServiceMutate {
	/**
	 * @access public
	 * @var AdParamOperation[]
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