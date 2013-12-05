<?php
/**
 * Contains all client objects for the TrafficEstimatorService service.
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
	Google\Api\Ads\AdWords\v201306\Common\TrafficEstimatorServiceGet;

/**
 * TrafficEstimatorService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class TrafficEstimatorService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorServiceGetResponse",
    "get" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorServiceGet",
    "mutate" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorServiceMutate",
    "mutateResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorServiceMutateResponse",
    "DateTime"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdxError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "ApiError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "ApiException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CollectionSizeError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeError",
    "ComparableValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "Criterion" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Criterion",
    "CriterionParameter" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionParameter",
    "DatabaseError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "DateError"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DistinctError"				 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EntityAccessDenied" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityAccessDenied",
    "EntityNotFound" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "Keyword"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Keyword",
    "Language" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Language",
    "Location" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Location",
    "LongValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "MobileAppCategory" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAppCategory",
    "MobileApplication" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileApplication",
    "Money" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "NetworkSetting"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NetworkSetting",
    "NotEmptyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "Placement" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Placement",
    "Product"				 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Product",
    "ProductCondition" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductCondition",
    "ProductConditionOperand" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductConditionOperand",
    "QuotaCheckError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError"			 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RegionCodeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeError",
    "RejectedError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SizeLimitError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "TargetError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetError",
    "CriterionUserInterest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserInterest",
    "CriterionUserList"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserList",
    "Vertical"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Vertical",
    "Webpage" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Webpage",
    "WebpageCondition"	 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageCondition",
    "WebpageParameter"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageParameter",
    "AdxError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason"		 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "Criterion.Type" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionType",
    "DatabaseError.Reason"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityAccessDenied.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityAccessDeniedReason",
    "EntityNotFound.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "KeywordMatchType"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordMatchType",
    "LocationTargetingStatus" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationTargetingStatus",
    "NotEmptyError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "OperatorError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "QuotaCheckError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RegionCodeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeErrorReason",
    "RejectedError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SizeLimitError.Reason"				 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "StringLengthError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "TargetError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetErrorReason",
    "CriterionUserList.MembershipStatus" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserListMembershipStatus",
    "WebpageConditionOperand" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageConditionOperand",
    "AdGroupEstimate"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupEstimate",
    "Estimate"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Estimate",
    "AdGroupEstimateRequest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupEstimateRequest",
    "EstimateRequest"			 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EstimateRequest",
    "CampaignEstimate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignEstimate",
    "CampaignEstimateRequest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignEstimateRequest",
    "CurrencyCodeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CurrencyCodeError",
    "KeywordEstimate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordEstimate",
    "KeywordEstimateRequest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordEstimateRequest",
    "MatchesRegexError"			 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MatchesRegexError",
    "StatsEstimate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsEstimate",
    "TrafficEstimatorError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorError",
    "TrafficEstimatorResult"		 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorResult",
    "TrafficEstimatorSelector" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorSelector",
    "CurrencyCodeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CurrencyCodeErrorReason",
    "MatchesRegexError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MatchesRegexErrorReason",
    "TrafficEstimatorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/o/v201306/TrafficEstimatorService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = TrafficEstimatorService::$classmap;
    parent::__construct($wsdl, $options, $user, 'TrafficEstimatorService', 'https://adwords.google.com/api/adwords/o/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns traffic estimates for specified criteria.
   * 
   * @param selector Campaigns, ad groups and keywords for which traffic
   * should be estimated.
   * @return Traffic estimation results.
   * @throws ApiException if problems occurred while retrieving estimates
   */
  public function get($selector) {
    $arg = new TrafficEstimatorServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }
}