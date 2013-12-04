<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * A stream of AdWords API mutate operations that must be performed serially.
 * Further, this operation stream must be processed serially with all other
 * operation streams in a bulk mutate job that specify the same scoping
 * entity.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class OperationStream {
	/**
	 * @access public
	 * @var EntityId
	 */
	public $scopingEntityId;

	/**
	 * @access public
	 * @var Operation[]
	 */
	public $operations;

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
		return "OperationStream";
	}

	public function __construct($scopingEntityId = NULL, $operations = NULL) {
		$this->scopingEntityId = $scopingEntityId;
		$this->operations = $operations;
	}
}