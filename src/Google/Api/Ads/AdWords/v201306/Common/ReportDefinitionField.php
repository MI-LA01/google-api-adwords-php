<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the fields that can be used to create a ReportDefinition.
 * This class allows the user to query the list of fields applicable to a
 * given report type. Consumers of reports will be able use the retrieved
 * fields through the {@link ReportDefinitionService#getReportFields}
 * api and run the corresponding reports.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ReportDefinitionField {
	/**
	 * @access public
	 * @var string
	 */
	public $fieldName;

	/**
	 * @access public
	 * @var string
	 */
	public $displayFieldName;

	/**
	 * @access public
	 * @var string
	 */
	public $xmlAttributeName;

	/**
	 * @access public
	 * @var string
	 */
	public $fieldType;

	/**
	 * @access public
	 * @var string[]
	 */
	public $enumValues;

	/**
	 * @access public
	 * @var boolean
	 */
	public $canSelect;

	/**
	 * @access public
	 * @var boolean
	 */
	public $canFilter;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isEnumType;

	/**
	 * @access public
	 * @var boolean
	 */
	public $isBeta;

	/**
	 * @access public
	 * @var EnumValuePair[]
	 */
	public $enumValuePairs;

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
		return "ReportDefinitionField";
	}

	public function __construct($fieldName = NULL, $displayFieldName = NULL, $xmlAttributeName = NULL, $fieldType = NULL, $enumValues = NULL, $canSelect = NULL, $canFilter = NULL, $isEnumType = NULL, $isBeta = NULL, $enumValuePairs = NULL) {
		$this->fieldName = $fieldName;
		$this->displayFieldName = $displayFieldName;
		$this->xmlAttributeName = $xmlAttributeName;
		$this->fieldType = $fieldType;
		$this->enumValues = $enumValues;
		$this->canSelect = $canSelect;
		$this->canFilter = $canFilter;
		$this->isEnumType = $isEnumType;
		$this->isBeta = $isBeta;
		$this->enumValuePairs = $enumValuePairs;
	}
}