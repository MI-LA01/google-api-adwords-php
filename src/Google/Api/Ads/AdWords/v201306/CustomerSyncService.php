<?php
/**
 * Contains all client objects for the CustomerSyncService service.
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

use Google\Api\Ads\AdWords\Lib\AdWordsSoapClient,
	Google\Api\Ads\AdWords\v201306\Common\CustomerSyncServiceGet;

/**
 * CustomerSyncService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CustomerSyncService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncServiceGetResponse",
    "get" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncServiceGet",
    "mutate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncServiceMutate",
    "mutateResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncServiceMutateResponse",
    "DateTime" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader"				 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateTimeRange" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateTimeRange",
    "DistinctError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "IdError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "QuotaCheckError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SizeLimitError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason"	 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "IdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "QuotaCheckError.Reason"		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SizeLimitError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "StringLengthError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "AdGroupChangeData" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupChangeData",
    "CampaignChangeData" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignChangeData",
    "CustomerSyncError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncError",
    "FeedChangeData" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedChangeData",
    "CustomerChangeData" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerChangeData",
    "CustomerSyncSelector" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncSelector",
    "ChangeStatus" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ChangeStatus",
    "CustomerSyncError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerSyncErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/ch/v201306/CustomerSyncService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CustomerSyncService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CustomerSyncService', 'https://adwords.google.com/api/adwords/ch/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns information about changed entities inside a customer's account.
   * 
   * @param selector Specifies the filter for selecting changehistory events for a customer.
   * @return A Customer->Campaign->AdGroup hierarchy containing information about the objects
   * changed at each level.  All Campaigns that are requested in the selector will be returned,
   * regardless of whether or not they have changed, but unchanged AdGroups will be ignored.
   */
  public function get($selector) {
    $arg = new CustomerSyncServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }
}