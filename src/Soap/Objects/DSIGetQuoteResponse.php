<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetQuoteResponse
{

    /**
     * @var Quote $Quote
     */
    protected $Quote = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Quote
     */
    public function getQuote()
    {
      return $this->Quote;
    }

    /**
     * @param Quote $Quote
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetQuoteResponse
     */
    public function setQuote($Quote)
    {
      $this->Quote = $Quote;
      return $this;
    }

}
