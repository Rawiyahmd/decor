<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V16\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The impact of making the change as described in the recommendation.
 * Some types of recommendations may not have impact information.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.resources.Recommendation.RecommendationImpact</code>
 */
class RecommendationImpact extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Base metrics at the time the recommendation was generated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.Recommendation.RecommendationMetrics base_metrics = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $base_metrics = null;
    /**
     * Output only. Estimated metrics if the recommendation is applied.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.Recommendation.RecommendationMetrics potential_metrics = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $potential_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics $base_metrics
     *           Output only. Base metrics at the time the recommendation was generated.
     *     @type \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics $potential_metrics
     *           Output only. Estimated metrics if the recommendation is applied.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Base metrics at the time the recommendation was generated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.Recommendation.RecommendationMetrics base_metrics = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics|null
     */
    public function getBaseMetrics()
    {
        return $this->base_metrics;
    }

    public function hasBaseMetrics()
    {
        return isset($this->base_metrics);
    }

    public function clearBaseMetrics()
    {
        unset($this->base_metrics);
    }

    /**
     * Output only. Base metrics at the time the recommendation was generated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.Recommendation.RecommendationMetrics base_metrics = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics $var
     * @return $this
     */
    public function setBaseMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics::class);
        $this->base_metrics = $var;

        return $this;
    }

    /**
     * Output only. Estimated metrics if the recommendation is applied.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.Recommendation.RecommendationMetrics potential_metrics = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics|null
     */
    public function getPotentialMetrics()
    {
        return $this->potential_metrics;
    }

    public function hasPotentialMetrics()
    {
        return isset($this->potential_metrics);
    }

    public function clearPotentialMetrics()
    {
        unset($this->potential_metrics);
    }

    /**
     * Output only. Estimated metrics if the recommendation is applied.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.Recommendation.RecommendationMetrics potential_metrics = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics $var
     * @return $this
     */
    public function setPotentialMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\Recommendation\RecommendationMetrics::class);
        $this->potential_metrics = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationImpact::class, \Google\Ads\GoogleAds\V16\Resources\Recommendation_RecommendationImpact::class);

