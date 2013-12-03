<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Encapsulates a Video media identified by a MediaId.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class Video extends Media {
	/**
	 * @access public
	 * @var integer
	 */
	public $durationMillis;

	/**
	 * @access public
	 * @var string
	 */
	public $streamingUrl;

	/**
	 * @access public
	 * @var boolean
	 */
	public $readyToPlayOnTheWeb;

	/**
	 * @access public
	 * @var string
	 */
	public $industryStandardCommercialIdentifier;

	/**
	 * @access public
	 * @var string
	 */
	public $advertisingId;

	/**
	 * @access public
	 * @var string
	 */
	public $youTubeVideoIdString;

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
		return "Video";
	}

	public function __construct($durationMillis = NULL, $streamingUrl = NULL, $readyToPlayOnTheWeb = NULL, $industryStandardCommercialIdentifier = NULL, $advertisingId = NULL, $youTubeVideoIdString = NULL, $mediaId = NULL, $type = NULL, $referenceId = NULL, $dimensions = NULL, $urls = NULL, $mimeType = NULL, $sourceUrl = NULL, $name = NULL, $fileSize = NULL, $creationTime = NULL, $MediaType = NULL) {
		parent::__construct();
		$this->durationMillis = $durationMillis;
		$this->streamingUrl = $streamingUrl;
		$this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
		$this->industryStandardCommercialIdentifier = $industryStandardCommercialIdentifier;
		$this->advertisingId = $advertisingId;
		$this->youTubeVideoIdString = $youTubeVideoIdString;
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