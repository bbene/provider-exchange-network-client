<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetModelsResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var ArrayOfModel $Models
     */
    protected $Models = null;

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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetModelsResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ArrayOfModel
     */
    public function getModels()
    {
      return $this->Models;
    }

    /**
     * @param ArrayOfModel $Models
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetModelsResponse
     */
    public function setModels($Models)
    {
      $this->Models = $Models;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetModelsResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
