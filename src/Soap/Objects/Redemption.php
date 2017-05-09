<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Redemption
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $RedemptionID
     */
    protected $RedemptionID = null;

    /**
     * @var float $RedemptionValue
     */
    protected $RedemptionValue = null;

    /**
     * @var float $RoadsideValue
     */
    protected $RoadsideValue = null;

    /**
     * @var int $ServiceOdometer
     */
    protected $ServiceOdometer = null;

    /**
     * @var float $StreetValue
     */
    protected $StreetValue = null;

    
    public function __construct()
    {
    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Redemption
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getRedemptionID()
    {
      return $this->RedemptionID;
    }

    /**
     * @param int $RedemptionID
     * @return \ProviderExchangeNetwork\Soap\Objects\Redemption
     */
    public function setRedemptionID($RedemptionID)
    {
      $this->RedemptionID = $RedemptionID;
      return $this;
    }

    /**
     * @return float
     */
    public function getRedemptionValue()
    {
      return $this->RedemptionValue;
    }

    /**
     * @param float $RedemptionValue
     * @return \ProviderExchangeNetwork\Soap\Objects\Redemption
     */
    public function setRedemptionValue($RedemptionValue)
    {
      $this->RedemptionValue = $RedemptionValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoadsideValue()
    {
      return $this->RoadsideValue;
    }

    /**
     * @param float $RoadsideValue
     * @return \ProviderExchangeNetwork\Soap\Objects\Redemption
     */
    public function setRoadsideValue($RoadsideValue)
    {
      $this->RoadsideValue = $RoadsideValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceOdometer()
    {
      return $this->ServiceOdometer;
    }

    /**
     * @param int $ServiceOdometer
     * @return \ProviderExchangeNetwork\Soap\Objects\Redemption
     */
    public function setServiceOdometer($ServiceOdometer)
    {
      $this->ServiceOdometer = $ServiceOdometer;
      return $this;
    }

    /**
     * @return float
     */
    public function getStreetValue()
    {
      return $this->StreetValue;
    }

    /**
     * @param float $StreetValue
     * @return \ProviderExchangeNetwork\Soap\Objects\Redemption
     */
    public function setStreetValue($StreetValue)
    {
      $this->StreetValue = $StreetValue;
      return $this;
    }

}
