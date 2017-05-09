<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetQuote
{

    /**
     * @var DSIGetQuoteRequest $request
     */
    protected $request = null;

    /**
     * @param DSIGetQuoteRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSIGetQuoteRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSIGetQuoteRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\GetQuote
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
