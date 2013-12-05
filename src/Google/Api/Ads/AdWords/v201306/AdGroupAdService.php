<?php
/**
 * Contains all client objects for the AdGroupAdService service.
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

/** Required classes. **/

namespace Google\Api\Ads\AdWords\v201306;

use \Google\Api\Ads\AdWords\Lib\AdWordsSoapClient,
    \Google\Api\Ads\AdWords\v201306\Common\AdGroupAdServiceGet,
    \Google\Api\Ads\AdWords\v201306\Common\AdGroupAdServiceMutate,
    \Google\Api\Ads\AdWords\v201306\Common\query;

/**
 * AdGroupAdService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class AdGroupAdService extends AdWordsSoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	public static $classmap = array(
		"getResponse" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdServiceGetResponse",
		"get" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdServiceGet",
		"mutate" 		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdServiceMutate",
		"mutateResponse" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdServiceMutateResponse",
		"DateTime" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
		"SoapHeader" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
		"Ad" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Ad",
		"AdError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdError",
		"ApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
		"AdExtensionOverrideStats" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideStats",
		"Stats" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Stats",
		"AdGroupAd" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAd",
		"AdGroupAdCountLimitExceeded" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdCountLimitExceeded",
		"EntityCountLimitExceeded" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
		"AdGroupAdError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdError",
		"AdGroupAdExperimentData" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdExperimentData",
		"AdGroupAdOperation"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdOperation",
		"Operation" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
		"AdGroupAdPage" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdPage",
		"Page" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Page",
		"AdGroupAdReturnValue" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdReturnValue",
		"ListReturnValue"				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ListReturnValue",
		"AdStats" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdStats",
		"AdUnionId" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdUnionId",
		"AdxError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
		"ApiException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
		"ApplicationException" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
		"Audio" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Audio",
		"Media" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Media",
		"AuthenticationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
		"AuthorizationError"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
		"BetaError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
		"ClientTermsError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
		"ComparableValue" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
		"DatabaseError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
		"DateError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
		"DateRange" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateRange",
		"DeprecatedAd" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DeprecatedAd",
		"Dimensions" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Dimensions",
		"DistinctError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
		"DoubleValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
		"NumberValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
		"EntityNotFound" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
		"ExemptionRequest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExemptionRequest",
		"ForwardCompatibilityError" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityError",
		"IdError"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
		"Image" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Image",
		"ImageAd"		 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageAd",
		"ImageError"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageError",
		"InternalApiError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
		"LongValue" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
		"MediaError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaError",
		"Media_Size_DimensionsMapEntry" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Media_Size_DimensionsMapEntry",
		"Media_Size_StringMapEntry" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Media_Size_StringMapEntry",
		"MobileAd" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAd",
		"MobileImageAd" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileImageAd",
		"Money"						 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
		"NewEntityCreationError" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
		"NotEmptyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
		"NotWhitelistedError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
		"NullError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
		"OperationAccessDenied" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
		"OrderBy" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OrderBy",
		"Paging" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
		"PagingError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingError",
		"PolicyViolationError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationError",
		"PolicyViolationError.Part" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationErrorPart",
		"PolicyViolationKey" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationKey",
		"Predicate" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Predicate",
		"ProductAd" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductAd",
		"QueryError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryError",
		"QuotaCheckError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
		"RangeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
		"RateExceededError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
		"ReadOnlyError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
		"RequestError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
		"RequiredError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
		"RichMediaAd" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RichMediaAd",
		"Selector"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Selector",
		"SelectorError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
		"SizeLimitError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
		"SoapResponseHeader" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
		"StatsQueryError"	 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryError",
		"StringLengthError" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
		"String_StringMapEntry" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\String_StringMapEntry",
		"TempAdUnionId" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TempAdUnionId",
		"TemplateAd" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateAd",
		"TemplateElement" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateElement",
		"TemplateElementField" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateElementField",
		"TextAd" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TextAd",
		"ThirdPartyRedirectAd" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ThirdPartyRedirectAd",
		"Video" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Video",
		"DynamicSearchAd" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DynamicSearchAd",
		"AdError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdErrorReason",
		"AdGroupAd.ApprovalStatus" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdApprovalStatus",
		"AdGroupAd.Status" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdStatus",
		"AdGroupAdError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdErrorReason",
		"AdxError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
		"AuthenticationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
		"AuthorizationError.Reason" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
		"BetaError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
		"ClientTermsError.Reason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
		"DatabaseError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
		"DateError.Reason" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
		"DeprecatedAd.Type" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DeprecatedAdType",
		"DistinctError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
		"EntityCountLimitExceeded.Reason"  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
		"EntityNotFound.Reason"			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
		"ExperimentDataStatus" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDataStatus",
		"ExperimentDeltaStatus" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDeltaStatus",
		"ForwardCompatibilityError.Reason" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityErrorReason",
		"IdError.Reason" 				   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
		"ImageError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageErrorReason",
		"InternalApiError.Reason" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
		"MarkupLanguageType" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MarkupLanguageType",
		"Media.MediaType" 				   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaMediaType",
		"Media.MimeType" 				   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaMimeType",
		"Media.Size" 					   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaSize",
		"MediaError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaErrorReason",
		"NewEntityCreationError.Reason"    => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
		"NotEmptyError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
		"NotWhitelistedError.Reason" 	   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
		"NullError.Reason" 				   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
		"OperationAccessDenied.Reason" 	   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
		"Operator" 						   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
		"PagingError.Reason"			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingErrorReason",
		"Predicate.Operator" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PredicateOperator",
		"QueryError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryErrorReason",
		"QuotaCheckError.Reason" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
		"RangeError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
		"RateExceededError.Reason" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
		"ReadOnlyError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
		"RequestError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
		"RequiredError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
		"RichMediaAd.AdAttribute" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RichMediaAdAdAttribute",
		"RichMediaAd.RichMediaAdType" 	   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RichMediaAdRichMediaAdType",
		"SelectorError.Reason" 			   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
		"SizeLimitError.Reason" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
		"SortOrder" 					   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SortOrder",
		"Stats.Network" 				   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsNetwork",
		"StatsQueryError.Reason" 		   => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryErrorReason",
		"StringLengthError.Reason" 		   		  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
		"TemplateElementField.Type" 	   		  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateElementFieldType",
		"ThirdPartyRedirectAd.ExpandingDirection" => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ThirdPartyRedirectAdExpandingDirection",
		"VideoType"						   		  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\VideoType",
		"query" 						   		  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\query",
		"queryResponse" 				   		  => "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\queryResponse",
	);

	/**
	 * The endpoint of the service
	 * @var string
	*/
	public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/AdGroupAdService";

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl=null, $options, $user) {
		$options["classmap"] = AdGroupAdService::$classmap;
		parent::__construct($wsdl, $options, $user, 'AdGroupAdService', 'https://adwords.google.com/api/adwords/cm/v201306');
	}

	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 *
	 *
	 * Returns a list of AdGroupAds.
	 *
	 * @param serviceSelector The selector specifying the {@link AdGroupAd}s to return.
	 * @return The page containing the AdGroupAds that meet the criteria specified by the selector.
	 * @throws ApiException when there is at least one error with the request.
	 */
	public function get($serviceSelector) {
		$arg = new AdGroupAdServiceGet($serviceSelector);
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
	 * Applies the list of mutate operations (ie. add, set, remove):
	 * <p>Add - Creates a new {@linkplain AdGroupAd ad group ad}. The
	 * {@code adGroupId} must
	 * reference an existing ad group. The child {@code Ad} must be sufficiently
	 * specified by constructing a concrete ad type (such as {@code TextAd})
	 * and setting its fields accordingly.</p>
	 * <p>Set - Updates an ad group ad. Except for {@code status},
	 * ad group ad fields are not mutable. Status updates are
	 * straightforward - the status of the ad group ad is updated as
	 * specified. If any other field has changed, it will be ignored. If
	 * you want to change any of the fields other than status, you must
	 * make a new ad and then delete the old one.</p>
	 * <p>Remove - Removes the link between the specified AdGroup and
	 * Ad.</p>
	 * @param operations The operations to apply.
	 * @return A list of AdGroupAds where each entry in the list is the result of
	 * applying the operation in the input list with the same index. For an
	 * add/set operation, the return AdGroupAd will be what is saved to the db.
	 * In the case of the remove operation, the return AdGroupAd will simply be
	 * an AdGroupAd containing an Ad with the id set to the Ad being deleted from
	 * the AdGroup.
	 */
	public function mutate($operations) {
		$arg = new AdGroupAdServiceMutate($operations);
		$result = $this->__soapCall("mutate", array($arg));
		return $result->rval;
	}


	/**
	 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 *
	 *
	 *
	 * Returns a list of AdGroupAds based on the query.
	 *
	 * @param query The SQL-like AWQL query string.
	 * @return A list of AdGroupAds.
	 * @throws ApiException if problems occur while parsing the query or fetching AdGroupAds.
	 */
	public function query($query) {
		$arg = new query($query);
		$result = $this->__soapCall("query", array($arg));
		return $result->rval;
	}
}