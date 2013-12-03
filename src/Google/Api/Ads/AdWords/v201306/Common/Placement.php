<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A placement used for modifying bids for sites when targeting the content
 * network.
 * <span class="constraint AdxEnabled">This is enabled for AdX.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Placement extends Criterion {
	/**
	 * @access public
	 * @var string
	 */
	public $url;

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
		return "Placement";
	}

	public function __construct($url = NULL, $id = NULL, $type = NULL, $CriterionType = NULL) {
		parent::__construct();
		$this->url = $url;
		$this->id = $id;
		$this->type = $type;
		$this->CriterionType = $CriterionType;
	}
}