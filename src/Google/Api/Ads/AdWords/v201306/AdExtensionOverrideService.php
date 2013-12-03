<?php
/**
 * Contains all client objects for the AdExtensionOverrideService service.
 *
 * PHP version 5
 *
 * Copyright 2013, Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201306
 * @category   WebServices
 * @copyright  2013, Google Inc. All Rights Reserved.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License,
 *             Version 2.0
 * @author     Paul Matthews
 */

namespace Google\Api\Ads\AdWords\v201306;

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient;
    Google\Api\Ads\AdWords\v201306\Common\AdExtensionOverrideServiceGet;

/**
 * AdExtensionOverrideService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdExtensionOverrideService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideServiceGetResponse",
    "get" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideServiceGet",
    "mutate" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideServiceMutate",
    "mutateResponse" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideServiceMutateResponse",
    "DateTime"	 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdExtensionOverrideError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideError",
    "ApiError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdExtensionOverrideStats" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideStats",
    "Stats" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Stats",
    "Address" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Address",
    "AdxError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "AuthenticationError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError"					 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DistinctError"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DomainInfoExtension" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DomainInfoExtension",
    "AdExtension" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtension",
    "DoubleValue"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EntityNotFound" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "GeoPoint" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoPoint",
    "IdError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InAppLinkExtension" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InAppLinkExtension",
    "InternalApiError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "LocationOverrideInfo" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationOverrideInfo",
    "LongValue" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "MobileExtension" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileExtension",
    "NotEmptyError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "ComparableValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "OAuthInfo" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OAuthInfo",
    "OperatorError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OverrideInfo"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OverrideInfo",
    "Paging" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "QuotaCheckError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError"				 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "Sitelink"		 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Sitelink",
    "SitelinksExtension" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SitelinksExtension",
    "SizeLimitError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError"	 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "AdExtensionOverrideSelector" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideSelector",
    "DatabaseError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "LocationExtension" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationExtension",
    "Money" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ApiException" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "LocationSyncExtension" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationSyncExtension",
    "AdExtensionOverride"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverride",
    "AdExtensionOverrideOperation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideOperation",
    "Operation"			 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdExtensionOverridePage" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverridePage",
    "Page" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AdExtensionOverrideReturnValue" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideReturnValue",
    "ListReturnValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AdExtensionOverride.ApprovalStatus" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideApprovalStatus",
    "AdExtensionOverride.Status" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideStatus",
    "AdExtensionOverrideError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideErrorReason",
    "AdxError.Reason"					 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityNotFound.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InAppLinkExtension.AppStore" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InAppLinkExtensionAppStore",
    "InternalApiError.Reason"						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "LocationExtension.Source" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationExtensionSource",
    "LocationOverrideInfo.RadiusUnits" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationOverrideInfoRadiusUnits",
    "NotEmptyError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason"					 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "Operator" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "QuotaCheckError.Reason"						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SizeLimitError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "Stats.Network" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsNetwork",
    "StringLengthError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdExtensionOverrideService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdExtensionOverrideService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdExtensionOverrideService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * Returns a list of AdExtensionOverrides based on an
   * AdExtensionOverrideSelector.
   * @param selector The selector specifying the query.
   * @return The page containing the AdExtensionOverride which meet the
   * criteria specified by the selector.
   */
  public function get($selector) {
    $arg = new AdExtensionOverrideServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations.
   * 
   * <p>Conditions for adding an ad-level AdExtension override using an AdExtension
   * under the Ad's campaign:</p>
   * <ol>
   * <li>If the text ad has never been overridden, an AdExtension override may
   * be set on the creative using an extension under the campaign, along with
   * any override info.</li>
   * <li>If the text ad has been overriden before, the latitude/longitude of the
   * new extension override must be the same as the previous override and
   * no override info can be specified (i.e. the override info will inherit from
   * the previous override info).</li>
   * </ol>
   * 
   * @param operations The operations to apply. The same ad extension override
   * cannot be specified in more than one operation.
   * @return The applied ad extension overrides.
   */
  public function mutate($operations) {
    $arg = new AdExtensionOverrideServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}