<?php
/**
 * Contains all client objects for the AdGroupService service.
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

/** Required classes. **/

namespace Google\Api\Ads\AdWords\v201306;

use \Google\Api\Ads\AdWords\Lib\AdWordsSoapClient,
    \Google\Api\Ads\AdWords\v201306\Common\AdGroupServiceGet;

/**
 * AdGroupService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdGroupService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceGetResponse",
    "get" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceGet",
    "mutate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceMutate",
    "mutateResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceMutateResponse",
    "DateTime" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdGroupServiceError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceError",
    "ApiError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdxError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "AuthenticationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "BiddingError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingError",
    "BiddingErrors" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrors",
    "ClientTermsError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "ConversionOptimizerBiddingScheme" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingScheme",
    "BiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingScheme",
    "DateError"							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange"							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 				    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EnhancedCpcBiddingScheme"	 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EnhancedCpcBiddingScheme",
    "EntityCountLimitExceeded" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "ForwardCompatibilityError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityError",
    "IdError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "LongValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "ManualCpcBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpmBiddingScheme",
    "Money" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ComparableValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "NewEntityCreationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PercentCpaBid" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBid",
    "Bids" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Bids",
    "PercentCpaBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBiddingScheme",
    "Predicate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QueryError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryError",
    "QuotaCheckError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "QuotaError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaError",
    "RangeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SettingError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SettingError",
    "SizeLimitError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StatsQueryError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryError",
    "StringLengthError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "String_StringMapEntry" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\String_StringMapEntry",
    "TargetingSettingDetail" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingSettingDetail",
    "TargetingSetting" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingSetting",
    "Setting" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Setting",
    "CpaBid" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpaBid",
    "CpcBid" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpcBid",
    "CpmBid"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpmBid",
    "DatabaseError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "PageOnePromotedBiddingScheme" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingScheme",
    "Stats" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Stats",
    "TargetCpaBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetCpaBiddingScheme",
    "TargetSpendBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetSpendBiddingScheme",
    "ApiException" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Bid" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Bid",
    "BidMultiplier" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidMultiplier",
    "BudgetOptimizerBiddingScheme" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOptimizerBiddingScheme",
    "ManualCPCAdGroupExperimentBidMultipliers" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCPCAdGroupExperimentBidMultipliers",
    "AdGroupExperimentBidMultipliers"				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupExperimentBidMultipliers",
    "ManualCPMAdGroupExperimentBidMultipliers" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCPMAdGroupExperimentBidMultipliers",
    "Selector" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AdGroupExperimentData" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupExperimentData",
    "BiddingStrategyConfiguration" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyConfiguration",
    "AdGroup" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroup",
    "AdGroupOperation" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupOperation",
    "Operation" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdGroupPage" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupPage",
    "Page" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AdGroupReturnValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupReturnValue",
    "ListReturnValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AdGroupServiceError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceErrorReason",
    "AdGroup.Status" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupStatus",
    "AdxError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason"	 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "BidSource" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidSource",
    "BiddingError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorReason",
    "BiddingErrors.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorsReason",
    "BiddingStrategySource" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategySource",
    "BiddingStrategyType"		 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyType",
    "ClientTermsError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "ConversionOptimizerBiddingScheme.BidType" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemePricingMode",
    "CriterionTypeGroup" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionTypeGroup",
    "DatabaseError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "ExperimentDataStatus" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDataStatus",
    "ExperimentDeltaStatus" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDeltaStatus",
    "ForwardCompatibilityError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityErrorReason",
    "IdError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NewEntityCreationError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "PageOnePromotedBiddingScheme.StrategyGoal" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingSchemeStrategyGoal",
    "Predicate.Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QueryError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryErrorReason",
    "QuotaCheckError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "QuotaError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaErrorReason",
    "RangeError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SettingError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SettingErrorReason",
    "SizeLimitError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "Stats.Network" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsNetwork",
    "StatsQueryError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryErrorReason",
    "StringLengthError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "query" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\query",
    "queryResponse" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\queryResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of all the ad groups specified by the selector
   * from the target customer's account.
   * 
   * @param serviceSelector The selector specifying the {@link AdGroup}s to return.
   * @return List of adgroups identified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new AdGroupServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Adds, updates, or deletes ad groups.
   * <p class="note"><b>Note:</b> {@link AdGroupOperation} does not support the
   * {@code REMOVE} operator. To delete an ad group, set its
   * {@link AdGroup#status status} to {@code DELETED}.</p>
   * 
   * @param operations List of unique operations. The same ad group cannot be
   * specified in more than one operation.
   * @return The updated adgroups.
   */
  public function mutate($operations) {
    $arg = new AdGroupServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of ad groups that match the query.
   * 
   * @param query The SQL-like AWQL query string
   * @return A list of adgroups
   * @throws ApiException
   */
  public function query($query) {
    $arg = new query($query);
    $result = $this->__soapCall("query", array($arg));
    return $result->rval;
  }
}