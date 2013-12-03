<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Status of the CampaignFeed.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class CampaignFeedStatus {
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
		return "CampaignFeed.Status";
	}

	public function __construct() {
	}
}}

if (!class_exists("CampaignFeedErrorReason", FALSE)) {
	/**
	 * Error reasons.
	 * @package GoogleApiAdsAdWords
	 * @subpackage v201306
	 */
	class CampaignFeedErrorReason {
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
			return "CampaignFeedError.Reason";
		}

		public function __construct() {
		}
	}