<?php
/**
 * Contains all client objects for the LocationCriterionService service.
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
	Google\Api\Ads\AdWords\v201306\Common\LocationCriterionServiceGet;


/**
 * LocationCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class LocationCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 					=> "LocationCriterionServiceGetResponse",
    "get" 							=> "LocationCriterionServiceGet",
    "mutate" 						=> "LocationCriterionServiceMutate",
    "mutateResponse" 				=> "LocationCriterionServiceMutateResponse",
    "DateTime" 						=> "AdWordsDateTime",
    "SoapHeader" 					=> "SoapRequestHeader",
    "AdxError" 						=> "AdxError",
    "ApiError" 						=> "ApiError",
    "ApiException" 					=> "ApiException",
    "ApplicationException" 			=> "ApplicationException",
    "AuthenticationError" 			=> "AuthenticationError",
    "AuthorizationError" 			=> "AuthorizationError",
    "ClientTermsError" 				=> "ClientTermsError",
    "Criterion" 					=> "Criterion",
    "CriterionParameter" 			=> "CriterionParameter",
    "DatabaseError" 				=> "DatabaseError",
    "Date" 							=> "Date",
    "DateError" 					=> "DateError",
    "DateRange" 					=> "DateRange",
    "DistinctError" 				=> "DistinctError",
    "IdError" 						=> "IdError",
    "InternalApiError" 				=> "InternalApiError",
    "Keyword" 						=> "Keyword",
    "Location" 						=> "Location",
    "LocationCriterion" 			=> "LocationCriterion",
    "LocationCriterionServiceError" => "LocationCriterionServiceError",
    "MobileAppCategory" 			=> "MobileAppCategory",
    "MobileApplication" 			=> "MobileApplication",
    "NotEmptyError" 				=> "NotEmptyError",
    "NotWhitelistedError"		 	=> "NotWhitelistedError",
    "NullError" 					=> "NullError",
    "OperationAccessDenied" 		=> "OperationAccessDenied",
    "OrderBy" 						=> "OrderBy",
    "Paging" 						=> "Paging",
    "Placement" 					=> "Placement",
    "Predicate" 					=> "Predicate",
    "Product" 						=> "Product",
    "ProductCondition" 				=> "ProductCondition",
    "ProductConditionOperand" 		=> "ProductConditionOperand",
    "QuotaCheckError" 				=> "QuotaCheckError",
    "RangeError"				 	=> "RangeError",
    "RateExceededError" 			=> "RateExceededError",
    "ReadOnlyError" 				=> "ReadOnlyError",
    "RejectedError" 				=> "RejectedError",
    "RequestError" 					=> "RequestError",
    "RequiredError" 				=> "RequiredError",
    "Selector" 						=> "Selector",
    "SelectorError" 				=> "SelectorError",
    "SizeLimitError" 				=> "SizeLimitError",
    "SoapResponseHeader" 			=> "SoapResponseHeader",
    "StringLengthError" 			=> "StringLengthError",
    "CriterionUserInterest" 		=> "CriterionUserInterest",
    "CriterionUserList" 			=> "CriterionUserList",
    "Vertical" 						=> "Vertical",
    "Webpage" 						=> "Webpage",
    "WebpageCondition" 				=> "WebpageCondition",
    "WebpageParameter" 				=> "WebpageParameter",
    "AdxError.Reason" 				=> "AdxErrorReason",
    "AuthenticationError.Reason" 	=> "AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "AuthorizationErrorReason",
    "ClientTermsError.Reason" 		=> "ClientTermsErrorReason",
    "Criterion.Type" 				=> "CriterionType",
    "DatabaseError.Reason" 			=> "DatabaseErrorReason",
    "DateError.Reason" 				=> "DateErrorReason",
    "DistinctError.Reason" 			=> "DistinctErrorReason",
    "IdError.Reason" 				=> "IdErrorReason",
    "InternalApiError.Reason" 		=> "InternalApiErrorReason",
    "KeywordMatchType" 				=> "KeywordMatchType",
    "LocationCriterionServiceError.Reason" => "LocationCriterionServiceErrorReason",
    "LocationTargetingStatus" 		=> "LocationTargetingStatus",
    "NotEmptyError.Reason" 			=> "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 	=> "NotWhitelistedErrorReason",
    "NullError.Reason" 				=> "NullErrorReason",
    "OperationAccessDenied.Reason" 	=> "OperationAccessDeniedReason",
    "Predicate.Operator"		 	=> "PredicateOperator",
    "QuotaCheckError.Reason" 		=> "QuotaCheckErrorReason",
    "RangeError.Reason" 			=> "RangeErrorReason",
    "RateExceededError.Reason" 		=> "RateExceededErrorReason",
    "ReadOnlyError.Reason"		 	=> "ReadOnlyErrorReason",
    "RejectedError.Reason" 			=> "RejectedErrorReason",
    "RequestError.Reason" 			=> "RequestErrorReason",
    "RequiredError.Reason" 			=> "RequiredErrorReason",
    "SelectorError.Reason" 			=> "SelectorErrorReason",
    "SizeLimitError.Reason" 		=> "SizeLimitErrorReason",
    "SortOrder" 					=> "SortOrder",
    "StringLengthError.Reason" 		=> "StringLengthErrorReason",
    "CriterionUserList.MembershipStatus" => "CriterionUserListMembershipStatus",
    "WebpageConditionOperand" 			 => "WebpageConditionOperand",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/LocationCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = LocationCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'LocationCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of {@link LocationCriterion}'s that match the specified selector.
   * 
   * @param selector filters the LocationCriterion to be returned.
   * @return A list of location criterion.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($selector) {
    $arg = new LocationCriterionServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }
}