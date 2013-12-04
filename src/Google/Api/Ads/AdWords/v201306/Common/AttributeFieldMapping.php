<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a mapping between a feed attribute and a placeholder field.
 *
 * <p>For a list of feed placeholders, see
 * <a href="/adwords/api/docs/appendix/placeholders">
 * https://developers.google.com/adwords/api/docs/appendix/placeholders
 * </a></p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AttributeFieldMapping {
	/**
	 * @access public
	 * @var integer
	 */
	public $feedAttributeId;

	/**
	 * @access public
	 * @var integer
	 */
	public $fieldId;

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
		return "AttributeFieldMapping";
	}

	public function __construct($feedAttributeId = NULL, $fieldId = NULL) {
		$this->feedAttributeId = $feedAttributeId;
		$this->fieldId = $fieldId;
	}
}