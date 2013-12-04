<?php
/**
 * Contains all client objects for the SharedCriterionService service.
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
	Google\Api\Ads\AdWords\v201306\Common\SharedCriterionServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\SharedCriterionServiceMutate;

/**
 * SharedCriterionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class SharedCriterionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionServiceGetResponse",
    "get" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionServiceGet",
    "mutate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionServiceMutate",
    "mutateResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionServiceMutateResponse",
    "DateTime" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "ClientTermsError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CriterionError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionError",
    "DateRange" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityCountLimitExceeded" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "Keyword" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Keyword",
    "Criterion" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Criterion",
    "MobileAppCategory" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAppCategory",
    "MobileApplication" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileApplication",
    "NotEmptyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperatorError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Placement" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Placement",
    "Predicate" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "ProductConditionOperand" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductConditionOperand",
    "QuotaCheckError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SharedCriterionError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionError",
    "SizeLimitError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "CriterionUserInterest" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserInterest",
    "CriterionUserList" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserList",
    "Vertical" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Vertical",
    "WebpageCondition" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageCondition",
    "WebpageParameter" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageParameter",
    "CriterionParameter" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionParameter",
    "DatabaseError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ProductCondition" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductCondition",
    "Webpage" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Webpage",
    "ApiException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Product" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Product",
    "Selector" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "SharedCriterion" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterion",
    "SharedCriterionOperation" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionOperation",
    "Operation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "SharedCriterionPage" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionPage",
    "Page" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "SharedCriterionReturnValue" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionReturnValue",
    "ListReturnValue" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "Criterion.Type" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionType",
    "CriterionError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "KeywordMatchType"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordMatchType",
    "NotEmptyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "Predicate.Operator" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SharedCriterionError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SharedCriterionErrorReason",
    "SizeLimitError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "CriterionUserList.MembershipStatus" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserListMembershipStatus",
    "WebpageConditionOperand" 			 => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageConditionOperand",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/SharedCriterionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = SharedCriterionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'SharedCriterionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * @param selector filters the criteria returned
   * @return
   * @throws ApiException
   */
  public function get($selector) {
    $arg = new SharedCriterionServiceGet($selector);
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
   * Adds, removes criteria in a shared set.
   * @param operations
   * @return
   * @throws ApiException
   */
  public function mutate($operations) {
    $arg = new SharedCriterionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}