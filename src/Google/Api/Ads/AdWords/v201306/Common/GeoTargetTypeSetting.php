<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a collection of settings related to ads geotargeting.
 *
 * <p>AdWords ads can be geotargeted using <b>Location of Presence</b> (<b>LOP</b>),
 * <b>Area of Interest</b> (<b>AOI</b>), or both. LOP is the physical location
 * of the user performing the search; AOI is the geographical region
 * in which the searcher is interested. For example, if a user in
 * New York City performs a search "hotels california", their LOP
 * is New York City and their AOI is California.
 *
 * <p>Additionally, ads can be <b>positively</b> or <b>negatively</b> geotargeted.
 * An ad that is positively geotargeted to New York City only appears
 * to users whose location is related (via AOI or LOP) to New York City. An ad
 * that is negatively geotargeted to New York City appears for <i>all</i>
 * users <i>except</i> those whose location is related to New York City. Ads can
 * only be negatively geotargeted if a positive geotargeting is also supplied, and
 * the negatively geotargeted region must be contained within the positive
 * region.
 *
 * <p>Geotargeting settings allow ads to be targeted in the following way:
 * <ul>
 * <li> Positively geotargeted using solely AOI, solely LOP, or either.
 * <li> Negatively geotargeted using solely LOP, or both.
 * </ul>
 *
 * <p>This setting applies only to ads shown on the search network, and does
 * not affect ads shown on the Google Display Network.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class GeoTargetTypeSetting extends Setting {
	/**
	 * @access public
	 * @var tnsGeoTargetTypeSettingPositiveGeoTargetType
	 */
	public $positiveGeoTargetType;

	/**
	 * @access public
	 * @var tnsGeoTargetTypeSettingNegativeGeoTargetType
	 */
	public $negativeGeoTargetType;

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
		return "GeoTargetTypeSetting";
	}

	public function __construct($positiveGeoTargetType = NULL, $negativeGeoTargetType = NULL, $SettingType = NULL) {
		parent::__construct();
		$this->positiveGeoTargetType = $positiveGeoTargetType;
		$this->negativeGeoTargetType = $negativeGeoTargetType;
		$this->SettingType = $SettingType;
	}
}