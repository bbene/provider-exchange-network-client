<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIDealInfo
{

    /**
     * @var float $APR
     */
    protected $APR = null;

    /**
     * @var CarStatus $CarStatus
     */
    protected $CarStatus = null;

    /**
     * @var DealType $DealType
     */
    protected $DealType = null;

    /**
     * @var int $DealerID
     */
    protected $DealerID = null;

    /**
     * @var string $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var ArrayOfint $FinanceTerms
     */
    protected $FinanceTerms = null;

    /**
     * @var ArrayOfint $FinanceTermsMileage
     */
    protected $FinanceTermsMileage = null;

    /**
     * @var float $FinancedAmount
     */
    protected $FinancedAmount = null;

    /**
     * @var boolean $FirstOwner
     */
    protected $FirstOwner = null;

    /**
     * @var string $InServiceDate
     */
    protected $InServiceDate = null;

    /**
     * @var Language $Language
     */
    protected $Language = null;

    /**
     * @var int $Mileage
     */
    protected $Mileage = null;

    /**
     * @var UserRole $UserRole
     */
    protected $UserRole = null;

    /**
     * @var string $VIN
     */
    protected $VIN = null;

    /**
     * @var float $VehicleMSRP
     */
    protected $VehicleMSRP = null;

    /**
     * @var float $VehiclePurchasePrice
     */
    protected $VehiclePurchasePrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAPR()
    {
      return $this->APR;
    }

    /**
     * @param float $APR
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setAPR($APR)
    {
      $this->APR = $APR;
      return $this;
    }

    /**
     * @return CarStatus
     */
    public function getCarStatus()
    {
      return $this->CarStatus;
    }

    /**
     * @param CarStatus $CarStatus
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setCarStatus($CarStatus)
    {
      $this->CarStatus = $CarStatus;
      return $this;
    }

    /**
     * @return DealType
     */
    public function getDealType()
    {
      return $this->DealType;
    }

    /**
     * @param DealType $DealType
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setDealType($DealType)
    {
      $this->DealType = $DealType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealerID()
    {
      return $this->DealerID;
    }

    /**
     * @param int $DealerID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setDealerID($DealerID)
    {
      $this->DealerID = $DealerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param string $EffectiveDate
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getFinanceTerms()
    {
      return $this->FinanceTerms;
    }

    /**
     * @param array|ArrayOfint $FinanceTerms
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setFinanceTerms($FinanceTerms)
    {
      $this->FinanceTerms = $FinanceTerms;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getFinanceTermsMileage()
    {
      return $this->FinanceTermsMileage;
    }

    /**
     * @param array|ArrayOfint $FinanceTermsMileage
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setFinanceTermsMileage($FinanceTermsMileage)
    {
      $this->FinanceTermsMileage = $FinanceTermsMileage;
      return $this;
    }

    /**
     * @return float
     */
    public function getFinancedAmount()
    {
      return $this->FinancedAmount;
    }

    /**
     * @param float $FinancedAmount
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setFinancedAmount($FinancedAmount)
    {
      $this->FinancedAmount = $FinancedAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirstOwner()
    {
      return $this->FirstOwner;
    }

    /**
     * @param boolean $FirstOwner
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setFirstOwner($FirstOwner)
    {
      $this->FirstOwner = $FirstOwner;
      return $this;
    }

    /**
     * @return string
     */
    public function getInServiceDate()
    {
      return $this->InServiceDate;
    }

    /**
     * @param string $InServiceDate
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setInServiceDate($InServiceDate)
    {
      $this->InServiceDate = $InServiceDate;
      return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string|Language $Language
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return int
     */
    public function getMileage()
    {
      return $this->Mileage;
    }

    /**
     * @param int $Mileage
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setMileage($Mileage)
    {
      $this->Mileage = $Mileage;
      return $this;
    }

    /**
     * @return UserRole
     */
    public function getUserRole()
    {
      return $this->UserRole;
    }

    /**
     * @param string|UserRole $UserRole
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setUserRole($UserRole)
    {
      $this->UserRole = $UserRole;
      return $this;
    }

    /**
     * @return string
     */
    public function getVIN()
    {
      return $this->VIN;
    }

    /**
     * @param string $VIN
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setVIN($VIN)
    {
      $this->VIN = $VIN;
      return $this;
    }

    /**
     * @return float
     */
    public function getVehicleMSRP()
    {
      return $this->VehicleMSRP;
    }

    /**
     * @param float $VehicleMSRP
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setVehicleMSRP($VehicleMSRP)
    {
      $this->VehicleMSRP = $VehicleMSRP;
      return $this;
    }

    /**
     * @return float
     */
    public function getVehiclePurchasePrice()
    {
      return $this->VehiclePurchasePrice;
    }

    /**
     * @param float $VehiclePurchasePrice
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIDealInfo
     */
    public function setVehiclePurchasePrice($VehiclePurchasePrice)
    {
      $this->VehiclePurchasePrice = $VehiclePurchasePrice;
      return $this;
    }

}
