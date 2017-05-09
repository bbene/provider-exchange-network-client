<?php

namespace ProviderExchangeNetwork\Soap\Objects;

use ProviderExchangeNetwork\Soap\Castable;

class Provider extends Castable
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ProviderID
     */
    protected $ProviderID = null;

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ProviderExchangeNetwork\Soap\Objects\Provider
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getProviderID()
    {
      return $this->ProviderID;
    }

    /**
     * @param int $ProviderID
     * @return \ProviderExchangeNetwork\Soap\Objects\Provider
     */
    public function setProviderID($ProviderID)
    {
      $this->ProviderID = $ProviderID;
      return $this;
    }

}
