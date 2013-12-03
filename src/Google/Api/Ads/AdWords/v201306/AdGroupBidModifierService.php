<?php
/**
 * Contains all client objects for the AdGroupBidModifierService service.
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
	Google\Api\Ads\AdWords\v201306\Common\AdGroupBidModifierServiceGet;

/**
 * AdGroupBidModifierService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdGroupBidModifierService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierServiceGetResponse",
    "get" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierServiceGet",
    "mutate" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierServiceMutate",
    "mutateResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierServiceMutateResponse",
    "DateTime" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError"				 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CriterionError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionError",
    "DateRange" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityNotFound" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotWhitelistedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "OperatorError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Platform" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Platform",
    "Criterion" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Criterion",
    "Predicate"		 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Selector" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AdGroupBidModifier" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifier",
    "AdGroupBidModifierOperation" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierOperation",
    "Operation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdGroupBidModifierPage" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierPage",
    "Page" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AdGroupBidModifierReturnValue" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierReturnValue",
    "ListReturnValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AuthenticationError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BidModifierSource" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidModifierSource",
    "ClientTermsError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "Criterion.Type" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionType",
    "CriterionError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionErrorReason",
    "DatabaseError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityNotFound.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotWhitelistedError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "Operator" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupBidModifierService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdGroupBidModifierService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdGroupBidModifierService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets ad group level criterion bid modifiers.
   * 
   * @param selector The selector specifying the {@link AdGroupBidModifier}s to return.
   * @return A list of ad group bid modifiers.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($selector) {
    $arg = new AdGroupBidModifierServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, REMOVE, SET.</span>
   * 
   * 
   * 
   * Adds, removes or updates ad group bid modifier overrides.
   * 
   * @param operations The operations to apply.
   * @return The added ad group bid modifier overrides.
   * @throws ApiException when there is at least one error with the request.
   */
  public function mutate($operations) {
    $arg = new AdGroupBidModifierServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}