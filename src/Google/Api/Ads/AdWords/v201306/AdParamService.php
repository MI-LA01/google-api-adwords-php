<?php
/**
 * Contains all client objects for the AdParamService service.
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
	Google\Api\Ads\AdWords\v201306\Common\AdParamServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\AdParamServiceMutate;

/**
 * AdParamService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdParamService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamServiceGetResponse",
    "get" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamServiceGet",
    "mutate" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamServiceMutate",
    "mutateResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamServiceMutateResponse",
    "DateTime"                                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader"                                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdParam"                                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParam",
    "AdParamError"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamError",
    "ApiError"                                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdParamOperation"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamOperation",
    "Operation"                                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdParamPage"                               => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamPage",
    "AdParamPolicyError"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamPolicyError",
    "PolicyViolationError"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationError",
    "AdxError"                                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "AuthenticationError"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateRange"                                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "IdError"                                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError"                                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied"                     => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy"                                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging"                                    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PolicyViolationError.Part"                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationErrorPart",
    "PolicyViolationKey"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationKey",
    "Predicate"                                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError"                           => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError"                                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError"                            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Selector"                                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AdParamError.Reason"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdParamErrorReason",
    "AdxError.Reason"                           => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason"                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason"                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "IdError.Reason"                            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason"                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason"              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator"                                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason"                    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason"                     => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder"                                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdParamService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdParamService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdParamService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the ad parameters that match the criteria specified in the
   * selector.
   * 
   * @param serviceSelector Specifies which ad parameters to return.
   * @return A list of ad parameters.
   */
  public function get($serviceSelector) {
    $arg = new AdParamServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, REMOVE.</span>
   * 
   * 
   * 
   * Sets and removes ad parameters.
   * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
   * for new ad parameters.</p>
   * 
   * <ul class="nolist">
   * <li>{@code SET}: Creates or updates an ad parameter, setting the new
   * parameterized value for the given ad group / keyword pair.
   * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
   * </code> specified in the ad text will be used.</li>
   * </ul>
   * 
   * @param operations The operations to perform.
   * @return A list of ad parameters, where each entry in the list is the
   * result of applying the operation in the input list with the same index.
   * For a {@code SET} operation, the returned ad parameter will contain the
   * updated values. For a {@code REMOVE} operation, the returned ad parameter
   * will simply be the ad parameter that was removed.
   */
  public function mutate($operations) {
    $arg = new AdParamServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}