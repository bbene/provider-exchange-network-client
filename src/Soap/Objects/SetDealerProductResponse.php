<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class SetDealerProductResponse
{

    /**
     * @var DSISetDealerProductResponse $SetDealerProductResult
     */
    protected $SetDealerProductResult = null;

    /**
     * @param DSISetDealerProductResponse $SetDealerProductResult
     */
    public function __construct($SetDealerProductResult)
    {
      $this->SetDealerProductResult = $SetDealerProductResult;
    }

    /**
     * @return DSISetDealerProductResponse
     */
    public function getSetDealerProductResult()
    {
      return $this->SetDealerProductResult;
    }

    /**
     * @param DSISetDealerProductResponse $SetDealerProductResult
     * @return \ProviderExchangeNetwork\Soap\Objects\SetDealerProductResponse
     */
    public function setSetDealerProductResult($SetDealerProductResult)
    {
      $this->SetDealerProductResult = $SetDealerProductResult;
      return $this;
    }

}
