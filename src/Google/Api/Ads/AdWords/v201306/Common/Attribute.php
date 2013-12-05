<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * {@link Attribute}s encompass the core information about a particular
 * {@link com.google.ads.api.services.targetingideas.TargetingIdea}. Some
 * attributes are for {@code KEYWORD} {@link IdeaType}s, some are for
 * {@code PLACEMENT} {@link IdeaType}s, and some are for both. Ultimately, an
 * {@link Attribute} instance simply wraps an actual value of interest. For
 * example, {@link KeywordAttribute} wraps the keyword itself, while a
 * {@link BooleanAttribute} simply wraps a boolean describing some information
 * about the keyword idea.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Attribute {
	/**
	 * @access public
	 * @var string
	 */
	public $AttributeType;

	private $_parameterMap = array (
			"Attribute.Type" => "AttributeType",
	);

	/**
	 * Provided for setting non-php-standard named variables
	 * @param $var Variable name to set
	 * @param $value Value to set
	*/
	public function __set($var, $value) { $this->{$this->_parameterMap[$var]} = $value; }

	/**
	 * Provided for getting non-php-standard named variables
	 * @param $var Variable name to get.
	 * @return mixed Variable value
	 */
	public function __get($var) {
		if (!array_key_exists($var, $this->_parameterMap)) {
			return NULL;
		} else {
			return $this->{$this->_parameterMap[$var]};
		}
	}

	/**
	 * Provided for getting non-php-standard named variables
	 * @return array parameter map
	 */
	protected function getParameterMap() {
		return $this->_parameterMap;
	}

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
		return "Attribute";
	}

	public function __construct($AttributeType = NULL) {
		$this->AttributeType = $AttributeType;
	}
}