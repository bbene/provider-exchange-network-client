<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Deductible
{

    /**
     * @var int $Amount
     */
    protected $Amount = null;

    /**
     * @var float $DealerCost
     */
    protected $DealerCost = null;

    /**
     * @var DeductibleType $DeductibleType
     */
    protected $DeductibleType = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $FIMarkup
     */
    protected $FIMarkup = null;

    /**
     * @var float $MaxRetailPrice
     */
    protected $MaxRetailPrice = null;

    /**
     * @var float $MinRetailPrice
     */
    protected $MinRetailPrice = null;

    /**
     * @var int $RateID
     */
    protected $RateID = null;

    /**
     * @var int $ReducedAmount
     */
    protected $ReducedAmount = null;

    /**
     * @var float $RetailPrice
     */
    protected $RetailPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param int $Amount
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setDealerCost($DealerCost)
    {
      $this->DealerCost = $DealerCost;
      return $this;
    }

    /**
     * @return DeductibleType
     */
    public function getDeductibleType()
    {
      return $this->DeductibleType;
    }

    /**
     * @param DeductibleType $DeductibleType
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setDeductibleType($DeductibleType)
    {
      $this->DeductibleType = $DeductibleType;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return float
     */
    public function getFIMarkup()
    {
      return $this->FIMarkup;
    }

    /**
     * @param float $FIMarkup
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setFIMarkup($FIMarkup)
    {
      $this->FIMarkup = $FIMarkup;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setMinRetailPrice($MinRetailPrice)
    {
      $this->MinRetailPrice = $MinRetailPrice;
      return $this;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setRateID($RateID)
    {
      $this->RateID = $RateID;
      return $this;
    }

    /**
     * @return int
     */
    public function getReducedAmount()
    {
      return $this->ReducedAmount;
    }

    /**
     * @param int $ReducedAmount
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setReducedAmount($ReducedAmount)
    {
      $this->ReducedAmount = $ReducedAmount;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Deductible
     */
    public function setRetailPrice($RetailPrice)
    {
      $this->RetailPrice = $RetailPrice;
      return $this;
    }

}
