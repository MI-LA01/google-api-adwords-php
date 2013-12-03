<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Improved exact and phrase match option includes misspellings, plurals,
 * and other close variants of your keywords.
 *
 * Default value set to {@code true} to include close variants. For more
 * information, see the article
 * <a href="https://support.google.com/adwords/bin/answer.py?answer=6100">
 * What are keyword matching options?</a>.
 *
 * This setting is required when creating new campaigns.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class KeywordMatchSetting extends Setting {
	/**
	 * @access public
	 * @var boolean
	 */
	public $optIn;

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
		return "KeywordMatchSetting";
	}

	public function __construct($optIn = NULL, $SettingType = NULL) {
		parent::__construct();
		$this->optIn = $optIn;
		$this->SettingType = $SettingType;
	}
}