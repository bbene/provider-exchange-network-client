<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetLendersResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var ArrayOfLender $Lenders
     */
    protected $Lenders = null;

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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetLendersResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ArrayOfLender
     */
    public function getLenders()
    {
      return $this->Lenders;
    }

    /**
     * @param ArrayOfLender $Lenders
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetLendersResponse
     */
    public function setLenders($Lenders)
    {
      $this->Lenders = $Lenders;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetLendersResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
