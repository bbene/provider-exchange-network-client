<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetBatchRatesResponse
{

    /**
     * @var DSIGetBatchRatesResponse $GetBatchRatesResult
     */
    protected $GetBatchRatesResult = null;

    /**
     * @param DSIGetBatchRatesResponse $GetBatchRatesResult
     */
    public function __construct($GetBatchRatesResult)
    {
      $this->GetBatchRatesResult = $GetBatchRatesResult;
    }

    /**
     * @return DSIGetBatchRatesResponse
     */
    public function getGetBatchRatesResult()
    {
      return $this->GetBatchRatesResult;
    }

    /**
     * @param DSIGetBatchRatesResponse $GetBatchRatesResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetBatchRatesResponse
     */
    public function setGetBatchRatesResult($GetBatchRatesResult)
    {
      $this->GetBatchRatesResult = $GetBatchRatesResult;
      return $this;
    }

}
