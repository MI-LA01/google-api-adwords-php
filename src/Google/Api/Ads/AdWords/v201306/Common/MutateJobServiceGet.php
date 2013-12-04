<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Query the status of existing jobs, both simple and bulk API.
 * <p>Use a {@link JobSelector} to query and return a list which may
 * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MutateJobServiceGet {
	/**
	 * @access public
	 * @var JobSelector
	 */
	public $selector;

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
		return "";
	}

	public function __construct($selector = NULL) {
		$this->selector = $selector;
	}
}