<?php
/**
 * Contains all client objects for the MutateJobService service.
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
	Google\Api\Ads\AdWords\v201306\Common\MutateJobServiceGet,
	Google\Api\Ads\AdWords\v201306\Common\getResult,
	Google\Api\Ads\AdWords\v201306\Common\MutateJobServiceMutate;
	

/**
 * MutateJobService
 * @package GoogleApiAdsAdWords
 * @subpackage v201306
 * @author WSDLInterpreter
 */
class MutateJobService extends AdWordsSoapClient {
  /**
   * Default class map for wsdl=>php
   * @access private
   * @var array
   */
  public static $classmap = array(
    "getResponse" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MutateJobServiceGetResponse",
    "get" 													=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MutateJobServiceGet",
    "mutate" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MutateJobServiceMutate",
    "mutateResponse" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MutateJobServiceMutateResponse",
    "DateTime" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdWordsDateTime",
    "SoapHeader" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapRequestHeader",
    "Ad" 													=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Ad",
    "AdError" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdError",
    "ApiError" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiError",
    "AdExtension" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtension",
    "AdExtensionError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionError",
    "AdExtensionOverride" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverride",
    "AdExtensionOverrideError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideError",
    "AdExtensionOverrideOperation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideOperation",
    "Operation" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operation",
    "AdExtensionOverrideStats" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideStats",
    "Stats" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Stats",
    "AdGroup" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroup",
    "AdGroupAd" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAd",
    "AdGroupAdCountLimitExceeded" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdCountLimitExceeded",
    "EntityCountLimitExceeded" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceeded",
    "AdGroupAdError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdError",
    "AdGroupAdExperimentData" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdExperimentData",
    "AdGroupAdOperation" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdOperation",
    "AdGroupBidModifier" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifier",
    "AdGroupBidModifierOperation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupBidModifierOperation",
    "AdGroupCriterion" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterion",
    "AdGroupCriterionError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionError",
    "AdGroupCriterionExperimentBidMultiplier" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionExperimentBidMultiplier",
    "AdGroupCriterionLimitExceeded"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionLimitExceeded",
    "AdGroupCriterionOperation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionOperation",
    "AdGroupExperimentBidMultipliers" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupExperimentBidMultipliers",
    "AdGroupExperimentData" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupExperimentData",
    "AdGroupOperation" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupOperation",
    "AdGroupServiceError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceError",
    "AdSchedule" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdSchedule",
    "Criterion" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Criterion",
    "AdScheduleTarget"		 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdScheduleTarget",
    "Target" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Target",
    "AdScheduleTargetList"		 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdScheduleTargetList",
    "TargetList" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetList",
    "AdStats" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdStats",
    "AdUnionId" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdUnionId",
    "Address" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Address",
    "AdxError" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxError",
    "AgeRange" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AgeRange",
    "ApiErrorReason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiErrorReason",
    "ApiException" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApiException",
    "ApplicationException" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApplicationException",
    "Audio" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Audio",
    "Media" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Media",
    "AuthenticationError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationError",
    "AuthorizationError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationError",
    "BatchFailureResult" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BatchFailureResult",
    "OperationResult"				 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationResult",
    "BetaError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaError",
    "Bid" 													=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Bid",
    "BidMultiplier" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidMultiplier",
    "BiddableAdGroupCriterion" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddableAdGroupCriterion",
    "BiddableAdGroupCriterionExperimentData" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddableAdGroupCriterionExperimentData",
    "BiddingError"				 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingError",
    "BiddingErrors" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrors",
    "BiddingScheme" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingScheme",
    "BiddingStrategyConfiguration" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyConfiguration",
    "BiddingTransitionError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingTransitionError",
    "Bids" 													=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Bids",
    "BillingSummary" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BillingSummary",
    "Budget" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Budget",
    "BudgetError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetError",
    "BudgetOperation" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOperation",
    "BudgetOptimizerBiddingScheme" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetOptimizerBiddingScheme",
    "BulkMutateJob" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJob",
    "Job" 													=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Job",
    "BulkMutateJobError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJobError",
    "BulkMutateJobEvent" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJobEvent",
    "JobEvent"		 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\JobEvent",
    "BulkMutateJobPolicy"				 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJobPolicy",
    "BulkMutateJobSelector" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJobSelector",
    "JobSelector" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\JobSelector",
    "BulkMutateJobStats" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJobStats",
    "JobStats" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\JobStats",
    "BulkMutateRequest" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateRequest",
    "BulkMutateResult"			 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateResult",
    "Campaign" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Campaign",
    "CampaignAdExtension" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtension",
    "CampaignAdExtensionError"	 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionError",
    "CampaignAdExtensionOperation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionOperation",
    "CampaignAdExtensionStats" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionStats",
    "CampaignCriterion" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignCriterion",
    "CampaignCriterionError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignCriterionError",
    "CampaignCriterionLimitExceeded"			 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignCriterionLimitExceeded",
    "CampaignCriterionOperation" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignCriterionOperation",
    "CampaignError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignError",
    "CampaignOperation" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignOperation",
    "CampaignStats" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignStats",
    "CampaignTargetOperation" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignTargetOperation",
    "Carrier" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Carrier",
    "ClientTermsError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsError",
    "ComparableValue" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ComparableValue",
    "ContentLabel" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ContentLabel",
    "ConversionOptimizerBiddingScheme" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingScheme",
    "ConversionOptimizerEligibility" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerEligibility",
    "CpaBid" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpaBid",
    "CpcBid" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpcBid",
    "CpmBid" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CpmBid",
    "CriterionError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionError",
    "CriterionParameter" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionParameter",
    "CriterionPolicyError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionPolicyError",
    "PolicyViolationError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationError",
    "DatabaseError"			 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseError",
    "DateError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateError",
    "DeprecatedAd" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DeprecatedAd",
    "Dimensions" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Dimensions",
    "DistinctError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctError",
    "DomainInfoExtension" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DomainInfoExtension",
    "DoubleValue" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DoubleValue",
    "NumberValue" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NumberValue",
    "EnhancedCpcBiddingScheme"		 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EnhancedCpcBiddingScheme",
    "EntityAccessDenied" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityAccessDenied",
    "EntityId" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityId",
    "EntityNotFound" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFound",
    "ExemptionRequest" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExemptionRequest",
    "FailureResult" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FailureResult",
    "FeedItem" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItem",
    "FeedItemAttributeError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemAttributeError",
    "FeedItemAttributeValue" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemAttributeValue",
    "FeedItemDevicePreference" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemDevicePreference",
    "FeedItemError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemError",
    "FeedItemOperation" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemOperation",
    "FeedItemSchedule" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemSchedule",
    "FeedItemScheduling" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemScheduling",
    "FeedItemValidationDetail"		 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemValidationDetail",
    "ForwardCompatibilityError" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityError",
    "FrequencyCap" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FrequencyCap",
    "Gender" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Gender",
    "GeoPoint" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoPoint",
    "GeoTargetTypeSetting" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoTargetTypeSetting",
    "Setting" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Setting",
    "IdError" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdError",
    "Image" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Image",
    "ImageAd" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageAd",
    "ImageError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageError",
    "InAppLinkExtension"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InAppLinkExtension",
    "InternalApiError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiError",
    "JobError" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\JobError",
    "JobResult" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\JobResult",
    "Keyword" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Keyword",
    "KeywordMatchSetting" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordMatchSetting",
    "Language" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Language",
    "Location" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Location",
    "LocationExtension" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationExtension",
    "LocationOverrideInfo" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationOverrideInfo",
    "LocationSyncExtension" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationSyncExtension",
    "LongValue" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LongValue",
    "LostResult" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LostResult",
    "ManualCPCAdGroupCriterionExperimentBidMultiplier" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCPCAdGroupCriterionExperimentBidMultiplier",
    "ManualCPCAdGroupExperimentBidMultipliers" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCPCAdGroupExperimentBidMultipliers",
    "ManualCPMAdGroupExperimentBidMultipliers" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCPMAdGroupExperimentBidMultipliers",
    "ManualCpcBiddingScheme" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpcBiddingScheme",
    "ManualCpmBiddingScheme" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ManualCpmBiddingScheme",
    "MediaError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaError",
    "Media_Size_DimensionsMapEntry" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Media_Size_DimensionsMapEntry",
    "Media_Size_StringMapEntry" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Media_Size_StringMapEntry",
    "MobileAd" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAd",
    "MobileAppCategory" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileAppCategory",
    "MobileApplication" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileApplication",
    "MobileDevice"							 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileDevice",
    "MobileExtension" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileExtension",
    "MobileImageAd" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileImageAd",
    "Money"			 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Money",
    "NegativeAdGroupCriterion" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NegativeAdGroupCriterion",
    "NegativeCampaignCriterion" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NegativeCampaignCriterion",
    "NetworkSetting" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NetworkSetting",
    "NewEntityCreationError" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationError",
    "NotEmptyError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyError",
    "NotWhitelistedError"				 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedError",
    "NullError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullError",
    "OAuthInfo" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OAuthInfo",
    "Operand" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operand",
    "OperatingSystemVersion" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatingSystemVersion",
    "OperationAccessDenied" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDenied",
    "OperationStream" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationStream",
    "OperationStreamResult" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationStreamResult",
    "OperatorError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorError",
    "OverrideInfo" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OverrideInfo",
    "PageOnePromotedBiddingScheme" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingScheme",
    "PagingError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingError",
    "PercentCpaBid" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBid",
    "PercentCpaBiddingScheme" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PercentCpaBiddingScheme",
    "PlaceHolder" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PlaceHolder",
    "Placement"				 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Placement",
    "Platform" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Platform",
    "PolicyViolationError.Part" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationErrorPart",
    "PolicyViolationKey" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationKey",
    "Product" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Product",
    "ProductAd"		 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductAd",
    "ProductCondition" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductCondition",
    "ProductConditionOperand" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProductConditionOperand",
    "Proximity" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Proximity",
    "QualityInfo" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QualityInfo",
    "QueryError"			 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryError",
    "QuotaCheckError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckError",
    "QuotaError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaError",
    "RangeError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeError",
    "RateExceededError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededError",
    "ReadOnlyError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyError",
    "RealTimeBiddingSetting" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RealTimeBiddingSetting",
    "RegionCodeError"										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeError",
    "RejectedError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedError",
    "RequestError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestError",
    "RequiredError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredError",
    "ReturnValueResult" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReturnValueResult",
    "RichMediaAd" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RichMediaAd",
    "SelectorError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorError",
    "SettingError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SettingError",
    "SimpleMutateJob" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SimpleMutateJob",
    "SimpleMutateResult" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SimpleMutateResult",
    "Sitelink" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Sitelink",
    "SitelinksExtension" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SitelinksExtension",
    "SizeLimitError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitError",
    "SoapResponseHeader" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SoapResponseHeader",
    "StatsQueryError" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryError",
    "StringLengthError" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthError",
    "String_StringMapEntry" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\String_StringMapEntry",
    "TargetCpaBiddingScheme" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetCpaBiddingScheme",
    "TargetError" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetError",
    "TargetingSettingDetail" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingSettingDetail",
    "TargetSpendBiddingScheme" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetSpendBiddingScheme",
    "TargetingSetting"					 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetingSetting",
    "TempAdUnionId" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TempAdUnionId",
    "TemplateAd" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateAd",
    "TemplateElement" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateElement",
    "TemplateElementField" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateElementField",
    "TextAd" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TextAd",
    "ThirdPartyRedirectAd" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ThirdPartyRedirectAd",
    "TrackingSetting"					 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TrackingSetting",
    "UnprocessedResult" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UnprocessedResult",
    "CriterionUserInterest"			 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserInterest",
    "CriterionUserList" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserList",
    "Vertical" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Vertical",
    "Video" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Video",
    "Webpage" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Webpage",
    "WebpageCondition" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageCondition",
    "WebpageParameter" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageParameter",
    "DynamicSearchAd" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DynamicSearchAd",
    "AdError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdErrorReason",
    "AdExtensionError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionErrorReason",
    "AdExtensionOverride.ApprovalStatus" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideApprovalStatus",
    "AdExtensionOverride.Status" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideStatus",
    "AdExtensionOverrideError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdExtensionOverrideErrorReason",
    "AdGroupAd.ApprovalStatus" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdApprovalStatus",
    "AdGroupAd.Status"	 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdStatus",
    "AdGroupAdError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupAdErrorReason",
    "AdGroupCriterionError.Reason"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionErrorReason",
    "AdGroupCriterionLimitExceeded.CriteriaLimitType" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupCriterionLimitExceededCriteriaLimitType",
    "AdGroupServiceError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupServiceErrorReason",
    "AdGroup.Status" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdGroupStatus",
    "AdServingOptimizationStatus" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdServingOptimizationStatus",
    "AdxError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AdxErrorReason",
    "AgeRange.AgeRangeType" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AgeRangeAgeRangeType",
    "ApprovalStatus" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ApprovalStatus",
    "AuthenticationError.Reason"			 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthenticationErrorReason",
    "AuthorizationError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\AuthorizationErrorReason",
    "BasicJobStatus" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BasicJobStatus",
    "BetaError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BetaErrorReason",
    "BidModifierSource" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidModifierSource",
    "BidSource"					 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BidSource",
    "BiddingError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorReason",
    "BiddingErrors.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingErrorsReason",
    "BiddingStrategySource" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategySource",
    "BiddingStrategyType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingStrategyType",
    "BiddingTransitionError.Reason"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BiddingTransitionErrorReason",
    "Budget.BudgetDeliveryMethod" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetBudgetDeliveryMethod",
    "Budget.BudgetPeriod" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetBudgetPeriod",
    "Budget.BudgetStatus" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetBudgetStatus",
    "BudgetError.Reason"		 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BudgetErrorReason",
    "BulkMutateJobError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\BulkMutateJobErrorReason",
    "CampaignAdExtension.ApprovalStatus" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionApprovalStatus",
    "CampaignAdExtension.Status"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionStatus",
    "CampaignAdExtensionError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignAdExtensionErrorReason",
    "CampaignCriterionError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignCriterionErrorReason",
    "CampaignCriterionLimitExceeded.CriteriaLimitType"		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignCriterionLimitExceededCriteriaLimitType",
    "CampaignError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignErrorReason",
    "CampaignStatus" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CampaignStatus",
    "ClientTermsError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ClientTermsErrorReason",
    "ContentLabelType" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ContentLabelType",
    "ConversionOptimizerBiddingScheme.BidType" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemeBidType",
    "ConversionOptimizerBiddingScheme.PricingMode" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerBiddingSchemePricingMode",
    "ConversionOptimizerEligibility.RejectionReason" 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ConversionOptimizerEligibilityRejectionReason",
    "Criterion.Type" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionType",
    "CriterionError.Reason"	 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionErrorReason",
    "CriterionTypeGroup" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionTypeGroup",
    "CriterionUse" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUse",
    "DatabaseError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DatabaseErrorReason",
    "DateError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DateErrorReason",
    "DayOfWeek" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DayOfWeek",
    "DeprecatedAd.Type" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DeprecatedAdType",
    "DistinctError.Reason"		 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\DistinctErrorReason",
    "EntityAccessDenied.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityAccessDeniedReason",
    "EntityCountLimitExceeded.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityCountLimitExceededReason",
    "EntityId.Type" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityIdType",
    "EntityNotFound.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\EntityNotFoundReason",
    "ExperimentDataStatus" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDataStatus",
    "ExperimentDeltaStatus" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ExperimentDeltaStatus",
    "FeedItem.Status"					 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemStatus",
    "FeedItemError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemErrorReason",
    "FeedItemValidationDetail.ApprovalStatus" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemValidationDetailApprovalStatus",
    "FeedItemValidationDetail.ValidationStatus" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\FeedItemValidationDetailValidationStatus",
    "ForwardCompatibilityError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ForwardCompatibilityErrorReason",
    "Gender.GenderType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GenderGenderType",
    "GeoTargetTypeSetting.NegativeGeoTargetType"	 		=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoTargetTypeSettingNegativeGeoTargetType",
    "GeoTargetTypeSetting.PositiveGeoTargetType" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\GeoTargetTypeSettingPositiveGeoTargetType",
    "IdError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\IdErrorReason",
    "ImageError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ImageErrorReason",
    "InAppLinkExtension.AppStore" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InAppLinkExtensionAppStore",
    "InternalApiError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\InternalApiErrorReason",
    "JobError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\JobErrorReason",
    "KeywordMatchType"		 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\KeywordMatchType",
    "Level" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Level",
    "LocationExtension.Source" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationExtensionSource",
    "LocationOverrideInfo.RadiusUnits" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationOverrideInfoRadiusUnits",
    "LocationTargetingStatus"							 	=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\LocationTargetingStatus",
    "MarkupLanguageType" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MarkupLanguageType",
    "Media.MediaType" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaMediaType",
    "Media.MimeType"	 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaMimeType",
    "Media.Size" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaSize",
    "MediaError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MediaErrorReason",
    "MinuteOfHour" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MinuteOfHour",
    "MobileDevice.DeviceType" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MobileDeviceDeviceType",
    "MultiplierSource" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\MultiplierSource",
    "NewEntityCreationError.Reason" 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NewEntityCreationErrorReason",
    "NotEmptyError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotEmptyErrorReason",
    "NotWhitelistedError.Reason"		 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NotWhitelistedErrorReason",
    "NullError.Reason" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\NullErrorReason",
    "OperatingSystemVersion.OperatorType" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatingSystemVersionOperatorType",
    "OperationAccessDenied.Reason"		 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperationAccessDeniedReason",
    "Operator" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\Operator",
    "OperatorError.Reason"	 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\OperatorErrorReason",
    "PageOnePromotedBiddingScheme.StrategyGoal" 			=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PageOnePromotedBiddingSchemeStrategyGoal",
    "PagingError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PagingErrorReason",
    "PolicyViolationError.Reason" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\PolicyViolationErrorReason",
    "Proximity.DistanceUnits" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ProximityDistanceUnits",
    "QueryError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QueryErrorReason",
    "QuotaCheckError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaCheckErrorReason",
    "QuotaError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\QuotaErrorReason",
    "RangeError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RangeErrorReason",
    "RateExceededError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RateExceededErrorReason",
    "ReadOnlyError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ReadOnlyErrorReason",
    "RegionCodeError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RegionCodeErrorReason",
    "RejectedError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RejectedErrorReason",
    "RequestError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequestErrorReason",
    "RequiredError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RequiredErrorReason",
    "RichMediaAd.AdAttribute" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RichMediaAdAdAttribute",
    "RichMediaAd.RichMediaAdType"	 						=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\RichMediaAdRichMediaAdType",
    "SelectorError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SelectorErrorReason",
    "ServingStatus" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ServingStatus",
    "SettingError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SettingErrorReason",
    "SizeLimitError.Reason"		 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SizeLimitErrorReason",
    "Stats.Network" 										=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsNetwork",
    "StatsQueryError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StatsQueryErrorReason",
    "StringLengthError.Reason" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\StringLengthErrorReason",
    "SystemServingStatus" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\SystemServingStatus",
    "TargetError.Reason" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TargetErrorReason",
    "TemplateElementField.Type" 							=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TemplateElementFieldType",
    "ThirdPartyRedirectAd.ExpandingDirection" 				=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\ThirdPartyRedirectAdExpandingDirection",
    "TimeUnit" 												=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\TimeUnit",
    "CriterionUserList.MembershipStatus" 					=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\CriterionUserListMembershipStatus",
    "UserStatus" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\UserStatus",
    "VideoType" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\VideoType",
    "WebpageConditionOperand" 								=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\WebpageConditionOperand",
    "getResult" 											=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getResult",
    "getResultResponse" 									=> "\\Google\\Api\\Ads\\AdWords\\v201306\\Common\\getResultResponse",
  );

