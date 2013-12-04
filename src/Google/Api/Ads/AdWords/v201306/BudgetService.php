<?php
/**
 * Contains all client objects for the BudgetService service.
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
	Google\Api\Ads\AdWords\v201306\Common\BudgetServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\BudgetServiceMutate;


/**
 * BudgetService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class BudgetService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "BudgetServiceGetResponse",
    "get" 								=> "BudgetServiceGet",
    "mutate" 							=> "BudgetServiceMutate",
    "mutateResponse" 					=> "BudgetServiceMutateResponse",
    "DateTime" 							=> "AdWordsDateTime",
    "SoapHeader" 						=> "SoapRequestHeader",
    "AssociatedCampaign" 				=> "AssociatedCampaign",
    "AuthenticationError" 				=> "AuthenticationError",
    "ApiError" 							=> "ApiError",
    "AuthorizationError" 				=> "AuthorizationError",
    "BudgetError" 						=> "BudgetError",
    "ClientTermsError" 					=> "ClientTermsError",
    "DateError" 						=> "DateError",
    "DateRange" 						=> "DateRange",
    "DistinctError" 					=> "DistinctError",
    "DoubleValue" 						=> "DoubleValue",
    "NumberValue" 						=> "NumberValue",
    "EntityCountLimitExceeded" 			=> "EntityCountLimitExceeded",
    "EntityNotFound" 					=> "EntityNotFound",
    "IdError" 							=> "IdError",
    "InternalApiError" 					=> "InternalApiError",
    "LongValue" 						=> "LongValue",
    "Money" 							=> "Money",
    "ComparableValue" 					=> "ComparableValue",
    "NewEntityCreationError" 			=> "NewEntityCreationError",
    "NotEmptyError" 					=> "NotEmptyError",
    "NotWhitelistedError" 				=> "NotWhitelistedError",
    "NullError" 						=> "NullError",
    "OperationAccessDenied" 			=> "OperationAccessDenied",
    "OrderBy" 							=> "OrderBy",
    "Paging" 							=> "Paging",
    "Predicate" 						=> "Predicate",
    "QuotaCheckError" 					=> "QuotaCheckError",
    "RangeError" 						=> "RangeError",
    "RateExceededError" 				=> "RateExceededError",
    "ReadOnlyError" 					=> "ReadOnlyError",
    "RejectedError" 					=> "RejectedError",
    "RequestError" 						=> "RequestError",
    "RequiredError" 					=> "RequiredError",
    "SelectorError" 					=> "SelectorError",
    "SizeLimitError" 					=> "SizeLimitError",
    "SoapResponseHeader" 				=> "SoapResponseHeader",
    "StringLengthError"				 	=> "StringLengthError",
    "DatabaseError" 					=> "DatabaseError",
    "ApiException"			 			=> "ApiException",
    "ApplicationException" 				=> "ApplicationException",
    "Budget" 							=> "Budget",
    "BudgetOperation" 					=> "BudgetOperation",
    "Operation" 						=> "Operation",
    "BudgetPage" 						=> "BudgetPage",
    "Page" 								=> "Page",
    "BudgetReturnValue" 				=> "BudgetReturnValue",
    "ListReturnValue" 					=> "ListReturnValue",
    "Selector" 							=> "Selector",
    "AssociatedCampaign.BudgetCampaignAssociationStatus" 	=> "AssociatedCampaignBudgetCampaignAssociationStatus",
    "AssociatedCampaign.CampaignStatus" 					=> "AssociatedCampaignCampaignStatus",
    "AuthenticationError.Reason" 		=> "AuthenticationErrorReason",
    "AuthorizationError.Reason" 		=> "AuthorizationErrorReason",
    "Budget.BudgetDeliveryMethod" 		=> "BudgetBudgetDeliveryMethod",
    "Budget.BudgetPeriod" 				=> "BudgetBudgetPeriod",
    "Budget.BudgetStatus" 				=> "BudgetBudgetStatus",
    "BudgetError.Reason" 				=> "BudgetErrorReason",
    "ClientTermsError.Reason" 			=> "ClientTermsErrorReason",
    "DatabaseError.Reason" 				=> "DatabaseErrorReason",
    "DateError.Reason" 					=> "DateErrorReason",
    "DistinctError.Reason" 				=> "DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 	=> "EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 			=> "EntityNotFoundReason",
    "IdError.Reason" 					=> "IdErrorReason",
    "InternalApiError.Reason" 			=> "InternalApiErrorReason",
    "NewEntityCreationError.Reason" 	=> "NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 				=> "NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 		=> "NotWhitelistedErrorReason",
    "NullError.Reason" 					=> "NullErrorReason",
    "OperationAccessDenied.Reason" 		=> "OperationAccessDeniedReason",
    "Operator" 							=> "Operator",
    "Predicate.Operator"			 	=> "PredicateOperator",
    "QuotaCheckError.Reason" 			=> "QuotaCheckErrorReason",
    "RangeError.Reason" 				=> "RangeErrorReason",
    "RateExceededError.Reason" 			=> "RateExceededErrorReason",
    "ReadOnlyError.Reason" 				=> "ReadOnlyErrorReason",
    "RejectedError.Reason" 				=> "RejectedErrorReason",
    "RequestError.Reason" 				=> "RequestErrorReason",
    "RequiredError.Reason" 				=> "RequiredErrorReason",
    "SelectorError.Reason" 				=> "SelectorErrorReason",
    "SizeLimitError.Reason" 			=> "SizeLimitErrorReason",
    "SortOrder" 						=> "SortOrder",
    "StringLengthError.Reason" 			=> "StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201302/BudgetService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = BudgetService::$classmap;
    parent::__construct($wsdl, $options, $user, 'BudgetService', 'https://adwords.google.com/api/adwords/cm/v201302');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of budgets that match the selector.
   * 
   * @return List of budgets specified by the selector.
   * @throws com.google.ads.api.services.common.error.ApiException if problems
   * occurred while retrieving results.
   */
  public function get($selector) {
    $arg = new BudgetServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint DistinctIds">Elements in this field must have distinct IDs for following {@link Operator}s : SET, REMOVE.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Applies the list of mutate operations.
   * 
   * @param operations The operations to apply.
   * @return The modified list of Budgets, returned in the same order as <code>operations</code>.
   * @throws ApiException
   */
  public function mutate($operations) {
    $arg = new BudgetServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}