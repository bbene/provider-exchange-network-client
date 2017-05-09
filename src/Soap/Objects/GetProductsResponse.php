<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetProductsResponse
{

    /**
     * @var DSIGetProductsResponse $GetProductsResult
     */
    protected $GetProductsResult = null;

    /**
     * @param DSIGetProductsResponse $GetProductsResult
     */
    public function __construct($GetProductsResult)
    {
      $this->GetProductsResult = $GetProductsResult;
    }

    /**
     * @return DSIGetProductsResponse
     */
    public function getGetProductsResult()
    {
      return $this->GetProductsResult;
    }

    /**
     * @param DSIGetProductsResponse $GetProductsResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetProductsResponse
     */
    public function setGetProductsResult($GetProductsResult)
    {
      $this->GetProductsResult = $GetProductsResult;
      return $this;
    }

}
