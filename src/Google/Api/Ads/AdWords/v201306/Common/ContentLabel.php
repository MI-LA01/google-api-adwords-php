<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Content Label for category exclusion.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class ContentLabel extends Criterion {
	/**
	 * @access public
	 * @var tnsContentLabelType
	 */
	public $contentLabelType;

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
		return "ContentLabel";
	}

	public function __construct($contentLabelType = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->contentLabelType = $contentLabelType;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}