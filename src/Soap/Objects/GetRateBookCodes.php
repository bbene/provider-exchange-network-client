<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetRateBookCodes
{

    /**
     * @var DSIGetRateBookCodesRequest $request
     */
    protected $request = null;

    /**
     * @param DSIGetRateBookCodesRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSIGetRateBookCodesRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSIGetRateBookCodesRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\GetRateBookCodes
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
