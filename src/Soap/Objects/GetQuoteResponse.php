<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetQuoteResponse
{

    /**
     * @var DSIGetQuoteResponse $GetQuoteResult
     */
    protected $GetQuoteResult = null;

    /**
     * @param DSIGetQuoteResponse $GetQuoteResult
     */
    public function __construct($GetQuoteResult)
    {
      $this->GetQuoteResult = $GetQuoteResult;
    }

    /**
     * @return DSIGetQuoteResponse
     */
    public function getGetQuoteResult()
    {
      return $this->GetQuoteResult;
    }

    /**
     * @param DSIGetQuoteResponse $GetQuoteResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetQuoteResponse
     */
    public function setGetQuoteResult($GetQuoteResult)
    {
      $this->GetQuoteResult = $GetQuoteResult;
      return $this;
    }

}
