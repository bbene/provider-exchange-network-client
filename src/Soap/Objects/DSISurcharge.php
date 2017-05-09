<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSISurcharge
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISurcharge
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
