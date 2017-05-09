<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class SetDealerProduct
{

    /**
     * @var DSISetDealerProductRequest $request
     */
    protected $request = null;

    /**
     * @param DSISetDealerProductRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSISetDealerProductRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSISetDealerProductRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\SetDealerProduct
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
