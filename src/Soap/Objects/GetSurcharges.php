<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetSurcharges
{

    /**
     * @var int $productID
     */
    protected $productID = null;

    /**
     * @var boolean $includeVehicleSpecific
     */
    protected $includeVehicleSpecific = null;

    /**
     * @param int $productID
     * @param boolean $includeVehicleSpecific
     */
    public function __construct($productID, $includeVehicleSpecific)
    {
      $this->productID = $productID;
      $this->includeVehicleSpecific = $includeVehicleSpecific;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->productID;
    }

    /**
     * @param int $productID
     * @return \ProviderExchangeNetwork\Soap\Objects\GetSurcharges
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeVehicleSpecific()
    {
      return $this->includeVehicleSpecific;
    }

    /**
     * @param boolean $includeVehicleSpecific
     * @return \ProviderExchangeNetwork\Soap\Objects\GetSurcharges
     */
    public function setIncludeVehicleSpecific($includeVehicleSpecific)
    {
      $this->includeVehicleSpecific = $includeVehicleSpecific;
      return $this;
    }

}
