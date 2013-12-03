<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 *
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OAuthInfo {
	/**
	 * @access public
	 * @var string
	 */
	public $httpMethod;

	/**
	 * @access public
	 * @var string
	 */
	public $httpRequestUrl;

	/**
	 * @access public
	 * @var string
	 */
	public $httpAuthorizationHeader;

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
		return "OAuthInfo";
	}

	public function __construct($httpMethod = NULL, $httpRequestUrl = NULL, $httpAuthorizationHeader = NULL) {
		$this->httpMethod = $httpMethod;
		$this->httpRequestUrl = $httpRequestUrl;
		$this->httpAuthorizationHeader = $httpAuthorizationHeader;
	}
}