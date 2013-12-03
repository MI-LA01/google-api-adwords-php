<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
 * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
 *
 *
 *
 * Applies a list of mutate operations (i.e. add, set):
 *
 * Add - creates a set of user lists
 * Set - updates a set of user lists
 *
 * @param operations the operations to apply
 * @return a list of UserList objects
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class AdwordsUserListServiceMutate {
	/**
	 * @access public
	 * @var UserListOperation[]
	 */
	public $operations;

	/**
	 * Gets the namesapce of this class
	 * @return the namespace of this class
	 */
	public function getNamespace() {
		return "https://adwords.google.com/api/adwords/rm/v201306";
	}

	/**
	 * Gets the xsi:type name of this class
	 * @return the xsi:type name of this class
	 */
	public function getXsiTypeName() {
		return "";
	}

	public function __construct($operations = NULL) {
		$this->operations = $operations;
	}
}