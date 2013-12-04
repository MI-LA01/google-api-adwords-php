<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the pending invitations for the customer IDs in the selector.
 * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
 * @throws ApiException when there is at least one error with the request
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class getPendingInvitations {
	/**
	 * @access public
	 * @var PendingInvitationSelector
	 */
	public $selector;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/mcm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "";
	}

	public function __construct($selector = NULL) {
		$this->selector = $selector;
	}
}