<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class SetDealer
{

    /**
     * @var DSISetDealerRequest $request
     */
    protected $request = null;

    /**
     * @param DSISetDealerRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSISetDealerRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSISetDealerRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\SetDealer
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
