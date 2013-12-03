<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an element in a template. Each template element is composed
 * of a list of fields (actual value data).
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TemplateElement {
	/**
	 * @access public
	 * @var string
	 */
	public $uniqueName;

	/**
	 * @access public
	 * @var TemplateElementField[]
	 */
	public $fields;

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
		return "TemplateElement";
	}

	public function __construct($uniqueName = NULL, $fields = NULL) {
		$this->uniqueName = $uniqueName;
		$this->fields = $fields;
	}
}