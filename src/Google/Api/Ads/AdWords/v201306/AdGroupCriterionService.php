<?php
/**
 * Contains all client objects for the AdGroupCriterionService service.
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
	Google\Api\Ads\AdWords\v201306\Common\AdGroupCriterionServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\AdGroupCriterionServiceMutate,
	Google\Api\Ads\AdWords\v201306\Common\query;

class AdGroupCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionServiceGetResponse",
    "get" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionServiceGet",
    "mutate" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionServiceMutate",
    "mutateResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionServiceMutateResponse",
    "DateTime" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdGroupCriterionError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionError",
    "ApiError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdGroupCriterionLimitExceeded" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionLimitExceeded",
    "EntityCountLimitExceeded" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "AdxError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "AgeRange" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AgeRange",
    "Criterion" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Criterion",
    "AuthenticationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "BiddingError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingError",
    "BiddingErrors" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrors",
    "ClientTermsError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "ConversionOptimizerBiddingScheme" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingScheme",
    "BiddingScheme" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingScheme",
    "CriterionError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionError",
    "CriterionPolicyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionPolicyError",
    "PolicyViolationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationError",
    "DateError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EnhancedCpcBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EnhancedCpcBiddingScheme",
    "EntityAccessDenied" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityAccessDenied",
    "EntityNotFound" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "ForwardCompatibilityError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityError",
    "Gender" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Gender",
    "IdError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "Keyword"		 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Keyword",
    "LongValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "ManualCpcBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpmBiddingScheme",
    "MobileAppCategory" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAppCategory",
    "MobileApplication" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileApplication",
    "Money" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ComparableValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "NegativeAdGroupCriterion" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NegativeAdGroupCriterion",
    "AdGroupCriterion" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterion",
    "NewEntityCreationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OrderBy" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PagingError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingError",
    "PercentCpaBid" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBid",
    "Bids" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Bids",
    "PercentCpaBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBiddingScheme",
    "Placement"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Placement",
    "PolicyViolationError.Part" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationErrorPart",
    "PolicyViolationKey" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationKey",
    "Predicate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "ProductConditionOperand" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductConditionOperand",
    "QualityInfo" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QualityInfo",
    "QueryError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryError",
    "QuotaCheckError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StatsQueryError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryError",
    "StringLengthError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "String_StringMapEntry"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\String_StringMapEntry",
    "CriterionUserInterest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserInterest",
    "CriterionUserList" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserList",
    "Vertical" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Vertical",
    "WebpageCondition" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageCondition",
    "WebpageParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageParameter",
    "CriterionParameter" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionParameter",
    "CpaBid" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpaBid",
    "CpcBid" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpcBid",
    "CpmBid" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpmBid",
    "DatabaseError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ExemptionRequest" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExemptionRequest",
    "PageOnePromotedBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingScheme",
    "ProductCondition" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductCondition",
    "Stats" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Stats",
    "TargetCpaBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetCpaBiddingScheme",
    "TargetSpendBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetSpendBiddingScheme",
    "Webpage" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Webpage",
    "ApiException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Bid" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Bid",
    "BidMultiplier" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidMultiplier",
    "BudgetOptimizerBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOptimizerBiddingScheme",
    "ManualCPCAdGroupCriterionExperimentBidMultiplier" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCPCAdGroupCriterionExperimentBidMultiplier",
    "AdGroupCriterionExperimentBidMultiplier" 		   	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionExperimentBidMultiplier",
    "Product" 										   	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Product",
    "Selector" 										   	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "BiddableAdGroupCriterionExperimentData" 		    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddableAdGroupCriterionExperimentData",
    "BiddingStrategyConfiguration" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyConfiguration",
    "BiddableAdGroupCriterion" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddableAdGroupCriterion",
    "AdGroupCriterionOperation" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionOperation",
    "Operation" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdGroupCriterionPage" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionPage",
    "Page"			 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AdGroupCriterionReturnValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionReturnValue",
    "ListReturnValue" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AdGroupCriterionError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionErrorReason",
    "AdGroupCriterionLimitExceeded.CriteriaLimitType" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionLimitExceededCriteriaLimitType",
    "AdxError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AgeRange.AgeRangeType" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AgeRangeAgeRangeType",
    "ApprovalStatus" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApprovalStatus",
    "AuthenticationError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "BidSource" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidSource",
    "BiddingError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorReason",
    "BiddingErrors.Reason"		 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorsReason",
    "BiddingStrategySource" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategySource",
    "BiddingStrategyType"			 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyType",
    "ClientTermsError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "ConversionOptimizerBiddingScheme.BidType" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemePricingMode",
    "Criterion.Type" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionType",
    "CriterionError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionErrorReason",
    "CriterionUse" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUse",
    "DatabaseError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityAccessDenied.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityAccessDeniedReason",
    "EntityCountLimitExceeded.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "ExperimentDataStatus" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDataStatus",
    "ExperimentDeltaStatus" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDeltaStatus",
    "ForwardCompatibilityError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityErrorReason",
    "Gender.GenderType"		 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GenderGenderType",
    "IdError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "KeywordMatchType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordMatchType",
    "MultiplierSource" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MultiplierSource",
    "NewEntityCreationError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "PageOnePromotedBiddingScheme.StrategyGoal" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingSchemeStrategyGoal",
    "PagingError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingErrorReason",
    "Predicate.Operator" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QueryError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryErrorReason",
    "QuotaCheckError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "Stats.Network" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsNetwork",
    "StatsQueryError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryErrorReason",
    "StringLengthError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "SystemServingStatus" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SystemServingStatus",
    "CriterionUserList.MembershipStatus" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserListMembershipStatus",
    "UserStatus" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserStatus",
    "WebpageConditionOperand" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageConditionOperand",
    "query" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\query",
    "queryResponse" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\queryResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets adgroup criteria.
   * 
   * @param serviceSelector filters the adgroup criteria to be returned.
   * @return a page (subset) view of the criteria selected
   * @throws ApiException when there is at least one error with the request
   */
  public function get($serviceSelector) {
    $arg = new AdGroupCriterionServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   * 
   * 
   * 
   * Adds, removes or updates adgroup criteria.
   * 
   * @param operations operations to do
   * during checks on keywords to be added.
   * @return added and updated adgroup criteria (without optional parts)
   * @throws ApiException when there is at least one error with the request
   */
  public function mutate($operations) {
    $arg = new AdGroupCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of AdGroupCriterion that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @returns A list of AdGroupCriterion
   * @throws ApiException when the query is invalid or there are errors processing the request.
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }
}