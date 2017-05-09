<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetSurchargesResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var ArrayOfSurcharge $Surcharges
     */
    protected $Surcharges = null;

    
    public function __construct()
    {
    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetSurchargesResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetSurchargesResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ArrayOfSurcharge
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param ArrayOfSurcharge $Surcharges
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetSurchargesResponse
     */
    public function setSurcharges($Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

}
