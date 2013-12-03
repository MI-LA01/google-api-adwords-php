<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents an ad parameter.  Use ad parameters to update numeric values
 * (such as prices or inventory levels) in any line of a text ad, including
 * the destination URL. You can set two <code>AdParam</code> objects
 * (one for each value of {@link #paramIndex}) per ad group
 * <a href="AdGroupCriterionService.Keyword.html">Keyword</a>
 * criterion.
 * <p>When setting or removing an <code>AdParam</code>, it is uniquely
 * identified by the combination of these three fields:</p>
 * <ul>
 * <li><code>adGroupId</code></li>
 * <li><code>criterionId</code></li>
 * <li><code>paramIndex</code></li>
 * </ul>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdParam {
	/**
	 * @access public
	 * @var integer
	 */
	public $adGroupId;

	/**
	 * @access public
	 * @var integer
	 */
	public $criterionId;

	/**
	 * @access public
	 * @var string
	 */
	public $insertionText;

	/**
	 * @access public
	 * @var integer
	 */
	public $paramIndex;

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
		return "AdParam";
	}

	public function __construct($adGroupId = NULL, $criterionId = NULL, $insertionText = NULL, $paramIndex = NULL) {
		$this->adGroupId = $adGroupId;
		$this->criterionId = $criterionId;
		$this->insertionText = $insertionText;
		$this->paramIndex = $paramIndex;
	}
}