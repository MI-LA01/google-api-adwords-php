<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * <p>A {@link SearchParameter} for setting the search network. Currently we
 * support two network setting options:
 * <ul>
 * <li>Google search network</li>
 * <li>Google search network and AFS</li>
 * </ul>
 * <p>This element is supported by following {@link IdeaType}s: KEYWORD.
 * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class NetworkSearchParameter extends SearchParameter {
	/**
	 * @access public
	 * @var NetworkSetting
	 */
	public $networkSetting;

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
		return "NetworkSearchParameter";
	}

	public function __construct($networkSetting = NULL, $SearchParameterType = NULL) {
		parent::__construct();
		$this->networkSetting = $networkSetting;
		$this->SearchParameterType = $SearchParameterType;
	}
}