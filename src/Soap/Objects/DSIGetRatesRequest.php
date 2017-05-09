<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetRatesRequest
{

    /**
     * @var DSIDealInfo $DealInfo
     */
    protected $DealInfo = null;

    /**
     * @var ArrayOfDSIProductInfo $Products
     */
    protected $Products = null;

    /**
     * @var boolean $TestRequest
     */
    protected $TestRequest = null;

    
    public function __construct()
    {
    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRatesRequest
     */
    public function setDealInfo($DealInfo)
    {
      $this->DealInfo = $DealInfo;
      return $this;
    }

    /**
     * @return ArrayOfDSIProductInfo
     */
    public function getProducts()
    {
      return $this->Products;
    }

    /**
     * @param ArrayOfDSIProductInfo $Products
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRatesRequest
     */
    public function setProducts($Products)
    {
      $this->Products = $Products;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTestRequest()
    {
      return $this->TestRequest;
    }

    /**
     * @param boolean $TestRequest
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRatesRequest
     */
    public function setTestRequest($TestRequest)
    {
      $this->TestRequest = $TestRequest;
      return $this;
    }

}
