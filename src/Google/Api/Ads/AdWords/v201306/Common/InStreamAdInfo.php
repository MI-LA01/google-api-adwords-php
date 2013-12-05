<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Information specific to the instream ad format. Instream ads are video ads
 * which play as part of the delivery of video content, either before, during,
 * or after the content itself.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class InStreamAdInfo {
	/**
	 * @access public
	 * @var integer
	 */
	public $maxAdDuration;

	/**
	 * @access public
	 * @var integer
	 */
	public $minAdDuration;

	/**
	 * @access public
	 * @var integer
	 */
	public $medianAdDuration;

	/**
	 * @access public
	 * @var double
	 */
	public $preRollPercent;

	/**
	 * @access public
	 * @var double
	 */
	public $midRollPercent;

	/**
	 * @access public
	 * @var double
	 */
	public $postRollPercent;

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
		return "InStreamAdInfo";
	}

	public function __construct($maxAdDuration = NULL, $minAdDuration = NULL, $medianAdDuration = NULL, $preRollPercent = NULL, $midRollPercent = NULL, $postRollPercent = NULL) {
		$this->maxAdDuration = $maxAdDuration;
		$this->minAdDuration = $minAdDuration;
		$this->medianAdDuration = $medianAdDuration;
		$this->preRollPercent = $preRollPercent;
		$this->midRollPercent = $midRollPercent;
		$this->postRollPercent = $postRollPercent;
	}
}