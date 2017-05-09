<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetRateBookCodesResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var ArrayOfRateBookCode $RateBookCodes
     */
    protected $RateBookCodes = null;

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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRateBookCodesResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ArrayOfRateBookCode
     */
    public function getRateBookCodes()
    {
      return $this->RateBookCodes;
    }

    /**
     * @param ArrayOfRateBookCode $RateBookCodes
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRateBookCodesResponse
     */
    public function setRateBookCodes($RateBookCodes)
    {
      $this->RateBookCodes = $RateBookCodes;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetRateBookCodesResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
