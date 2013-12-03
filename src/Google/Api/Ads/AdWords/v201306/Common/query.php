<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the list of ad groups that match the query.
 *
 * @param query The SQL-like AWQL query string
 * @return A list of adgroups
 * @throws ApiException
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class query {
	/**
	 * @access public
	 * @var string
	 */
	public $query;

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

	public function __construct($query = NULL) {
		$this->query = $query;
	}
}