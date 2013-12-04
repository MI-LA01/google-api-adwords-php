<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A conversion tracker created through AdWords Conversion Tracking.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdWordsConversionTracker extends ConversionTracker {
	/**
	 * @access public
	 * @var string
	 */
	public $snippet;

	/**
	 * @access public
	 * @var tnsAdWordsConversionTrackerMarkupLanguage
	 */
	public $markupLanguage;

	/**
	 * @access public
	 * @var tnsAdWordsConversionTrackerTextFormat
	 */
	public $textFormat;

	/**
	 * @access public
	 * @var string
	 */
	public $conversionPageLanguage;

	/**
	 * @access public
	 * @var string
	 */
	public $backgroundColor;

	/**
	 * @access public
	 * @var string
	 */
	public $userRevenueValue;

	/**
	 * @access public
	 * @var tnsAdWordsConversionTrackerTrackingCodeType
	 */
	public $trackingCodeType;

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
		return "AdWordsConversionTracker";
	}

	public function __construct($snippet = NULL, $markupLanguage = NULL, $textFormat = NULL, $conversionPageLanguage = NULL, $backgroundColor = NULL, $userRevenueValue = NULL, $trackingCodeType = NULL, $id = NULL, $name = NULL, $status = NULL, $category = NULL, $stats = NULL, $viewthroughLookbackWindow = NULL, $isProductAdsChargeable = NULL, $productAdsChargeableConversionWindow = NULL, $ConversionTrackerType = NULL) {
		parent::__construct();
		$this->snippet = $snippet;
		$this->markupLanguage = $markupLanguage;
		$this->textFormat = $textFormat;
		$this->conversionPageLanguage = $conversionPageLanguage;
		$this->backgroundColor = $backgroundColor;
		$this->userRevenueValue = $userRevenueValue;
		$this->trackingCodeType = $trackingCodeType;
		$this->id = $id;
		$this->name = $name;
		$this->status = $status;
		$this->category = $category;
		$this->stats = $stats;
		$this->viewthroughLookbackWindow = $viewthroughLookbackWindow;
		$this->isProductAdsChargeable = $isProductAdsChargeable;
		$this->productAdsChargeableConversionWindow = $productAdsChargeableConversionWindow;
		$this->ConversionTrackerType = $ConversionTrackerType;
	}
}