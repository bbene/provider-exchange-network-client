<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetBatchRatesResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var ArrayOfLevel $Levels
     */
    protected $Levels = null;

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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetBatchRatesResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ArrayOfLevel
     */
    public function getLevels()
    {
      return $this->Levels;
    }

    /**
     * @param ArrayOfLevel $Levels
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetBatchRatesResponse
     */
    public function setLevels($Levels)
    {
      $this->Levels = $Levels;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetBatchRatesResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
