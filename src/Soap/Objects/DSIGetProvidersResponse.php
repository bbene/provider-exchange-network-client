<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetProvidersResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var ArrayOfProvider $Providers
     */
    protected $Providers = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetProvidersResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ArrayOfProvider
     */
    public function getProviders()
    {
      return $this->Providers;
    }

    /**
     * @param ArrayOfProvider $Providers
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetProvidersResponse
     */
    public function setProviders($Providers)
    {
      $this->Providers = $Providers;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetProvidersResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
