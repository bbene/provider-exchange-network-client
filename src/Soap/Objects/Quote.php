<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Quote
{

    /**
     * @var float $DealerCost
     */
    protected $DealerCost = null;

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var float $MaxRetailPrice
     */
    protected $MaxRetailPrice = null;

    /**
     * @var float $MinRetailPrice
     */
    protected $MinRetailPrice = null;

    /**
     * @var string $RateID
     */
    protected $RateID = null;

    /**
     * @var float $RetailPrice
     */
    protected $RetailPrice = null;

    
    public function __construct()
    {
    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Quote
     */
    public function setDealerCost($DealerCost)
    {
      $this->DealerCost = $DealerCost;
      return $this;
    }

    /**
     * @return Error
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param Error $Error
     * @return \ProviderExchangeNetwork\Soap\Objects\Quote
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxRetailPrice()
    {
      return $this->MaxRetailPrice;
    }

    /**
     * @param float $MaxRetailPrice
     * @return \ProviderExchangeNetwork\Soap\Objects\Quote
     */
    public function setMaxRetailPrice($MaxRetailPrice)
    {
      $this->MaxRetailPrice = $MaxRetailPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinRetailPrice()
    {
      return $this->MinRetailPrice;
    }

    /**
     * @param float $MinRetailPrice
     * @return \ProviderExchangeNetwork\Soap\Objects\Quote
     */
    public function setMinRetailPrice($MinRetailPrice)
    {
      $this->MinRetailPrice = $MinRetailPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateID()
    {
      return $this->RateID;
    }

    /**
     * @param string $RateID
     * @return \ProviderExchangeNetwork\Soap\Objects\Quote
     */
    public function setRateID($RateID)
    {
      $this->RateID = $RateID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Quote
     */
    public function setRetailPrice($RetailPrice)
    {
      $this->RetailPrice = $RetailPrice;
      return $this;
    }

}
