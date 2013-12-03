<?php
/**
 * Contains all client objects for the BiddingStrategyService service.
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
	Google\Api\Ads\AdWords\v201306\Common\AdExtensionOverrideServiceGet;

/**
 * BiddingStrategyService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class BiddingStrategyService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyServiceGetResponse",
    "get" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyServiceGet",
    "mutate" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyServiceMutate",
    "mutateResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyServiceMutateResponse",
    "DateTime" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdxError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "ApiError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthenticationError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "BiddingErrors" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrors",
    "BiddingStrategyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyError",
    "ClientTermsError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "ConversionOptimizerBiddingScheme" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingScheme",
    "BiddingScheme" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingScheme",
    "DateError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EnhancedCpcBiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EnhancedCpcBiddingScheme",
    "EntityCountLimitExceeded" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "LongValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "ManualCpcBiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpmBiddingScheme",
    "Money" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ComparableValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "NewEntityCreationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OrderBy" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PercentCpaBiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBiddingScheme",
    "Predicate" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "PageOnePromotedBiddingScheme" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingScheme",
    "TargetCpaBiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetCpaBiddingScheme",
    "TargetSpendBiddingScheme" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetSpendBiddingScheme",
    "ApiException" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException"						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "BudgetOptimizerBiddingScheme"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOptimizerBiddingScheme",
    "Selector" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "SharedBiddingStrategy" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedBiddingStrategy",
    "BiddingStrategyOperation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyOperation",
    "Operation"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "BiddingStrategyPage" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyPage",
    "Page" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "BiddingStrategyReturnValue"		 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyReturnValue",
    "ListReturnValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AdxError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "BiddingErrors.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorsReason",
    "SharedBiddingStrategy.BiddingStrategyStatus"   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedBiddingStrategyBiddingStrategyStatus",
    "BiddingStrategyError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyErrorReason",
    "BiddingStrategyType" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyType",
    "ClientTermsError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "ConversionOptimizerBiddingScheme.BidType" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemePricingMode",
    "DatabaseError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NewEntityCreationError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "Operator"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "PageOnePromotedBiddingScheme.StrategyGoal" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingSchemeStrategyGoal",
    "Predicate.Operator" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/BiddingStrategyService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = BiddingStrategyService::$classmap;
    parent::__construct($wsdl, $options, $user, 'BiddingStrategyService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bidding strategies that match the selector.
   * 
   * @return list of bidding strategies specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   */
  public function get($selector) {
    $arg = new BiddingStrategyServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations.
   * 
   * @param operations the operations to apply
   * @return the modified list of BiddingStrategy
   * @throws ApiException
   */
  public function mutate($operations) {
    $arg = new BiddingStrategyServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}