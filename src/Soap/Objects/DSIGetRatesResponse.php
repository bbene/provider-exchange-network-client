<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetRatesResponse
{

    /**
     * @var ArrayOfRate $Rates
     */
    protected $Rates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRate
     */
    public function getRates()
    {
      return $this->Rates;
    }

    /**
     * @param ArrayOfRate $Rates
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRatesResponse
     */
    public function setRates($Rates)
    {
      $this->Rates = $Rates;
      return $this;
    }

}
