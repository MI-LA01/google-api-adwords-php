<?php
/**
 * Contains all client objects for the CampaignCriterionService service.
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
	Google\Api\Ads\AdWords\v201306\Common\CampaignCriterionServiceGet;

/**
 * CampaignCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CampaignCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 								=> "CampaignCriterionServiceGetResponse",
    "get" 										=> "CampaignCriterionServiceGet",
    "mutate" 									=> "CampaignCriterionServiceMutate",
    "mutateResponse" 							=> "CampaignCriterionServiceMutateResponse",
    "DateTime" 									=> "AdWordsDateTime",
    "SoapHeader" 								=> "SoapRequestHeader",
    "AdSchedule" 								=> "AdSchedule",
    "Criterion" 								=> "Criterion",
    "Address" 									=> "Address",
    "AdxError" 									=> "AdxError",
    "ApiError" 									=> "ApiError",
    "AgeRange" 									=> "AgeRange",
    "ApiException" 								=> "ApiException",
    "ApplicationException" 						=> "ApplicationException",
    "AuthenticationError" 						=> "AuthenticationError",
    "AuthorizationError" 						=> "AuthorizationError",
    "BetaError" 								=> "BetaError",
    "CampaignCriterion" 						=> "CampaignCriterion",
    "CampaignCriterionError" 					=> "CampaignCriterionError",
    "CampaignCriterionLimitExceeded" 			=> "CampaignCriterionLimitExceeded",
    "EntityCountLimitExceeded" 					=> "EntityCountLimitExceeded",
    "CampaignCriterionOperation" 				=> "CampaignCriterionOperation",
    "Operation" 								=> "Operation",
    "CampaignCriterionPage" 					=> "CampaignCriterionPage",
    "Page" 										=> "Page",
    "CampaignCriterionReturnValue" 				=> "CampaignCriterionReturnValue",
    "ListReturnValue" 							=> "ListReturnValue",
    "Carrier" 									=> "Carrier",
    "ClientTermsError"	 						=> "ClientTermsError",
    "ContentLabel" 								=> "ContentLabel",
    "CriterionError"	 						=> "CriterionError",
    "CriterionParameter" 						=> "CriterionParameter",
    "DatabaseError" 							=> "DatabaseError",
    "DateRange" 								=> "DateRange",
    "DistinctError" 							=> "DistinctError",
    "EntityNotFound" 							=> "EntityNotFound",
    "Gender" 									=> "Gender",
    "GeoPoint" 									=> "GeoPoint",
    "IdError" 									=> "IdError",
    "InternalApiError" 							=> "InternalApiError",
    "Keyword" 									=> "Keyword",
    "Language" 									=> "Language",
    "Location" 									=> "Location",
    "MobileAppCategory" 						=> "MobileAppCategory",
    "MobileApplication" 						=> "MobileApplication",
    "MobileDevice" 								=> "MobileDevice",
    "NegativeCampaignCriterion" 				=> "NegativeCampaignCriterion",
    "NewEntityCreationError" 					=> "NewEntityCreationError",
    "NotEmptyError" 							=> "NotEmptyError",
    "NotWhitelistedError" 						=> "NotWhitelistedError",
    "NullError" 								=> "NullError",
    "OperatingSystemVersion" 					=> "OperatingSystemVersion",
    "OperationAccessDenied"				 		=> "OperationAccessDenied",
    "OperatorError"			 					=> "OperatorError",
    "OrderBy" 									=> "OrderBy",
    "Paging" 									=> "Paging",
    "PagingError"			 					=> "PagingError",
    "Placement" 								=> "Placement",
    "Platform" 									=> "Platform",
    "Predicate" 								=> "Predicate",
    "Product"			 						=> "Product",
    "ProductCondition" 							=> "ProductCondition",
    "ProductConditionOperand" 					=> "ProductConditionOperand",
    "Proximity" 								=> "Proximity",
    "QueryError" 								=> "QueryError",
    "QuotaCheckError" 							=> "QuotaCheckError",
    "RangeError" 								=> "RangeError",
    "RateExceededError" 						=> "RateExceededError",
    "ReadOnlyError" 							=> "ReadOnlyError",
    "RegionCodeError" 							=> "RegionCodeError",
    "RequestError" 								=> "RequestError",
    "RequiredError" 							=> "RequiredError",
    "Selector" 									=> "Selector",
    "SelectorError" 							=> "SelectorError",
    "SizeLimitError" 							=> "SizeLimitError",
    "SoapResponseHeader" 						=> "SoapResponseHeader",
    "StringLengthError"			 				=> "StringLengthError",
    "String_StringMapEntry" 					=> "String_StringMapEntry",
    "CriterionUserInterest" 					=> "CriterionUserInterest",
    "CriterionUserList" 						=> "CriterionUserList",
    "Vertical" 									=> "Vertical",
    "Webpage"			 						=> "Webpage",
    "WebpageCondition" 							=> "WebpageCondition",
    "WebpageParameter" 							=> "WebpageParameter",
    "AdxError.Reason"				 			=> "AdxErrorReason",
    "AgeRange.AgeRangeType"				 		=> "AgeRangeAgeRangeType",
    "AuthenticationError.Reason" 				=> "AuthenticationErrorReason",
    "AuthorizationError.Reason" 				=> "AuthorizationErrorReason",
    "BetaError.Reason" 							=> "BetaErrorReason",
    "CampaignCriterionError.Reason" 			=> "CampaignCriterionErrorReason",
    "CampaignCriterionLimitExceeded.CriteriaLimitType"  => "CampaignCriterionLimitExceededCriteriaLimitType",
    "ClientTermsError.Reason" 							=> "ClientTermsErrorReason",
    "ContentLabelType" 									=> "ContentLabelType",
    "Criterion.Type" 									=> "CriterionType",
    "CriterionError.Reason" 							=> "CriterionErrorReason",
    "DatabaseError.Reason" 								=> "DatabaseErrorReason",
    "DayOfWeek" 										=> "DayOfWeek",
    "DistinctError.Reason" 								=> "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 					=> "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 							=> "EntityNotFoundReason",
    "Gender.GenderType" 								=> "GenderGenderType",
    "IdError.Reason" 									=> "IdErrorReason",
    "InternalApiError.Reason" 							=> "InternalApiErrorReason",
    "KeywordMatchType" 									=> "KeywordMatchType",
    "LocationTargetingStatus" 							=> "LocationTargetingStatus",
    "MinuteOfHour" 										=> "MinuteOfHour",
    "MobileDevice.DeviceType" 							=> "MobileDeviceDeviceType",
    "NewEntityCreationError.Reason" 					=> "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 								=> "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 						=> "NotWhitelistedErrorReason",
    "NullError.Reason" 									=> "NullErrorReason",
    "OperatingSystemVersion.OperatorType" 				=> "OperatingSystemVersionOperatorType",
    "OperationAccessDenied.Reason" 						=> "OperationAccessDeniedReason",
    "Operator" 											=> "Operator",
    "OperatorError.Reason" 								=> "OperatorErrorReason",
    "PagingError.Reason" 								=> "PagingErrorReason",
    "Predicate.Operator" 								=> "PredicateOperator",
    "Proximity.DistanceUnits" 							=> "ProximityDistanceUnits",
    "QueryError.Reason" 								=> "QueryErrorReason",
    "QuotaCheckError.Reason" 							=> "QuotaCheckErrorReason",
    "RangeError.Reason" 								=> "RangeErrorReason",
    "RateExceededError.Reason" 							=> "RateExceededErrorReason",
    "ReadOnlyError.Reason" 								=> "ReadOnlyErrorReason",
    "RegionCodeError.Reason" 							=> "RegionCodeErrorReason",
    "RequestError.Reason" 								=> "RequestErrorReason",
    "RequiredError.Reason" 								=> "RequiredErrorReason",
    "SelectorError.Reason" 								=> "SelectorErrorReason",
    "SizeLimitError.Reason" 							=> "SizeLimitErrorReason",
    "SortOrder" 										=> "SortOrder",
    "StringLengthError.Reason" 							=> "StringLengthErrorReason",
    "CriterionUserList.MembershipStatus" 				=> "CriterionUserListMembershipStatus",
    "WebpageConditionOperand" 							=> "WebpageConditionOperand",
    "query" 											=> "query",
    "queryResponse" 									=> "queryResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CampaignCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CampaignCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets campaign criteria.
   * 
   * @param serviceSelector The selector specifying the {@link CampaignCriterion}s to return.
   * @return A list of campaign criteria.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new CampaignCriterionServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
   * 
   * 
   * 
   * Adds, removes or updates campaign criteria.
   * 
   * @param operations The operations to apply.
   * @return The added campaign criteria (without any optional parts).
   * @throws ApiException when there is at least one error with the request.
   */
  public function mutate($operations) {
    $arg = new CampaignCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of campaign criteria that match the query.
   * 
   * @param query The SQL-like AWQL query string.
   * @return A list of campaign criteria.
   * @throws ApiException if problems occur while parsing the query or fetching campaign criteria.
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }
}