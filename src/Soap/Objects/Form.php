<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Form
{

    /**
     * @var int $FormID
     */
    protected $FormID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFormID()
    {
      return $this->FormID;
    }

    /**
     * @param int $FormID
     * @return \ProviderExchangeNetwork\Soap\Objects\Form
     */
    public function setFormID($FormID)
    {
      $this->FormID = $FormID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Form
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \ProviderExchangeNetwork\Soap\Objects\Form
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
