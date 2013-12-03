<?php 

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Encapsulates the information about bids and bidding strategies.
 *
 * Bidding Strategy can be set on campaigns, ad groups or ad group criteria.
 * A bidding strategy can be set using one of the following:
 * <ul>
 * <li>{@linkplain BiddingStrategyConfiguration#biddingScheme bidding scheme}</li>
 * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyType bidding strategy type}</li>
 * <li>{@linkplain BiddingStrategyConfiguration#biddingStrategyId bidding strategy ID} for
 * flexible bid strategies.</li>
 * </ul>
 * If the bidding strategy type is used, then schemes are created using default values.
 *
 * Bids can be set only on ad groups and ad group criteria. They cannot be set on campaigns.
 * Multiple bids can be set at the same time. Only the bids that apply to the campaign's
 * {@linkplain Campaign#biddingStrategyConfiguration bidding strategy} will be used.
 *
 * Flexible bidding is a beta feature. For more information on flexible bidding,
 * visit the <a href="https://support.google.com/adwords/answer/2979071">
 * Help Center</a>.
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class BiddingStrategyConfiguration {
	/**
	 * @access public
	 * @var integer
	 */
	public $biddingStrategyId;

	/**
	 * @access public
	 * @var string
	 */
	public $biddingStrategyName;

	/**
	 * @access public
	 * @var tnsBiddingStrategyType
	 */
	public $biddingStrategyType;

	/**
	 * @access public
	 * @var tnsBiddingStrategySource
	 */
	public $biddingStrategySource;

	/**
	 * @access public
	 * @var BiddingScheme
	 */
	public $biddingScheme;

	/**
	 * @access public
	 * @var Bids[]
	 */
	public $bids;

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
		return "BiddingStrategyConfiguration";
	}

	public function __construct($biddingStrategyId = NULL, $biddingStrategyName = NULL, $biddingStrategyType = NULL, $biddingStrategySource = NULL, $biddingScheme = NULL, $bids = NULL) {
		$this->biddingStrategyId = $biddingStrategyId;
		$this->biddingStrategyName = $biddingStrategyName;
		$this->biddingStrategyType = $biddingStrategyType;
		$this->biddingStrategySource = $biddingStrategySource;
		$this->biddingScheme = $biddingScheme;
		$this->bids = $bids;
	}
}