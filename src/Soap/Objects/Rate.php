<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Rate
{

    /**
     * @var ArrayOfCoverage $Coverages
     */
    protected $Coverages = null;

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var boolean $IncludesPrices
     */
    protected $IncludesPrices = null;

    /**
     * @var Market $Market
     */
    protected $Market = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

    /**
     * @var Vehicle $Vehicle
     */
    protected $Vehicle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCoverage
     */
    public function getCoverages()
    {
      return $this->Coverages;
    }

    /**
     * @param ArrayOfCoverage $Coverages
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setCoverages($Coverages)
    {
      $this->Coverages = $Coverages;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludesPrices()
    {
      return $this->IncludesPrices;
    }

    /**
     * @param boolean $IncludesPrices
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setIncludesPrices($IncludesPrices)
    {
      $this->IncludesPrices = $IncludesPrices;
      return $this;
    }

    /**
     * @return Market
     */
    public function getMarket()
    {
      return $this->Market;
    }

    /**
     * @param Market $Market
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setMarket($Market)
    {
      $this->Market = $Market;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \ProviderExchangeNetwork\Soap\Objects\Rate
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

}
