<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetSurchargesResponse
{

    /**
     * @var DSIGetSurchargesResponse $GetSurchargesResult
     */
    protected $GetSurchargesResult = null;

    /**
     * @param DSIGetSurchargesResponse $GetSurchargesResult
     */
    public function __construct($GetSurchargesResult)
    {
      $this->GetSurchargesResult = $GetSurchargesResult;
    }

    /**
     * @return DSIGetSurchargesResponse
     */
    public function getGetSurchargesResult()
    {
      return $this->GetSurchargesResult;
    }

    /**
     * @param DSIGetSurchargesResponse $GetSurchargesResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetSurchargesResponse
     */
    public function setGetSurchargesResult($GetSurchargesResult)
    {
      $this->GetSurchargesResult = $GetSurchargesResult;
      return $this;
    }

}
