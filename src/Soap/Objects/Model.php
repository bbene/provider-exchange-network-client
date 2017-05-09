<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Model
{

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
     * @var string $VehicleID
     */
    protected $VehicleID = null;

    
    public function __construct()
    {
    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Model
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Model
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Model
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Model
     */
    public function setSeriesName($SeriesName)
    {
      $this->SeriesName = $SeriesName;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Model
     */
    public function setVehicleID($VehicleID)
    {
      $this->VehicleID = $VehicleID;
      return $this;
    }

}
