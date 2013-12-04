<?php
/**
 * Contains all client objects for the FeedMappingService service.
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
	Google\Api\Ads\AdWords\v201306\Common\FeedMappingServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\FeedMappingServiceMutate;


/**
 * FeedMappingService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class FeedMappingService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingServiceGetResponse",
    "get" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingServiceGet",
    "mutate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingServiceMutate",
    "mutateResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingServiceMutateResponse",
    "DateTime" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AttributeFieldMapping" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AttributeFieldMapping",
    "AuthenticationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateRange"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityNotFound" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "FeedMapping" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMapping",
    "FeedMappingError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingError",
    "FeedMappingOperation" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingOperation",
    "Operation" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "FeedMappingPage" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingPage",
    "NullStatsPage" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullStatsPage",
    "FeedMappingReturnValue" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingReturnValue",
    "ListReturnValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "IdError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError"					 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "Page" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "OperationAccessDenied" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate"		 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Selector" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AuthenticationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityNotFound.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "FeedMapping.Status" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingStatus",
    "FeedMappingError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedMappingErrorReason",
    "IdError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "OperationAccessDenied.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/FeedMappingService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = FeedMappingService::$classmap;
    parent::__construct($wsdl, $options, $user, 'FeedMappingService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of FeedMappings that meet the selector criteria.
   * 
   * @param selector Determines which FeedMappings to return. If empty all
   * FeedMappings are returned.
   * @return The list of FeedMappings.
   * @throws ApiException indicates a problem with the request.
   */
  public function get($selector) {
    $arg = new FeedMappingServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE.</span>
   * 
   * 
   * 
   * Add and remove FeedMappings.
   * 
   * @param operations The operations to apply.
   * @return The resulting FeedMappings.
   * @throws ApiException indicates a problem with the request.
   */
  public function mutate($operations) {
    $arg = new FeedMappingServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}