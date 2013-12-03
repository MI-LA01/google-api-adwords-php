<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Domain extension, which adds domain info to ads.
 * <span class="constraint Beta">This is a beta feature.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DomainInfoExtension extends AdExtension {
	/**
	 * @access public
	 * @var string
	 */
	public $domainName;

	/**
	 * @access public
	 * @var string
	 */
	public $languageCode;

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
		return "DomainInfoExtension";
	}

	public function __construct($domainName = NULL, $languageCode = NULL, $id = NULL, $AdExtensionType = NULL) {
		parent::__construct();
		$this->domainName = $domainName;
		$this->languageCode = $languageCode;
		$this->id = $id;
		$this->AdExtensionType = $AdExtensionType;
	}
}