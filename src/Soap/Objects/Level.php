<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Level
{

    /**
     * @var string $CoverageId
     */
    protected $CoverageId = null;

    /**
     * @var string $CoverageName
     */
    protected $CoverageName = null;

    /**
     * @var float $DealerCost
     */
    protected $DealerCost = null;

    /**
     * @var string $FormGroupId
     */
    protected $FormGroupId = null;

    /**
     * @var int $FormId
     */
    protected $FormId = null;

    /**
     * @var string $FormName
     */
    protected $FormName = null;

    /**
     * @var string $FormNumber
     */
    protected $FormNumber = null;

    /**
     * @var string $FormState
     */
    protected $FormState = null;

    /**
     * @var float $MaxRetailPrice
     */
    protected $MaxRetailPrice = null;

    /**
     * @var float $MinRetailPrice
     */
    protected $MinRetailPrice = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var string $ProductType
     */
    protected $ProductType = null;

    /**
     * @var int $RateId
     */
    protected $RateId = null;

    /**
     * @var float $RetailPrice
     */
    protected $RetailPrice = null;

    /**
     * @var string $TermMiles
     */
    protected $TermMiles = null;

    /**
     * @var string $TermMonths
     */
    protected $TermMonths = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCoverageId()
    {
      return $this->CoverageId;
    }

    /**
     * @param string $CoverageId
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setCoverageId($CoverageId)
    {
      $this->CoverageId = $CoverageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoverageName()
    {
      return $this->CoverageName;
    }

    /**
     * @param string $CoverageName
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setCoverageName($CoverageName)
    {
      $this->CoverageName = $CoverageName;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setDealerCost($DealerCost)
    {
      $this->DealerCost = $DealerCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormGroupId()
    {
      return $this->FormGroupId;
    }

    /**
     * @param string $FormGroupId
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setFormGroupId($FormGroupId)
    {
      $this->FormGroupId = $FormGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFormId()
    {
      return $this->FormId;
    }

    /**
     * @param int $FormId
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setFormId($FormId)
    {
      $this->FormId = $FormId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormName()
    {
      return $this->FormName;
    }

    /**
     * @param string $FormName
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setFormName($FormName)
    {
      $this->FormName = $FormName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormNumber()
    {
      return $this->FormNumber;
    }

    /**
     * @param string $FormNumber
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setFormNumber($FormNumber)
    {
      $this->FormNumber = $FormNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormState()
    {
      return $this->FormState;
    }

    /**
     * @param string $FormState
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setFormState($FormState)
    {
      $this->FormState = $FormState;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setMinRetailPrice($MinRetailPrice)
    {
      $this->MinRetailPrice = $MinRetailPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->ProductId;
    }

    /**
     * @param int $ProductId
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param string $ProductType
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateId()
    {
      return $this->RateId;
    }

    /**
     * @param int $RateId
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setRateId($RateId)
    {
      $this->RateId = $RateId;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setRetailPrice($RetailPrice)
    {
      $this->RetailPrice = $RetailPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermMiles()
    {
      return $this->TermMiles;
    }

    /**
     * @param string $TermMiles
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setTermMiles($TermMiles)
    {
      $this->TermMiles = $TermMiles;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermMonths()
    {
      return $this->TermMonths;
    }

    /**
     * @param string $TermMonths
     * @return \ProviderExchangeNetwork\Soap\Objects\Level
     */
    public function setTermMonths($TermMonths)
    {
      $this->TermMonths = $TermMonths;
      return $this;
    }

}
