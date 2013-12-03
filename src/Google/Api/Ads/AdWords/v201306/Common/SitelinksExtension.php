<?php

namespace Google\Api\Ads\AdWords\v201306\Common;


/**
 * Class to represent a set of sitelinks and their order of preference.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SitelinksExtension extends AdExtension {
	/**
	 * @access public
	 * @var Sitelink[]
	 */
	public $sitelinks;

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
		return "SitelinksExtension";
	}

	public function __construct($sitelinks = NULL, $id = NULL, $AdExtensionType = NULL) {
		parent::__construct();
		$this->sitelinks = $sitelinks;
		$this->id = $id;
		$this->AdExtensionType = $AdExtensionType;
	}
}
