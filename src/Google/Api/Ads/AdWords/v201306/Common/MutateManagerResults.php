<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Results of a {@link ManagedCustomerService#mutateManager} call, which moves client customers to
 * new managers.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MutateManagerResults {
	/**
	 * @access public
	 * @var ManagedCustomerLink[]
	 */
	public $links;

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
		return "MutateManagerResults";
	}

	public function __construct($links = NULL) {
		$this->links = $links;
	}
}