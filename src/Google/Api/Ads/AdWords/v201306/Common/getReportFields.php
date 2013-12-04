<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns the available report fields for a given report type.
 *
 * @param reportType The type of report.
 * @return The list of available report fields. Each
 * {@link ReportDefinitionField} encapsulates the field name, the
 * field data type, and the enum values (if the field's type is
 * {@code enum}).
 * @throws ApiException if a problem occurred while fetching the
 * ReportDefinitionField information.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class getReportFields {
	/**
	 * @access public
	 * @var tnsReportDefinitionReportType
	 */
	public $reportType;

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

	public function __construct($reportType = NULL) {
		$this->reportType = $reportType;
	}
}