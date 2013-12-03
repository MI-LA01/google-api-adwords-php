<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents the temporary id for an ad union id, which the user can specify.
 * The temporary id can be used to group ads together during ad creation.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class TempAdUnionId extends AdUnionId {
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
		return "TempAdUnionId";
	}

	public function __construct($id = NULL, $AdUnionIdType = NULL) {
		parent::__construct();
		$this->id = $id;
		$this->AdUnionIdType = $AdUnionIdType;
	}
}