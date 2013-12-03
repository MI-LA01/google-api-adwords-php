<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a <a href=
 * "//www.google.com/adwords/displaynetwork/plan-creative-campaigns/display-ad-builder.html"
 * >Display Ad Builder</a> template ad. A template ad is
 * composed of a template (specified by its ID) and the data that populates
 * the template's fields. For a list of available templates and their required
 * fields, see <a href="/adwords/api/docs/appendix/templateads">Template Ads</a>.
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TemplateAd extends Ad {
	/**
	 * @access public
	 * @var integer
	 */
	public $templateId;

	/**
	 * @access public
	 * @var AdUnionId
	 */
	public $adUnionId;

	/**
	 * @access public
	 * @var TemplateElement[]
	 */
	public $templateElements;

	/**
	 * @access public
	 * @var Dimensions
	 */
	public $dimensions;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var integer
	 */
	public $duration;

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
		return "TemplateAd";
	}

	public function __construct($templateId = NULL, $adUnionId = NULL, $templateElements = NULL, $dimensions = NULL, $name = NULL, $duration = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
		$this->templateId = $templateId;
		$this->adUnionId = $adUnionId;
		$this->templateElements = $templateElements;
		$this->dimensions = $dimensions;
		$this->name = $name;
		$this->duration = $duration;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->devicePreference = $devicePreference;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->AdType = $AdType;
	}
}