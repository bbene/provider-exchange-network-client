<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetDealersResponse
{

    /**
     * @var ArrayOfDealer $Dealers
     */
    protected $Dealers = null;

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDealer
     */
    public function getDealers()
    {
      return $this->Dealers;
    }

    /**
     * @param ArrayOfDealer $Dealers
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetDealersResponse
     */
    public function setDealers($Dealers)
    {
      $this->Dealers = $Dealers;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetDealersResponse
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetDealersResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
