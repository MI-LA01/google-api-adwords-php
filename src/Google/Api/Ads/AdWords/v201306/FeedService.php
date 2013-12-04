<?php
/**
 * Contains all client objects for the FeedService service.
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
	Google\Api\Ads\AdWords\v201306\Common\FeedServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\FeedServiceMutate;
/**
 * FeedService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class FeedService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedServiceGetResponse",
    "get" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedServiceGet",
    "mutate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedServiceMutate",
    "mutateResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedServiceMutateResponse",
    "DateTime"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateRange" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EntityCountLimitExceeded" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "FeedAttribute" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedAttribute",
    "FeedError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedError",
    "IdError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NewEntityCreationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OrderBy" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RequestError"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Feed" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Feed",
    "FeedOperation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedOperation",
    "Operation" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "FeedPage" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedPage",
    "NullStatsPage" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullStatsPage",
    "FeedReturnValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedReturnValue",
    "ListReturnValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "Page" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "Selector" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "AuthenticationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "Feed.Origin" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedOrigin",
    "Feed.Status"	 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedStatus",
    "FeedAttribute.Type" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedAttributeType",
    "FeedError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedErrorReason",
    "IdError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NewEntityCreationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason"		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "Predicate.Operator" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RequestError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/FeedService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = FeedService::$classmap;
    parent::__construct($wsdl, $options, $user, 'FeedService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of Feeds that meet the selector criteria.
   * 
   * @param selector Determines which Feeds to return. If empty all
   * Feeds are returned.
   * @return The list of Feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function get($selector) {
    $arg = new FeedServiceGet($selector);
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
   * Add, remove, and set Feeds.
   * 
   * @param operations The operations to apply.
   * @return The resulting Feeds.
   * @throws ApiException Indicates a problem with the request.
   */
  public function mutate($operations) {
    $arg = new FeedServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}