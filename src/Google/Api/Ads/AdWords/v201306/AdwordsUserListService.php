<?php
/**
 * Contains all client objects for the AdwordsUserListService service.
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
	Google\Api\Ads\AdWords\v201306\Common\AdwordsUserListServiceGet;

/**
 * AdwordsUserListService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdwordsUserListService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl =>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdwordsUserListServiceGetResponse",
    "get"                                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdwordsUserListServiceGet",
    "mutate"                                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdwordsUserListServiceMutate",
    "mutateResponse"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdwordsUserListServiceMutateResponse",
    "DateTime"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader"                            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError"                    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "DateError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityNotFound"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "InternalApiError"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied"                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy"                               => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging"                                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError"                            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError"                     => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequiredError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError"                        => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader"                    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError"                     => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Selector"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "ListReturnValue"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "Operation"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "Page"                                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AuthenticationError.Reason"            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason"             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "DatabaseError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityNotFound.Reason"                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "InternalApiError.Reason"               => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason"            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason"                      => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason"          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator"                    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason"                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason"                     => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason"              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequiredError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason"                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason"              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "ExternalRemarketingUserList"           => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExternalRemarketingUserList",
    "UserList"                              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserList",
    "CollectionSizeError"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeError",
    "UserListConversionType"                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListConversionType",
    "LogicalUserList"                       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LogicalUserList",
    "LogicalUserListOperand"                => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LogicalUserListOperand",
    "BasicUserList"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BasicUserList",
    "UserInterest"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserInterest",
    "UserListError"                         => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListError",
    "UserListLogicalRule"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListLogicalRule",
    "UserListOperation"                     => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListOperation",
    "UserListPage"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListPage",
    "UserListReturnValue"                   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListReturnValue",
    "AccessReason"                          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AccessReason",
    "AccountUserListStatus"                 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AccountUserListStatus",
    "CollectionSizeError.Reason"            => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeErrorReason",
    "UserListConversionType.Category"       => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListConversionTypeCategory",
    "SizeRange"                             => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeRange",
    "UserListError.Reason"                  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListErrorReason",
    "UserListLogicalRule.Operator"          => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListLogicalRuleOperator",
    "UserListMembershipStatus"              => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserListMembershipStatus",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/rm/v201306/AdwordsUserListService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = AdwordsUserListService::$classmap;
    parent::__construct($wsdl, $options, $user, 'AdwordsUserListService', 'https://adwords.google.com/api/adwords/rm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the list of user lists that meet the selector criteria.
   * 
   * @param serviceSelector the selector specifying the {@link UserList}s to return.
   * @return a list of UserList entities which meet the selector criteria.
   * @throws ApiException if problems occurred while fetching UserList information.
   */
  public function get($serviceSelector) {
    $arg = new AdwordsUserListServiceGet($serviceSelector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint CollectionSize">The minimum size of this collection is 1. The maximum size of this collection is 10000.</span>
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * <span class="constraint SupportedOperators">The following {@link Operator}s are supported: ADD, SET.</span>
   * 
   * 
   * 
   * Applies a list of mutate operations (i.e. add, set):
   * 
   * Add - creates a set of user lists
   * Set - updates a set of user lists
   * 
   * @param operations the operations to apply
   * @return a list of UserList objects
   */
  public function mutate($operations) {
    $arg = new AdwordsUserListServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }


}}