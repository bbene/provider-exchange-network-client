<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetRateBookCodesResponse
{

    /**
     * @var DSIGetRateBookCodesResponse $GetRateBookCodesResult
     */
    protected $GetRateBookCodesResult = null;

    /**
     * @param DSIGetRateBookCodesResponse $GetRateBookCodesResult
     */
    public function __construct($GetRateBookCodesResult)
    {
      $this->GetRateBookCodesResult = $GetRateBookCodesResult;
    }

    /**
     * @return DSIGetRateBookCodesResponse
     */
    public function getGetRateBookCodesResult()
    {
      return $this->GetRateBookCodesResult;
    }

    /**
     * @param DSIGetRateBookCodesResponse $GetRateBookCodesResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetRateBookCodesResponse
     */
    public function setGetRateBookCodesResult($GetRateBookCodesResult)
    {
      $this->GetRateBookCodesResult = $GetRateBookCodesResult;
      return $this;
    }

}
