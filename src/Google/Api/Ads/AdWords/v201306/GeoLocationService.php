<?php
/**
 * Contains all client objects for the GeoLocationService service.
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
	Google\Api\Ads\AdWords\v201306\Common\GeoLocationServiceGet;


/**
 * GeoLocationService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class GeoLocationService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationServiceGetResponse",
    "get" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationServiceGet",
    "mutate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationServiceMutate",
    "mutateResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationServiceMutateResponse",
    "DateTime" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "Address" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Address",
    "AuthenticationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "ClientTermsError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DistinctError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "GeoLocationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationError",
    "GeoLocationSelector" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationSelector",
    "GeoPoint" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoPoint",
    "IdError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "InvalidGeoLocation" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InvalidGeoLocation",
    "GeoLocation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocation",
    "NotEmptyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "QuotaCheckError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RegionCodeError"			 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeError",
    "RequestError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SizeLimitError"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "GeoLocationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoLocationErrorReason",
    "IdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason"	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "QuotaCheckError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RegionCodeError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeErrorReason",
    "RequestError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SizeLimitError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "StringLengthError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/GeoLocationService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = GeoLocationService::$classmap;
    parent::__construct($wsdl, $options, $user, 'GeoLocationService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Retrieves the geographic location information for the address specified.
   * 
   * @param selector specifies the addresses.
   * @return list of {@link GeoLocation} objects. Returns {@link InvalidGeoLocation} object if
   * the address cannot be geocoded.
   * @throws ApiException if problems occurred while retrieving the location information
   */
  public function get($selector) {
    $arg = new GeoLocationServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }
}