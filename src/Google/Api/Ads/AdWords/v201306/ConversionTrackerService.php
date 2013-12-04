<?php
/**
 * Contains all client objects for the ConversionTrackerService service.
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
    Google\Api\Ads\AdWords\v201306\Common\ConversionTrackerServiceGet,
    Google\Api\Ads\AdWords\v201306\Common\ConversionTrackerServiceMutate;

/**
 * ConversionTrackerService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ConversionTrackerService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerServiceGetResponse",
    "get" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerServiceGet",
    "mutate" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerServiceMutate",
    "mutateResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerServiceMutateResponse",
    "DateTime" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdWordsConversionTracker" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsConversionTracker",
    "ConversionTracker" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTracker",
    "AppConversion" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AppConversion",
    "AuthenticationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "ConversionTrackingError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackingError",
    "DateError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue"					 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "IdError"				 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "LongValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "Money" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ComparableValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "NotEmptyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "OperationAccessDenied" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError"			 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "ConversionTrackerStats" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerStats",
    "ConversionTrackerOperation" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerOperation",
    "Operation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "ConversionTrackerReturnValue" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerReturnValue",
    "ListReturnValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "DatabaseError"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "ConversionTrackerPage" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerPage",
    "NoStatsPage" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NoStatsPage",
    "Page" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "Selector" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AdWordsConversionTracker.MarkupLanguage" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsConversionTrackerMarkupLanguage",
    "AdWordsConversionTracker.TextFormat" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsConversionTrackerTextFormat",
    "AdWordsConversionTracker.TrackingCodeType" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsConversionTrackerTrackingCodeType",
    "AppConversion.AppConversionType" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AppConversionAppConversionType",
    "AppConversion.AppPlatform" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AppConversionAppPlatform",
    "AuthenticationError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "ConversionTracker.Category" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerCategory",
    "ConversionTracker.Status"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackerStatus",
    "ConversionTrackingError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionTrackingErrorReason",
    "DatabaseError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "IdError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "OperationAccessDenied.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ConversionTrackerService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ConversionTrackerService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ConversionTrackerService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of the conversion trackers that match the selector. The
   * actual objects contained in the page's list of entries will be specific
   * subclasses of the abstract {@link ConversionTracker} class.
   * 
   * @param serviceSelector The selector specifying the
   * {@link ConversionTracker}s to return.
   * @return List of conversion trackers specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   */
  public function get($serviceSelector) {
    $arg = new ConversionTrackerServiceGet($serviceSelector);
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
   * Applies the list of mutate operations such as adding or updating conversion trackers.
   * <p class="note"><b>Note:</b> {@link ConversionTrackerOperation} does not support the
   * <code>REMOVE</code> operator.</p>
   * 
   * @param operations A list of mutate operations to perform.
   * @return The list of the conversion trackers as they appear after mutation,
   * in the same order as they appeared in the list of operations.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while updating the data.
   */
  public function mutate($operations) {
    $arg = new ConversionTrackerServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}
