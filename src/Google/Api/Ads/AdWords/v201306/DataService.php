<?php
/**
 * Contains all client objects for the DataService service.
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
	Google\Api\Ads\AdWords\v201306\Common\getAdGroupBidLandscape,
	Google\Api\Ads\AdWords\v201306\Common\getCriterionBidLandscape;

/**
 * DataService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class DataService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataServiceGetResponse",
    "get" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataServiceGet",
    "mutate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataServiceMutate",
    "mutateResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataServiceMutateResponse",
    "DateTime" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdGroupBidLandscape" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidLandscape",
    "BidLandscape" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidLandscape",
    "AdxError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "ApiError"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthenticationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "ClientTermsError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CriterionBidLandscape" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionBidLandscape",
    "DateError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DateRange" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "IdError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "LongValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "Money" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ComparableValue" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "NotEmptyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OrderBy" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Predicate" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SizeLimitError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DataError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataError",
    "DatabaseError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "BidLandscape.LandscapePoint" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidLandscapeLandscapePoint",
    "Selector" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "DataEntry" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataEntry",
    "AdGroupBidLandscapePage" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidLandscapePage",
    "NoStatsPage" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NoStatsPage",
    "CriterionBidLandscapePage" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionBidLandscapePage",
    "Page" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "AdGroupBidLandscape.Type" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidLandscapeType",
    "AdxError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "IdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "Predicate.Operator" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
    "QuotaCheckError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "StringLengthError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "DataError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataErrorReason",
    "getAdGroupBidLandscape" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getAdGroupBidLandscape",
    "getAdGroupBidLandscapeResponse" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getAdGroupBidLandscapeResponse",
    "getCriterionBidLandscape" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getCriterionBidLandscape",
    "getCriterionBidLandscapeResponse" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getCriterionBidLandscapeResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/DataService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = DataService::$classmap;
    parent::__construct($wsdl, $options, $user, 'DataService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bid landscapes for the ad groups specified in the selector.
   * 
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getAdGroupBidLandscape($serviceSelector) {
    $arg = new getAdGroupBidLandscape($serviceSelector);
    $result = $this->__soapCall("getAdGroupBidLandscape", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of bid landscapes for the criteria specified in the selector.
   * 
   * @param serviceSelector Selects the entities to return bid landscapes for.
   * @return A list of bid landscapes.
   * @throws ApiException when there is at least one error with the request.
   */
  public function getCriterionBidLandscape($serviceSelector) {
    $arg = new getCriterionBidLandscape($serviceSelector);
    $result = $this->__soapCall("getCriterionBidLandscape", array($arg));
    return $result->rval;
  }
}