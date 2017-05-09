<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Lender
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \ProviderExchangeNetwork\Soap\Objects\Lender
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ProviderExchangeNetwork\Soap\Objects\Lender
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
