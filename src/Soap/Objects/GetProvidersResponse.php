<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetProvidersResponse
{

    /**
     * @var DSIGetProvidersResponse $GetProvidersResult
     */
    protected $GetProvidersResult = null;

    /**
     * @param DSIGetProvidersResponse $GetProvidersResult
     */
    public function __construct($GetProvidersResult)
    {
      $this->GetProvidersResult = $GetProvidersResult;
    }

    /**
     * @return DSIGetProvidersResponse
     */
    public function getGetProvidersResult()
    {
      return $this->GetProvidersResult;
    }

    /**
     * @param DSIGetProvidersResponse $GetProvidersResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetProvidersResponse
     */
    public function setGetProvidersResult($GetProvidersResult)
    {
      $this->GetProvidersResult = $GetProvidersResult;
      return $this;
    }

}
