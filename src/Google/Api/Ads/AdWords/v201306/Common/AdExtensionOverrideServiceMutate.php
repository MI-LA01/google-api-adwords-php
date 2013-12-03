<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
 *
 *
 *
 * Applies the list of mutate operations.
 *
 * <p>Conditions for adding an ad-level AdExtension override using an AdExtension
 * under the Ad's campaign:</p>
 * <ol>
 * <li>If the text ad has never been overridden, an AdExtension override may
 * be set on the creative using an extension under the campaign, along with
 * any override info.</li>
 * <li>If the text ad has been overriden before, the latitude/longitude of the
 * new extension override must be the same as the previous override and
 * no override info can be specified (i.e. the override info will inherit from
 * the previous override info).</li>
 * </ol>
 *
 * @param operations The operations to apply. The same ad extension override
 * cannot be specified in more than one operation.
 * @return The applied ad extension overrides.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdExtensionOverrideServiceMutate {
	/**
	 * @access public
	 * @var AdExtensionOverrideOperation[]
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
