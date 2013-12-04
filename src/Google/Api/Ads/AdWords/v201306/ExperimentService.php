<?php
/**
 * Contains all client objects for the ExperimentService service.
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
	Google\Api\Ads\AdWords\v201306\Common\ExperimentServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\ExperimentServiceMutate;

/**
 * ExperimentService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ExperimentService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServiceGetResponse",
    "get" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServiceGet",
    "mutate" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServiceMutate",
    "mutateResponse" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServiceMutateResponse",
    "DateTime" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdxError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "ApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthenticationError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BudgetError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetError",
    "ClientTermsError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityNotFound" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "ExperimentServiceError" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServiceError",
    "ExperimentSummaryStats" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentSummaryStats",
    "IdError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NewEntityCreationError" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate"				 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "QuotaError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaError",
    "RangeError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError"				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "Experiment" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Experiment",
    "ExperimentOperation" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentOperation",
    "Operation" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "ExperimentReturnValue" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentReturnValue",
    "ListReturnValue" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "ApiException"		 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException"		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "ExperimentPage" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentPage",
    "Page" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "Selector" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AdxError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BudgetError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityNotFound.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "ExperimentServiceError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServiceErrorReason",
    "ExperimentServingStatus" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentServingStatus",
    "ExperimentStatus" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentStatus",
    "IdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NewEntityCreationError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "QuotaError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaErrorReason",
    "RangeError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ExperimentService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ExperimentService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ExperimentService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of experiments specified by the experiment selector from
   * the customer's account.
   * @param serviceSelector The selector specifying the {@link Experiment}s to return.
   * If selector is empty, all experiments are returned.
   * @return List of experiments meeting all the criteria of each selector.
   * @throws ApiException if problems occurred while fetching experiment information.
   */
  public function get($serviceSelector) {
    $arg = new ExperimentServiceGet($serviceSelector);
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
   * Mutates (add, update or remove) experiments.
   * <b>Note:</b> To REMOVE use SET and mark status to DELETED.
   * @param operations A list of unique operations.
   * The same experiment cannot be specified in more than one operation.
   * @return The updated experiments. The list of experiments is returned in
   * the same order in which it came in as input.
   * @throws ApiException if problems occurred while updating experiment information.
   */
  public function mutate($operations) {
    $arg = new ExperimentServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}