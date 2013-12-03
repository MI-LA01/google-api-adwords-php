<?php

namespace Google\Api\Ads\AdWords\v201306\Common;

/**
 * Represents a mobile ad.
 *
 * <p>
 * A mobile ad can contain a click-to-call phone number, a link to a website,
 * or both.  You specify which features you want by setting certain fields, as
 * shown in the following table.  For example, to create a click-to-call mobile
 * ad, set the fields in the <b>Click-to-call</b> column. A hyphen indicates
 * that you should not set the corresponding field.
 * </p>
 * <p>
 * For more information, see
 * <a href="//support.google.com/adwords/bin/answer.py?answer=2472720">
 * Create a mobile ad</a>.
 * </p>
 *
 * <table summary="" style="clear: none">
 * <tr> <th scope="col"> Click-to-call </th>
 * <th scope="col"> Website       </th>
 * <th scope="col"> Both          </th></tr>
 * <tr> <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * -               <br />
 * -               <br />
 * -               <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td>
 * <td> headline        <br />
 * description     <br />
 * mobileCarriers  <br />
 * phoneNumber     <br />
 * countryCode     <br />
 * businessName    <br />
 * displayUrl      <br />
 * destinationUrl  <br />
 * markupLanguages <br />
 * </td></tr>
 * </table>
 * <span class="constraint AdxEnabled">This is disabled for AdX when it is contained within Operators: ADD, SET.</span>
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 */
class MobileAd extends Ad {
	/**
	 * @access public
	 * @var string
	 */
	public $headline;

	/**
	 * @access public
	 * @var string
	 */
	public $description;

	/**
	 * @access public
	 * @var tnsMarkupLanguageType[]
	 */
	public $markupLanguages;

	/**
	 * @access public
	 * @var string[]
	 */
	public $mobileCarriers;

	/**
	 * @access public
	 * @var string
	 */
	public $businessName;

	/**
	 * @access public
	 * @var string
	 */
	public $countryCode;

	/**
	 * @access public
	 * @var string
	 */
	public $phoneNumber;

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
		return "MobileAd";
	}

	public function __construct($headline = NULL, $description = NULL, $markupLanguages = NULL, $mobileCarriers = NULL, $businessName = NULL, $countryCode = NULL, $phoneNumber = NULL, $id = NULL, $url = NULL, $displayUrl = NULL, $devicePreference = NULL, $disapprovalReasons = NULL, $AdType = NULL) {
		parent::__construct();
		$this->headline = $headline;
		$this->description = $description;
		$this->markupLanguages = $markupLanguages;
		$this->mobileCarriers = $mobileCarriers;
		$this->businessName = $businessName;
		$this->countryCode = $countryCode;
		$this->phoneNumber = $phoneNumber;
		$this->id = $id;
		$this->url = $url;
		$this->displayUrl = $displayUrl;
		$this->devicePreference = $devicePreference;
		$this->disapprovalReasons = $disapprovalReasons;
		$this->AdType = $AdType;
	}
}