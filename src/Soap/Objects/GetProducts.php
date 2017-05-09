<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetProducts
{

    /**
     * @var int $providerID
     */
    protected $providerID = null;

    /**
     * @param int $providerID
     */
    public function __construct($providerID)
    {
      $this->providerID = $providerID;
    }

    /**
     * @return int
     */
    public function getProviderID()
    {
      return $this->providerID;
    }

    /**
     * @param int $providerID
     * @return \ProviderExchangeNetwork\Soap\Objects\GetProducts
     */
    public function setProviderID($providerID)
    {
      $this->providerID = $providerID;
      return $this;
    }

}
