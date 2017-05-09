<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Vehicle
{

    /**
     * @var string $Cylinders
     */
    protected $Cylinders = null;

    /**
     * @var string $MakeName
     */
    protected $MakeName = null;

    /**
     * @var string $ModelName
     */
    protected $ModelName = null;

    /**
     * @var int $ModelYear
     */
    protected $ModelYear = null;

    /**
     * @var string $SeriesName
     */
    protected $SeriesName = null;

    /**
     * @var string $VIN
     */
    protected $VIN = null;

    /**
     * @var string $VehicleClass
     */
    protected $VehicleClass = null;

    /**
     * @var string $VehicleID
     */
    protected $VehicleID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCylinders()
    {
      return $this->Cylinders;
    }

    /**
     * @param string $Cylinders
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setCylinders($Cylinders)
    {
      $this->Cylinders = $Cylinders;
      return $this;
    }

    /**
     * @return string
     */
    public function getMakeName()
    {
      return $this->MakeName;
    }

    /**
     * @param string $MakeName
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setMakeName($MakeName)
    {
      $this->MakeName = $MakeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelName()
    {
      return $this->ModelName;
    }

    /**
     * @param string $ModelName
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setModelName($ModelName)
    {
      $this->ModelName = $ModelName;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setModelYear($ModelYear)
    {
      $this->ModelYear = $ModelYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeriesName()
    {
      return $this->SeriesName;
    }

    /**
     * @param string $SeriesName
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setSeriesName($SeriesName)
    {
      $this->SeriesName = $SeriesName;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setVIN($VIN)
    {
      $this->VIN = $VIN;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleClass()
    {
      return $this->VehicleClass;
    }

    /**
     * @param string $VehicleClass
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setVehicleClass($VehicleClass)
    {
      $this->VehicleClass = $VehicleClass;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Vehicle
     */
    public function setVehicleID($VehicleID)
    {
      $this->VehicleID = $VehicleID;
      return $this;
    }

}