  /**
   * The endpoint of the service
   * @var string
   */
  public static $endpoint = "https://adwords.google.com/api/adwords/cm/v201306/MutateJobService";

  /**
   * Constructor using wsdl location and options array
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   */
  public function __construct($wsdl=null, $options, $user) {
    $options["classmap"] = MutateJobService::$classmap;
    parent::__construct($wsdl, $options, $user, 'MutateJobService', 'https://adwords.google.com/api/adwords/cm/v201306');
  }

  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Query the status of existing jobs, both simple and bulk API.
   * <p>Use a {@link JobSelector} to query and return a list which may
   * contain both {@link BulkMutateJob} and/or {@link SimpleMutateJob}.</p>
   */
  public function get($selector) {
    $arg = new MutateJobServiceGet($selector);
    $result = $this->__soapCall("get", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Query mutation results, of a {@code COMPLETED} job.
   * <p>Use a {@link JobSelector} to query and return either a
   * {@link BulkMutateResult} or a {@link SimpleMutateResult}. Submit only one job ID
   * at a time.</p>
   */
  public function getResult($selector) {
    $arg = new getResult($selector);
    $result = $this->__soapCall("getResult", array($arg));
    return $result->rval;
  }


  /**
   * <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
   * <span class="constraint NotEmpty">This field must contain at least one element.</span>
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   * 
   * 
   * 
   * Simplified way of submitting a mutation job. The provided list of
   * operations, if valid, will create a new job with a unique id, which will
   * be returned. This id can later be used in invocations of
   * {@link #get} and {@link #getResult}. Policy can optionally be specified.
   * 
   * <p>When this method returns with success, the job will be in
   * {@code PROCESSING} or {@code PENDING} state and no further action is
   * needed for the job to get executed.</p>
   * 
   * <p>You should not use the returned {@link BulkMutateJobId} with bulk API
   * {@link BulkMutateJobService#mutate} method.</p>
   */
  public function mutate($operations, $policy) {
    $arg = new MutateJobServiceMutate($operations, $policy);
    $result = $this->__soapCall("mutate", array($arg));
    return $result->rval;
  }
}