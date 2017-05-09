<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetDealersResponse
{

    /**
     * @var DSIGetDealersResponse $GetDealersResult
     */
    protected $GetDealersResult = null;

    /**
     * @param DSIGetDealersResponse $GetDealersResult
     */
    public function __construct($GetDealersResult)
    {
      $this->GetDealersResult = $GetDealersResult;
    }

    /**
     * @return DSIGetDealersResponse
     */
    public function getGetDealersResult()
    {
      return $this->GetDealersResult;
    }

    /**
     * @param DSIGetDealersResponse $GetDealersResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetDealersResponse
     */
    public function setGetDealersResult($GetDealersResult)
    {
      $this->GetDealersResult = $GetDealersResult;
      return $this;
    }

}
