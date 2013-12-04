<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Selectable">This field can be selected using the value "SharedSetId".</span><span class="constraint Filterable">This field can be filtered on.</span>
 * <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class SharedSet {
	/**
	 * @access public
	 * @var integer
	 */
	public $sharedSetId;

	/**
	 * @access public
	 * @var string
	 */
	public $name;

	/**
	 * @access public
	 * @var tnsSharedSetType
	 */
	public $type;

	/**
	 * @access public
	 * @var integer
	 */
	public $memberCount;

	/**
	 * @access public
	 * @var integer
	 */
	public $referenceCount;

	/**
	 * @access public
	 * @var tnsSharedSetStatus
	 */
	public $status;

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
		return "SharedSet";
	}

	public function __construct($sharedSetId = NULL, $name = NULL, $type = NULL, $memberCount = NULL, $referenceCount = NULL, $status = NULL) {
		$this->sharedSetId = $sharedSetId;
		$this->name = $name;
		$this->type = $type;
		$this->memberCount = $memberCount;
		$this->referenceCount = $referenceCount;
		$this->status = $status;
	}
}