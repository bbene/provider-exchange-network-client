<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Surcharged
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var float $DealerCost
     */
    protected $DealerCost = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $Optional
     */
    protected $Optional = null;

    /**
     * @var float $RetailPrice
     */
    protected $RetailPrice = null;

    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharged
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerCost()
    {
      return $this->DealerCost;
    }

    /**
     * @param float $DealerCost
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharged
     */
    public function setDealerCost($DealerCost)
    {
      $this->DealerCost = $DealerCost;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharged
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptional()
    {
      return $this->Optional;
    }

    /**
     * @param boolean $Optional
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharged
     */
    public function setOptional($Optional)
    {
      $this->Optional = $Optional;
      return $this;
    }

    /**
     * @return float
     */
    public function getRetailPrice()
    {
      return $this->RetailPrice;
    }

    /**
     * @param float $RetailPrice
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharged
     */
    public function setRetailPrice($RetailPrice)
    {
      $this->RetailPrice = $RetailPrice;
      return $this;
    }

}
