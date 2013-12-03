<?php
/**
 * Contains all client objects for the AdGroupFeedService service.
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
	Google\Api\Ads\AdWords\v201306\Common\AdGroupFeedServiceGet;

/**
 * AdGroupFeedService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdGroupFeedService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedServiceGetResponse",
    "get" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedServiceGet",
    "mutate" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedServiceMutate",
    "mutateResponse" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedServiceMutateResponse",
    "mutateCallToAction" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedServiceMutateCallToAction",
    "search" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedServiceSearch",
    "Function" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedFunction",
    "DateTime" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdGroupFeed" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeed",
    "AdGroupFeedError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedError",
    "ApiError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdGroupFeedOperation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedOperation",
    "Operation" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdGroupFeedPage" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedPage",
    "NullStatsPage" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullStatsPage",
    "AdGroupFeedReturnValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedReturnValue",
    "ListReturnValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "ApiException" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "ClientTermsError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CollectionSizeError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeError",
    "ConstantOperand"				 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConstantOperand",
    "FunctionArgumentOperand" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FunctionArgumentOperand",
    "DatabaseError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "DateRange" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityCountLimitExceeded" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "FeedAttributeOperand" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedAttributeOperand",
    "FunctionError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FunctionError",
    "FunctionOperand" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FunctionOperand",
    "IdError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "Page" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "OperationAccessDenied" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OrderBy" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestContextOperand" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestContextOperand",
    "RequestError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "Selector" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "SelectorError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "AdGroupFeed.Status" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedStatus",
    "AdGroupFeedError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupFeedErrorReason",
    "AuthenticationError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "ClientTermsError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "CollectionSizeError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeErrorReason",
    "ConstantOperand.ConstantType" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConstantOperandConstantType",
    "DatabaseError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "Function.Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FunctionOperator",
    "FunctionError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FunctionErrorReason",
    "IdError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "Predicate.Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestContextOperand.ContextType" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestContextOperandContextType",
    "RequestError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupFeedService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupFeedService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupFeedService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of AdGroupFeeds that meet the selector criteria.
   * 
   * @param selector Determines which AdGroupFeeds to return. If empty all
   * adgroup feeds are returned.
   * @return The list of AdgroupFeeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector) {
    $arg = new AdGroupFeedServiceGet($selector);
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
   * Adds, updates or removes AdGroupFeeds.
   * 
   * @param operations The operations to apply.
   * @return The resulting Feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations) {
    $arg = new AdGroupFeedServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}