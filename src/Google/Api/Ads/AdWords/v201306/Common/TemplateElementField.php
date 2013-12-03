<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a field in a template element.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TemplateElementField {
	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsTemplateElementFieldType
	 */
	public $type;

	/**
	 * @access public
	 * @var string
	 */
	public $fieldText;

	/**
	 * @access public
	 * @var Media
	 */
	public $fieldMedia;

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
		return "TemplateElementField";
	}

	public function __construct($name = NULL, $type = NULL, $fieldText = NULL, $fieldMedia = NULL) {
		$this->name = $name;
		$this->type = $type;
		$this->fieldText = $fieldText;
		$this->fieldMedia = $fieldMedia;
	}
}