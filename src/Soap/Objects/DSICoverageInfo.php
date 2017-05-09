<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSICoverageInfo
{

    /**
     * @var int $RateID
     */
    protected $RateID = null;

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getRateID()
    {
      return $this->RateID;
    }

    /**
     * @param int $RateID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSICoverageInfo
     */
    public function setRateID($RateID)
    {
      $this->RateID = $RateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSICoverageInfo
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

}
