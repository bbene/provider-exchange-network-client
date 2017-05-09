<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetDealerProductsResponse
{

    /**
     * @var DSIGetDealerProductsResponse $GetDealerProductsResult
     */
    protected $GetDealerProductsResult = null;

    /**
     * @param DSIGetDealerProductsResponse $GetDealerProductsResult
     */
    public function __construct($GetDealerProductsResult)
    {
      $this->GetDealerProductsResult = $GetDealerProductsResult;
    }

    /**
     * @return DSIGetDealerProductsResponse
     */
    public function getGetDealerProductsResult()
    {
      return $this->GetDealerProductsResult;
    }

    /**
     * @param DSIGetDealerProductsResponse $GetDealerProductsResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetDealerProductsResponse
     */
    public function setGetDealerProductsResult($GetDealerProductsResult)
    {
      $this->GetDealerProductsResult = $GetDealerProductsResult;
      return $this;
    }

}
