<?php
/**
 * Contains all client objects for the ManagedCustomerService service.
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
	Google\Api\Ads\AdWords\v201306\Common\ManagedCustomerServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\getPendingInvitations,
	Google\Api\Ads\AdWords\v201306\Common\ManagedCustomerServiceMutate,
	Google\Api\Ads\AdWords\v201306\Common\mutateLink,
	Google\Api\Ads\AdWords\v201306\Common\mutateManager;

/**
 * ManagedCustomerService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ManagedCustomerService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerServiceGetResponse",
    "get" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerServiceGet",
    "mutate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerServiceMutate",
    "mutateResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerServiceMutateResponse",
    "DateTime" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "IdError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperatorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate"				 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError"					 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Selector" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "Operation" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "Page" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AuthenticationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "IdError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "ManagedCustomerServiceError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerServiceError",
    "PendingInvitationSelector" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PendingInvitationSelector",
    "ManagedCustomerLink" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerLink",
    "LinkOperation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LinkOperation",
    "MoveOperation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MoveOperation",
    "MutateLinkResults" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MutateLinkResults",
    "MutateManagerResults" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MutateManagerResults",
    "ManagedCustomer" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomer",
    "ManagedCustomerOperation" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerOperation",
    "ManagedCustomerPage" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerPage",
    "ManagedCustomerReturnValue" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerReturnValue",
    "PendingInvitation" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PendingInvitation",
    "LinkStatus" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LinkStatus",
    "ManagedCustomerServiceError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManagedCustomerServiceErrorReason",
    "getPendingInvitations" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getPendingInvitations",
    "getPendingInvitationsResponse" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getPendingInvitationsResponse",
    "mutateLink" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\mutateLink",
    "mutateLinkResponse"		 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\mutateLinkResponse",
    "mutateManager" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\mutateManager",
    "mutateManagerResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\mutateManagerResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/mcm/v201306/ManagedCustomerService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ManagedCustomerService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ManagedCustomerService', 'https://adwords.google.com/api/adwords/mcm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of customers that meet the selector criteria.
   * 
   * @param selector The selector specifying the {@link ManagedCustomer}s to return.
   * @return List of customers identified by the selector.
   * @throws ApiException When there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new ManagedCustomerServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the pending invitations for the customer IDs in the selector.
   * @param selector the manager customer ids (inviters) or the client customer ids (invitees)
   * @throws ApiException when there is at least one error with the request
   */
  public function getPendingInvitations($selector) {
    $arg = new getPendingInvitations($selector);
    $result = $this->__soapCall("getPendingInvitations", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
   * 
   * 
   * 
   * Adds managed customers.
   * 
   * <p class="note"><b>Note:</b> {@link ManagedCustomerOperation} only supports
   * {@code ADD} operator. </p>
   * 
   * @param operations List of unique operations.
   * @return The list of updated managed customers, returned in the same order as the
   * <code>operations</code> array.
   */
  public function mutate($operations) {
    $arg = new ManagedCustomerServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET, ADD.</span>
   * 
   * 
   * 
   * Modifies the ManagedCustomer forest. These actions are possible (categorized by
   * Operator + Link Status):
   * 
   * <ul>
   * <li>ADD + PENDING:   manager extends invitations
   * <li>SET + CANCELLED: manager rescinds invitations
   * <li>SET + INACTIVE:  manager/client terminates links
   * <li>SET + ACTIVE:    client accepts invitations
   * <li>SET + REFUSED:   client declines invitations
   * </ul>
   * 
   * @param operations the list of operations
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   */
  public function mutateLink($operations) {
    $arg = new mutateLink($operations);
    $result = $this->__soapCall("mutateLink", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: SET.</span>
   * 
   * 
   * 
   * Moves client customers to new managers (moving links). Only the following action is possible:
   * 
   * <ul>
   * <li>SET + ACTIVE: manager moves client customers to new managers within the same MCC
   * hierarchy
   * </ul>
   * 
   * @param operations List of unique operations.
   * @return results for the given operations
   * @throws ApiException with a {@link ManagedCustomerServiceError}
   */
  public function mutateManager($operations) {
    $arg = new mutateManager($operations);
    $result = $this->__soapCall("mutateManager", array($arg));
    return $result->rval;
  }
}