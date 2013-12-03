<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
 *
 *
 *
 * Adds, removes or updates ad group bid modifier overrides.
 *
 * @param operations The operations to apply.
 * @return The added ad group bid modifier overrides.
 * @throws ApiException when there is at least one error with the request.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupBidModifierServiceMutate {
	/**
	 * @access public
	 * @var AdGroupBidModifierOperation[]
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