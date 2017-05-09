<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIProductInfo
{

    /**
     * @var int $EndingMileage
     */
    protected $EndingMileage = null;

    /**
     * @var boolean $IncludeWrapRates
     */
    protected $IncludeWrapRates = null;

    /**
     * @var string $LenderCode
     */
    protected $LenderCode = null;

    /**
     * @var int $ModelYear
     */
    protected $ModelYear = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $RateBookCode
     */
    protected $RateBookCode = null;

    /**
     * @var int $StartingMileage
     */
    protected $StartingMileage = null;

    /**
     * @var ArrayOfDSISurcharge $Surcharges
     */
    protected $Surcharges = null;

    /**
     * @var string $VehicleID
     */
    protected $VehicleID = null;

    /**
     * @var string $VehicleTrim
     */
    protected $VehicleTrim = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getEndingMileage()
    {
      return $this->EndingMileage;
    }

    /**
     * @param int $EndingMileage
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setEndingMileage($EndingMileage)
    {
      $this->EndingMileage = $EndingMileage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeWrapRates()
    {
      return $this->IncludeWrapRates;
    }

    /**
     * @param boolean $IncludeWrapRates
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setIncludeWrapRates($IncludeWrapRates)
    {
      $this->IncludeWrapRates = $IncludeWrapRates;
      return $this;
    }

    /**
     * @return string
     */
    public function getLenderCode()
    {
      return $this->LenderCode;
    }

    /**
     * @param string $LenderCode
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setLenderCode($LenderCode)
    {
      $this->LenderCode = $LenderCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getModelYear()
    {
      return $this->ModelYear;
    }

    /**
     * @param int $ModelYear
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setModelYear($ModelYear)
    {
      $this->ModelYear = $ModelYear;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateBookCode()
    {
      return $this->RateBookCode;
    }

    /**
     * @param string $RateBookCode
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setRateBookCode($RateBookCode)
    {
      $this->RateBookCode = $RateBookCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartingMileage()
    {
      return $this->StartingMileage;
    }

    /**
     * @param int $StartingMileage
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setStartingMileage($StartingMileage)
    {
      $this->StartingMileage = $StartingMileage;
      return $this;
    }

    /**
     * @return ArrayOfDSISurcharge
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param ArrayOfDSISurcharge $Surcharges
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setSurcharges($Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleID()
    {
      return $this->VehicleID;
    }

    /**
     * @param string $VehicleID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setVehicleID($VehicleID)
    {
      $this->VehicleID = $VehicleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleTrim()
    {
      return $this->VehicleTrim;
    }

    /**
     * @param string $VehicleTrim
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIProductInfo
     */
    public function setVehicleTrim($VehicleTrim)
    {
      $this->VehicleTrim = $VehicleTrim;
      return $this;
    }

}
