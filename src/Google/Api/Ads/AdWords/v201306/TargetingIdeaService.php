<?php
/**
 * Contains all client objects for the TargetingIdeaService service.
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
	Google\Api\Ads\AdWords\v201306\Common\TargetingIdeaServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\getBulkKeywordIdeas;
/**
 * TargetingIdeaService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class TargetingIdeaService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaServiceGetResponse",
    "get" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaServiceGet",
    "mutate" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaServiceMutate",
    "mutateResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaServiceMutateResponse",
    "DateTime" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "AdGroupBidLandscape" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidLandscape",
    "BidLandscape" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidLandscape",
    "AdGroupCriterionError" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionError",
    "ApiError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdGroupCriterionLimitExceeded"			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionLimitExceeded",
    "EntityCountLimitExceeded" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "AdxError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "ApiException" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "AuthenticationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "DataEntry" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DataEntry",
    "BidLandscape.LandscapePoint"	 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidLandscapeLandscapePoint",
    "BiddingError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingError",
    "BudgetError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetError",
    "ClientTermsError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "CollectionSizeError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CollectionSizeError",
    "ComparableValue" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "Criterion" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Criterion",
    "CriterionBidLandscape" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionBidLandscape",
    "CriterionError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionError",
    "CriterionParameter" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionParameter",
    "CriterionPolicyError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionPolicyError",
    "PolicyViolationError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationError",
    "DatabaseError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "DateError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DistinctError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DoubleValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EntityNotFound" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "IdError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "InternalApiError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "Keyword" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Keyword",
    "Language" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Language",
    "Location" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Location",
    "LongValue" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "MobileAppCategory" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAppCategory",
    "MobileApplication" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileApplication",
    "Money" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "NetworkSetting" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NetworkSetting",
    "NotEmptyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OperationAccessDenied" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "Paging" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Paging",
    "Placement" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Placement",
    "Platform" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Platform",
    "PolicyViolationError.Part" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationErrorPart",
    "PolicyViolationKey" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationKey",
    "Product" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Product",
    "ProductCondition"			 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductCondition",
    "ProductConditionOperand" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductConditionOperand",
    "QuotaCheckError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "RangeError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RegionCodeError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeError",
    "RequestError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "SizeLimitError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader"			 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StatsQueryError" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryError",
    "StringLengthError"	 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "TargetError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetError",
    "CriterionUserInterest" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserInterest",
    "CriterionUserList" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserList",
    "Vertical" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Vertical",
    "Webpage" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Webpage",
    "WebpageCondition" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageCondition",
    "WebpageParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageParameter",
    "AdGroupBidLandscape.Type" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidLandscapeType",
    "AdGroupCriterionError.Reason" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionErrorReason",
    "AdGroupCriterionLimitExceeded.CriteriaLimitType" 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionLimitExceededCriteriaLimitType",
    "AdxError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AuthenticationError.Reason"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BiddingError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorReason",
    "BudgetError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetErrorReason",
    "ClientTermsError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "Criterion.Type" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionType",
    "CriterionError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionErrorReason",
    "DatabaseError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DistinctError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityCountLimitExceeded.Reason" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityNotFound.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "IdError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "InternalApiError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "KeywordMatchType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordMatchType",
    "LocationTargetingStatus"				 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationTargetingStatus",
    "NotEmptyError.Reason"				 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperationAccessDenied.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "QuotaCheckError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "RangeError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RegionCodeError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeErrorReason",
    "RequestError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "SizeLimitError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "StatsQueryError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryErrorReason",
    "StringLengthError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "TargetError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetErrorReason",
    "CriterionUserList.MembershipStatus" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserListMembershipStatus",
    "WebpageConditionOperand" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageConditionOperand",
    "AdFormatSpec" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdFormatSpec",
    "AdFormatSpecListAttribute"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdFormatSpecListAttribute",
    "Attribute" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Attribute",
    "AdSpec" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdSpec",
    "AdSpecListAttribute" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdSpecListAttribute",
    "AdSpecListSearchParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdSpecListSearchParameter",
    "SearchParameter" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SearchParameter",
    "BidLandscapeAttribute" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidLandscapeAttribute",
    "BooleanAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BooleanAttribute",
    "CategoryProductsAndServicesSearchParameter" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CategoryProductsAndServicesSearchParameter",
    "CompetitionSearchParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CompetitionSearchParameter",
    "CriterionAttribute" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionAttribute",
    "CurrencyCodeError"		 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CurrencyCodeError",
    "DisplayAdSpec" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DisplayAdSpec",
    "DisplayAdSpec.AdSizeSpec" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DisplayAdSpecAdSizeSpec",
    "DisplayType" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DisplayType",
    "DoubleAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleAttribute",
    "ExcludedKeywordSearchParameter" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExcludedKeywordSearchParameter",
    "FlashDisplayType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FlashDisplayType",
    "HtmlDisplayType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\HtmlDisplayType",
    "IdeaTextFilterSearchParameter" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdeaTextFilterSearchParameter",
    "IdeaTypeAttribute" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdeaTypeAttribute",
    "ImageDisplayType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageDisplayType",
    "InStreamAdInfo"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InStreamAdInfo",
    "InStreamAdInfoAttribute" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InStreamAdInfoAttribute",
    "InStreamAdSpec" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InStreamAdSpec",
    "IncludeAdultContentSearchParameter" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IncludeAdultContentSearchParameter",
    "IntegerAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IntegerAttribute",
    "IntegerSetAttribute" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IntegerSetAttribute",
    "KeywordAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordAttribute",
    "LanguageSearchParameter" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LanguageSearchParameter",
    "LocationSearchParameter" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationSearchParameter",
    "LongAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongAttribute",
    "LongComparisonOperation"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongComparisonOperation",
    "LongRangeAttribute"				 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongRangeAttribute",
    "MatchesRegexError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MatchesRegexError",
    "MoneyAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MoneyAttribute",
    "MonthlySearchVolume" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MonthlySearchVolume",
    "MonthlySearchVolumeAttribute" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MonthlySearchVolumeAttribute",
    "NetworkSearchParameter"		 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NetworkSearchParameter",
    "OpportunityIdeaTypeAttribute" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OpportunityIdeaTypeAttribute",
    "PlacementAttribute" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PlacementAttribute",
    "PlacementTypeAttribute"		 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PlacementTypeAttribute",
    "PlacementTypeSearchParameter"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PlacementTypeSearchParameter",
    "Range" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Range",
    "RelatedToQuerySearchParameter" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RelatedToQuerySearchParameter",
    "RelatedToUrlSearchParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RelatedToUrlSearchParameter",
    "SearchVolumeSearchParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SearchVolumeSearchParameter",
    "SeedAdGroupIdSearchParameter" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SeedAdGroupIdSearchParameter",
    "StringAttribute" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringAttribute",
    "TargetingIdea" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdea",
    "TargetingIdeaError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaError",
    "TargetingIdeaPage"				 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaPage",
    "TargetingIdeaSelector" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaSelector",
    "TextAdSpec" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TextAdSpec",
    "TrafficEstimatorError"		 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorError",
    "Type_AttributeMapEntry" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Type_AttributeMapEntry",
    "WebpageDescriptor" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageDescriptor",
    "WebpageDescriptorAttribute"				 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageDescriptorAttribute",
    "AttributeType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AttributeType",
    "CompetitionSearchParameter.Level" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CompetitionSearchParameterLevel",
    "CurrencyCodeError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CurrencyCodeErrorReason",
    "DisplayAdSpec.ActivationOption" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DisplayAdSpecActivationOption",
    "HtmlDisplayType.HtmlOption" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\HtmlDisplayTypeHtmlOption",
    "IdeaType"			 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdeaType",
    "InStreamAdSpec.InStreamType" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InStreamAdSpecInStreamType",
    "MatchesRegexError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MatchesRegexErrorReason",
    "OpportunityIdeaType" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OpportunityIdeaType",
    "RequestType" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestType",
    "SiteConstants.AdFormat" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SiteConstantsAdFormat",
    "SiteConstants.PlacementType" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SiteConstantsPlacementType",
    "TargetingIdeaError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingIdeaErrorReason",
    "TrafficEstimatorError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrafficEstimatorErrorReason",
    "getBulkKeywordIdeas" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getBulkKeywordIdeas",
    "getBulkKeywordIdeasResponse" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getBulkKeywordIdeasResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/o/v201306/TargetingIdeaService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = TargetingIdeaService::$classmap;
    parent::__construct($wsdl, $options, $user, 'TargetingIdeaService', 'https://adwords.google.com/api/adwords/o/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.
   * 
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
   * less.  Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   * 
   * <p>Only a relatively small total number of results will be available through this method.
   * Much larger result sets may be available using
   * {@link #getBulkKeywordIdeas(TargetingIdeaSelector)} at the price of reduced flexibility in
   * selector options.
   * 
   * @param selector Query describing the types of results to return when
   * finding matches (similar keyword ideas/placement ideas).
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   */
  public function get($selector) {
    $arg = new TargetingIdeaServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Returns a page of ideas that match the query described by the specified
   * {@link TargetingIdeaSelector}.  This method is specialized for returning
   * bulk keyword ideas, and thus the selector must be set for
   * {@link com.google.ads.api.services.targetingideas.attributes.RequestType#IDEAS} and
   * {@link com.google.ads.api.services.common.optimization.attributes.IdeaType#KEYWORD}.
   * A limited, fixed set of attributes will be returned.
   * 
   * <p>A single-valued
   * {@link com.google.ads.api.services.targetingideas.search.RelatedToUrlSearchParameter}
   * must be supplied.  Single-valued
   * {@link com.google.ads.api.services.targetingideas.search.LanguageSearchParameter} and
   * {@link com.google.ads.api.services.targetingideas.search.LocationSearchParameter} are
   * both optional.  Other search parameters compatible with a keyword query may also be
   * supplied.
   * 
   * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800
   * or less. If a URL based search is performed it will return up to 100 keywords when the site is
   * not owned, or up to 800 if it is. Number of keywords returned on a keyword based search is up
   * to 800. Large result sets must be composed through multiple calls to this method, advancing the
   * paging {@code startIndex} value by {@code numberResults} with each call.
   * 
   * <p>This method can make many more results available than {@link #get(TargetingIdeaSelector)},
   * but allows less control over the query. For fine-tuned queries that do not need large numbers
   * of results, prefer {@link #get(TargetingIdeaSelector)}.
   * 
   * @param selector Query describing the bulk keyword ideas to return.
   * @return A {@link TargetingIdeaPage} of results, that is a subset of the
   * list of possible ideas meeting the criteria of the
   * {@link TargetingIdeaSelector}.
   * @throws ApiException If problems occurred while querying for ideas.
   */
  public function getBulkKeywordIdeas($selector) {
    $arg = new getBulkKeywordIdeas($selector);
    $result = $this->__soapCall("getBulkKeywordIdeas", array($arg));
    return $result->rval;
  }
}