<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ClickTrackingCreative extends \Google\AdsApi\Dfp\v201711\Creative
{

    /**
     * @var string $clickTrackingUrl
     */
    protected $clickTrackingUrl = null;

    /**
     * @param int $advertiserId
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201711\Size $size
     * @param string $previewUrl
     * @param string[] $policyViolations
     * @param \Google\AdsApi\Dfp\v201711\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201711\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201711\BaseCustomFieldValue[] $customFieldValues
     * @param string $clickTrackingUrl
     */
    public function __construct($advertiserId = null, $id = null, $name = null, $size = null, $previewUrl = null, array $policyViolations = null, array $appliedLabels = null, $lastModifiedDateTime = null, array $customFieldValues = null, $clickTrackingUrl = null)
    {
      parent::__construct($advertiserId, $id, $name, $size, $previewUrl, $policyViolations, $appliedLabels, $lastModifiedDateTime, $customFieldValues);
      $this->clickTrackingUrl = $clickTrackingUrl;
    }

    /**
     * @return string
     */
    public function getClickTrackingUrl()
    {
      return $this->clickTrackingUrl;
    }

    /**
     * @param string $clickTrackingUrl
     * @return \Google\AdsApi\Dfp\v201711\ClickTrackingCreative
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
      $this->clickTrackingUrl = $clickTrackingUrl;
      return $this;
    }

}
