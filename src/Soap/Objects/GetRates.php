<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetRates
{

    /**
     * @var DSIGetRatesRequest $request
     */
    protected $request = null;

    /**
     * @param DSIGetRatesRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSIGetRatesRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSIGetRatesRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\GetRates
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
