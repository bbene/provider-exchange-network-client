<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetRatesResponse
{

    /**
     * @var DSIGetRatesResponse $GetRatesResult
     */
    protected $GetRatesResult = null;

    /**
     * @param DSIGetRatesResponse $GetRatesResult
     */
    public function __construct($GetRatesResult)
    {
      $this->GetRatesResult = $GetRatesResult;
    }

    /**
     * @return DSIGetRatesResponse
     */
    public function getGetRatesResult()
    {
      return $this->GetRatesResult;
    }

    /**
     * @param DSIGetRatesResponse $GetRatesResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetRatesResponse
     */
    public function setGetRatesResult($GetRatesResult)
    {
      $this->GetRatesResult = $GetRatesResult;
      return $this;
    }

}
