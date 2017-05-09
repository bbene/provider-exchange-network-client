<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetDealerProducts
{

    /**
     * @var int $dealerId
     */
    protected $dealerId = null;

    /**
     * @param int $dealerId
     */
    public function __construct($dealerId)
    {
      $this->dealerId = $dealerId;
    }

    /**
     * @return int
     */
    public function getDealerId()
    {
      return $this->dealerId;
    }

    /**
     * @param int $dealerId
     * @return \ProviderExchangeNetwork\Soap\Objects\GetDealerProducts
     */
    public function setDealerId($dealerId)
    {
      $this->dealerId = $dealerId;
      return $this;
    }

}
