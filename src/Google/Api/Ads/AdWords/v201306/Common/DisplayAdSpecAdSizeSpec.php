<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Specification for an ad size. This specification allows customization by
 * display options for more fine-grained control over returns, so that
 * customers can associate ad options with specific sizes. For example,
 * suppose the customer in general would like to see placements with
 * {@code DisplayOption.STANDARD} and {@code DisplayOption.POP_UNDER} -
 * except for 300x250 ads which should only be STANDARD. The customer would
 * create a {@code DisplayAdSpec} with {@code DisplayOption.STANDARD} and
 * {@code DisplayOption.POP_UNDER}, and also send in an {@code AdSizeSpec}
 * with {@code width} of 300, {@code} height of 250, and {@code displayOptionFilter}
 * set to {@code DisplayOption.STANDARD}.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class DisplayAdSpecAdSizeSpec {
	/**
	 * @access public
	 * @var integer
	 */
	public $width;

	/**
	 * @access public
	 * @var integer
	 */
	public $height;

	/**
	 * @access public
	 * @var tnsDisplayAdSpecActivationOption[]
	 */
	public $activationOptionFilter;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/o/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "DisplayAdSpec.AdSizeSpec";
	}

	public function __construct($width = NULL, $height = NULL, $activationOptionFilter = NULL) {
		$this->width = $width;
		$this->height = $height;
		$this->activationOptionFilter = $activationOptionFilter;
	}
}