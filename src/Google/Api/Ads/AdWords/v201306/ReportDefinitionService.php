<?php
/**
 * Contains all client objects for the ReportDefinitionService service.
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
	Google\Api\Ads\AdWords\v201306\Common\getReportFields;

/**
 * ReportDefinitionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class ReportDefinitionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionServiceGetResponse",
    "get" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionServiceGet",
    "mutate" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionServiceMutate",
    "mutateResponse" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionServiceMutateResponse",
    "DateTime" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AuthenticationError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "ApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AuthorizationError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "ClientTermsError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CollectionSizeError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeError",
    "DateError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DistinctError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "EnumValuePair" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EnumValuePair",
    "IdError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "NotEmptyError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperatorError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "QuotaCheckError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RejectedError"				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "ReportDefinitionError" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionError",
    "ReportDefinitionField"	 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionField",
    "RequestError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SizeLimitError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "ApiException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "CollectionSizeError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeErrorReason",
    "DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "IdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "NotEmptyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperatorError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "QuotaCheckError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RejectedError.Reason"		 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "ReportDefinition.ReportType" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionReportType",
    "ReportDefinitionError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReportDefinitionErrorReason",
    "RequestError.Reason"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SizeLimitError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "StringLengthError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "getReportFields" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getReportFields",
    "getReportFieldsResponse" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getReportFieldsResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/ReportDefinitionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = ReportDefinitionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'ReportDefinitionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns the available report fields for a given report type.
   * 
   * @param reportType The type of report.
   * @return The list of available report fields. Each
   * {@link ReportDefinitionField} encapsulates the field name, the
   * field data type, and the enum values (if the field's type is
   * {@code enum}).
   * @throws ApiException if a problem occurred while fetching the
   * ReportDefinitionField information.
   */
  public function getReportFields($reportType) {
    $arg = new getReportFields($reportType);
    $result = $this->__soapCall("getReportFields", array($arg));
    return $result->rval;
  }
}