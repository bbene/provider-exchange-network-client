<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class RateBookCode
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\RateBookCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \ProviderExchangeNetwork\Soap\Objects\RateBookCode
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
