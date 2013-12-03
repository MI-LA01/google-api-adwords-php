<?php
/**
 * Contains all client objects for the BudgetOrderService service.
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
	Google\Api\Ads\AdWords\v201306\Common\BudgetOrderServiceGet;

/**
 * BudgetOrderService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class BudgetOrderService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderServiceGetResponse",
    "get" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderServiceGet",
    "mutate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderServiceMutate",
    "mutateResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderServiceMutateResponse",
    "DateTime" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "ApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "ApiException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "ComparableValue" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "DatabaseError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "DateError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EntityNotFound" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "ListReturnValue" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "LongValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "Money" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "NewEntityCreationError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "Operation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "OperationAccessDenied" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Page" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "Paging" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PagingError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingError",
    "Predicate" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "Selector" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "SelectorError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StatsQueryError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryError",
    "StringLengthError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityNotFound.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NewEntityCreationError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "PagingError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingErrorReason",
    "Predicate.Operator" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StatsQueryError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryErrorReason",
    "StringLengthError.Reason"		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "BillingAccount" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BillingAccount",
    "BudgetOrderError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderError",
    "CustomerOrderLineError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerOrderLineError",
    "BudgetOrderRequest" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderRequest",
    "BudgetOrder" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrder",
    "BudgetOrderOperation" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderOperation",
    "BudgetOrderPage" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderPage",
    "BudgetOrderReturnValue" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderReturnValue",
    "BudgetOrderError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderErrorReason",
    "BudgetOrderRequest.Status" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOrderRequestStatus",
    "CustomerOrderLineError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CustomerOrderLineErrorReason",
    "getBillingAccounts" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getBillingAccounts",
    "getBillingAccountsResponse" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getBillingAccountsResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/billing/v201306/BudgetOrderService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = BudgetOrderService::$classmap;
    parent::__construct($wsdl, $options, $user, 'BudgetOrderService', 'https://adwords.google.com/api/adwords/billing/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Gets a list of {@link BudgetOrder}s using the generic selector.
   * @param serviceSelector specifies which BudgetOrder to return.
   * @return A {@link BudgetOrderPage} of BudgetOrders of the client customer.
   * All BudgetOrder fields are returned. Stats are not yet supported.
   * @throws ApiException
   */
  public function get($serviceSelector) {
    $arg = new BudgetOrderServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * Returns all the open/active BillingAccounts associated with the current
   * manager.
   * @return A list of {@link BillingAccount}s.
   * @throws ApiException
   */
  public function getBillingAccounts() {
    $arg = new getBillingAccounts();
    $result = $this->__soapCall("getBillingAccounts", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET, REMOVE.</span>
   * 
   * 
   * 
   * Mutates BudgetOrders, supported operations are:
   * <p><code>ADD</code>: Adds a {@link BudgetOrder} to the billing account
   * specified by the billing account ID.</p>
   * <p><code>SET</code>: Sets the start/end date and amount of the
   * {@link BudgetOrder}.</p>
   * <p><code>REMOVE</code>: Cancels the {@link BudgetOrder} (status change).</p>
   * <p class="warning"><b>Warning:</b> The <code>BudgetOrderService</code>
   * is limited to one operation per mutate request. Any attempt to make more
   * than one operation will result in an <code>ApiException</code>.</p>
   * @param operations A list of operations, <b>however currently we only
   * support one operation per mutate call</b>.
   * @return BudgetOrders affected by the mutate operation.
   * @throws ApiException
   */
  public function mutate($operations) {
    $arg = new BudgetOrderServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}