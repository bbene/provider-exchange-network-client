<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetLendersResponse
{

    /**
     * @var DSIGetLendersResponse $GetLendersResult
     */
    protected $GetLendersResult = null;

    /**
     * @param DSIGetLendersResponse $GetLendersResult
     */
    public function __construct($GetLendersResult)
    {
      $this->GetLendersResult = $GetLendersResult;
    }

    /**
     * @return DSIGetLendersResponse
     */
    public function getGetLendersResult()
    {
      return $this->GetLendersResult;
    }

    /**
     * @param DSIGetLendersResponse $GetLendersResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetLendersResponse
     */
    public function setGetLendersResult($GetLendersResult)
    {
      $this->GetLendersResult = $GetLendersResult;
      return $this;
    }

}
