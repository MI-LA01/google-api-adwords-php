<?php
/**
 * Contains all client objects for the CampaignSharedSetService service.
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
	Google\Api\Ads\AdWords\v201306\Common\CampaignSharedSetServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\CampaignSharedSetServiceMutate;

/**
 * CampaignSharedSetService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CampaignSharedSetService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetServiceGetResponse",
    "get" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetServiceGet",
    "mutate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetServiceMutate",
    "mutateResponse"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetServiceMutateResponse",
    "DateTime" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "CampaignSharedSet" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSet",
    "CampaignSharedSetError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetError",
    "CampaignSharedSetOperation" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetOperation",
    "Operation"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "CampaignSharedSetPage" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetPage",
    "NullStatsPage" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullStatsPage",
    "CampaignSharedSetReturnValue" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetReturnValue",
    "ListReturnValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "ClientTermsError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityCountLimitExceeded" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NewEntityCreationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "Page" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "OperationAccessDenied" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PagingError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingError",
    "Predicate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError"					 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Selector" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AuthenticationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "CampaignSharedSet.Status" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetStatus",
    "CampaignSharedSetError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignSharedSetErrorReason",
    "ClientTermsError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NewEntityCreationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason"	 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "PagingError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingErrorReason",
    "Predicate.Operator" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SharedSetType" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedSetType",
    "SizeLimitError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignSharedSetService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CampaignSharedSetService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CampaignSharedSetService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of CampaignSharedSets based on the given selector.
   * @param selector the selector specifying the query
   * @return a list of CampaignSharedSet entities that meet the criterion specified
   * by the selector
   * @throws ApiException
   */
  public function get($selector) {
    $arg = new CampaignSharedSetServiceGet($selector);
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
   * Applies the list of mutate operations.
   * @param operations the operations to apply
   * @return the modified list of CampaignSharedSet associations
   * @throws ApiException
   */
  public function mutate($operations) {
    $arg = new CampaignSharedSetServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}