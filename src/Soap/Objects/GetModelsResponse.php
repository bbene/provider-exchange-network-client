<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetModelsResponse
{

    /**
     * @var DSIGetModelsResponse $GetModelsResult
     */
    protected $GetModelsResult = null;

    /**
     * @param DSIGetModelsResponse $GetModelsResult
     */
    public function __construct($GetModelsResult)
    {
      $this->GetModelsResult = $GetModelsResult;
    }

    /**
     * @return DSIGetModelsResponse
     */
    public function getGetModelsResult()
    {
      return $this->GetModelsResult;
    }

    /**
     * @param DSIGetModelsResponse $GetModelsResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetModelsResponse
     */
    public function setGetModelsResult($GetModelsResult)
    {
      $this->GetModelsResult = $GetModelsResult;
      return $this;
    }

}
