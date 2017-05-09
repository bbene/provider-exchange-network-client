<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetQuoteRequest
{

    /**
     * @var DSICoverageInfo $CoverageInfo
     */
    protected $CoverageInfo = null;

    /**
     * @var DSIDealInfo $DealInfo
     */
    protected $DealInfo = null;

    /**
     * @var DSIProductInfo $ProductInfo
     */
    protected $ProductInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DSICoverageInfo
     */
    public function getCoverageInfo()
    {
      return $this->CoverageInfo;
    }

    /**
     * @param DSICoverageInfo $CoverageInfo
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetQuoteRequest
     */
    public function setCoverageInfo($CoverageInfo)
    {
      $this->CoverageInfo = $CoverageInfo;
      return $this;
    }

    /**
     * @return DSIDealInfo
     */
    public function getDealInfo()
    {
      return $this->DealInfo;
    }

    /**
     * @param DSIDealInfo $DealInfo
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetQuoteRequest
     */
    public function setDealInfo($DealInfo)
    {
      $this->DealInfo = $DealInfo;
      return $this;
    }

    /**
     * @return DSIProductInfo
     */
    public function getProductInfo()
    {
      return $this->ProductInfo;
    }

    /**
     * @param DSIProductInfo $ProductInfo
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetQuoteRequest
     */
    public function setProductInfo($ProductInfo)
    {
      $this->ProductInfo = $ProductInfo;
      return $this;
    }

}
