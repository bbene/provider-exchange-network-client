<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Surcharge
{

    /**
     * @var CarStatus $CarStatus
     */
    protected $CarStatus = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var boolean $RequiredForRating
     */
    protected $RequiredForRating = null;

    /**
     * @var boolean $VehicleSpecific
     */
    protected $VehicleSpecific = null;

    
    public function __construct()
    {
    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setCarStatus($CarStatus)
    {
      $this->CarStatus = $CarStatus;
      return $this;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setProductId($ProductId)
    {
      $this->ProductId = $ProductId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiredForRating()
    {
      return $this->RequiredForRating;
    }

    /**
     * @param boolean $RequiredForRating
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setRequiredForRating($RequiredForRating)
    {
      $this->RequiredForRating = $RequiredForRating;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVehicleSpecific()
    {
      return $this->VehicleSpecific;
    }

    /**
     * @param boolean $VehicleSpecific
     * @return \ProviderExchangeNetwork\Soap\Objects\Surcharge
     */
    public function setVehicleSpecific($VehicleSpecific)
    {
      $this->VehicleSpecific = $VehicleSpecific;
      return $this;
    }

}
