<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * The same ad param cannot be specified in multiple operations
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdParamErrorReason {
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
		return "AdParamError.Reason";
	}

	public function __construct() {
	}
}}

if (!class_exists("AdxErrorReason", FALSE)) {
	/**
	 * The reasons for the AdX error.
	 * @package GoogleApiAdsAdWords
	 * @subpackage v201306
	 */
	class AdxErrorReason {
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
			return "AdxError.Reason";
		}

		public function __construct() {
		}
	}