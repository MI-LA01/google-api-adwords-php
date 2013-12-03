<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Cannot operate on an adextensions under the wrong campaign
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignAdExtensionErrorReason {
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
		return "CampaignAdExtensionError.Reason";
	}

	public function __construct() {
	}
}