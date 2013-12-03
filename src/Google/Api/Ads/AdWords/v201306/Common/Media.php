<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents some kind of media.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Media {
	/**
	 * @access public
	 * @var integer
	 */
	public $mediaId;

	/**
	 * @access public
	 * @var tnsMediaMediaType
	 */
	public $type;

	/**
	 * @access public
	 * @var integer
	 */
	public $referenceId;

	/**
	 * @access public
	 * @var Media_Size_DimensionsMapEntry[]
	 */
	public $dimensions;

	/**
	 * @access public
	 * @var Media_Size_StringMapEntry[]
	 */
	public $urls;

	/**
	 * @access public
	 * @var tnsMediaMimeType
	 */
	public $mimeType;

	/**
	 * @access public
	 * @var string
	 */
	public $sourceUrl;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var integer
	 */
	public $fileSize;

	/**
	 * @access public
	 * @var string
	 */
	public $creationTime;

	/**
	 * @access public
	 * @var string
	 */
	public $MediaType;

	private $_parameterMap = array (
			"Media.Type" => "MediaType",
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
		return "https://adwords.google.com/api/adwords/cm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "Media";
	}

	public function __construct($mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
		$this->mediaId = $mediaId;
		$this->type = $type;
		$this->referenceId = $referenceId;
		$this->dimensions = $dimensions;
		$this->urls = $urls;
		$this->mimeType = $mimeType;
		$this->sourceUrl = $sourceUrl;
		$this->name = $name;
		$this->fileSize = $fileSize;
		$this->creationTime = $creationTime;
		$this->MediaType = $MediaType;
	}
}