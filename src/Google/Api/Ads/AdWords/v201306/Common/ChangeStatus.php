<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * An enum used to classify the types of changes that have been made to
 * an adgroup/campaign during a specified date range.  This only refers
 * to the field of the entity itself, and not its children.
 *
 * For example, if an AdGroup name changed, this status would be FIELDS_CHANGED,
 * but if only bids on keywords belonging an AdGroup were changed this
 * status would be FIELDS_UNCHANGED.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ChangeStatus {
	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/ch/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "ChangeStatus";
	}

	public function __construct() {
	}
}