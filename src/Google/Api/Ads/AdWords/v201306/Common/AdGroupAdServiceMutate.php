<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
 * <span class="constraint NotEmpty">This field must contain at least one element.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Applies the list of mutate operations (ie. add, set, remove):
 * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
 * {@code adGroupId} must
 * reference an existing ad group. The child {@code Ad} must be sufficiently
 * specified by constructing a concrete ad type (such as {@code TextAd})
 * and setting its fields accordingly.</p>
 * <p>Set - Updates an ad group ad. Except for {@code status},
 * ad group ad fields are not mutable. Status updates are
 * straightforward - the status of the ad group ad is updated as
 * specified. If any other field has changed, it will be ignored. If
 * you want to change any of the fields other than status, you must
 * make a new ad and then delete the old one.</p>
 * <p>Remove - Removes the link between the specified AdGroup and
 * Ad.</p>
 * @param operations The operations to apply.
 * @return A list of AdGroupAds where each entry in the list is the result of
 * applying the operation in the input list with the same index. For an
 * add/set operation, the return AdGroupAd will be what is saved to the db.
 * In the case of the remove operation, the return AdGroupAd will simply be
 * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
 * the AdGroup.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdGroupAdServiceMutate {
	/**
	 * @access public
	 * @var AdGroupAdOperation[]
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