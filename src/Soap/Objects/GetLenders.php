<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetLenders
{

    /**
     * @var DSIGetLendersRequest $request
     */
    protected $request = null;

    /**
     * @param DSIGetLendersRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSIGetLendersRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSIGetLendersRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\GetLenders
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
