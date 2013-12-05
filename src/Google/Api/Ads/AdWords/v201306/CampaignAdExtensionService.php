<?php
/**
 * Contains all client objects for the CampaignAdExtensionService service.
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
	Google\Api\Ads\AdWords\v201306\Common\CampaignAdExtensionServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\CampaignAdExtensionServiceMutate;

/**
 * CampaignAdExtensionService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class CampaignAdExtensionService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionServiceGetResponse",
    "get" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionServiceGet",
    "mutate" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionServiceMutate",
    "mutateResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionServiceMutateResponse",
    "DateTime" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdExtensionError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionError",
    "ApiError"				 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "Address" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Address",
    "AdxError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "AuthenticationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BetaError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "CampaignAdExtensionError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionError",
    "CampaignAdExtensionStats" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionStats",
    "Stats" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Stats",
    "ClientTermsError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "DateRange" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
    "DistinctError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DomainInfoExtension" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DomainInfoExtension",
    "AdExtension" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtension",
    "DoubleValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EntityCountLimitExceeded" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "EntityNotFound" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "GeoPoint" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoPoint",
    "IdError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InAppLinkExtension" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InAppLinkExtension",
    "InternalApiError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "LongValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "MobileExtension" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileExtension",
    "NewEntityCreationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "ComparableValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "OAuthInfo" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OAuthInfo",
    "OperationAccessDenied" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperatorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OrderBy" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
    "Paging" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "PagingError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingError",
    "Predicate" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
    "QuotaCheckError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RegionCodeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeError",
    "RejectedError"					 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SelectorError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "Sitelink" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Sitelink",
    "SitelinksExtension" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SitelinksExtension",
    "SizeLimitError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StringLengthError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "DatabaseError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "LocationExtension" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationExtension",
    "Money" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "ApiException" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "LocationSyncExtension" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationSyncExtension",
    "Selector" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
    "CampaignAdExtension" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtension",
    "CampaignAdExtensionOperation" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionOperation",
    "Operation" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "CampaignAdExtensionPage" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionPage",
    "Page" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
    "CampaignAdExtensionReturnValue" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionReturnValue",
    "ListReturnValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
    "AdExtensionError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionErrorReason",
    "AdxError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BetaError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "CampaignAdExtension.ApprovalStatus"  	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionApprovalStatus",
    "CampaignAdExtension.Status" 		  	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionStatus",
    "CampaignAdExtensionError.Reason"   	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionErrorReason",
    "ClientTermsError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "DatabaseError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DistinctError.Reason"				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason"				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InAppLinkExtension.AppStore" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InAppLinkExtensionAppStore",
    "InternalApiError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "LocationExtension.Source" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationExtensionSource",
    "NewEntityCreationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
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
    "RegionCodeError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeErrorReason",
    "RejectedError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SelectorError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "SizeLimitError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "SortOrder" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
    "Stats.Network" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsNetwork",
    "StringLengthError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/CampaignAdExtensionService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = CampaignAdExtensionService::$classmap;
    parent::__construct($wsdl, $options, $user, 'CampaignAdExtensionService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a list of {@link CampaignAdExtension}s.
   * 
   * @param serviceSelector The selector specifying the {@link CampaignAdExtension}s to return.
   * @return The page containing the {@link CampaignAdExtension}s which meet the
   * criteria specified by the selector.
   * @throws ApiException when there is at least one error with the request.
   */
  public function get($serviceSelector) {
    $arg = new CampaignAdExtensionServiceGet($serviceSelector);
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
   * @param operations The operations to apply. The same {@link CampaignAdExtension}
   * cannot be specified in more than one operation.
   * @return The changed {@link CampaignAdExtension}s.
   */
  public function mutate($operations) {
    $arg = new CampaignAdExtensionServiceMutate($operations);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}