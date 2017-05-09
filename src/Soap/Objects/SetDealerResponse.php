<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class SetDealerResponse
{

    /**
     * @var DSISetDealerResponse $SetDealerResult
     */
    protected $SetDealerResult = null;

    /**
     * @param DSISetDealerResponse $SetDealerResult
     */
    public function __construct($SetDealerResult)
    {
      $this->SetDealerResult = $SetDealerResult;
    }

    /**
     * @return DSISetDealerResponse
     */
    public function getSetDealerResult()
    {
      return $this->SetDealerResult;
    }

    /**
     * @param DSISetDealerResponse $SetDealerResult
     * @return \ProviderExchangeNetwork\Soap\Objects\SetDealerResponse
     */
    public function setSetDealerResult($SetDealerResult)
    {
      $this->SetDealerResult = $SetDealerResult;
      return $this;
    }

}
