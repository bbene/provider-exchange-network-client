<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSISetDealerProductResponse
{

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var ArrayOfRatingMethod $RatingMethods
     */
    protected $RatingMethods = null;

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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductResponse
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ArrayOfRatingMethod
     */
    public function getRatingMethods()
    {
      return $this->RatingMethods;
    }

    /**
     * @param ArrayOfRatingMethod $RatingMethods
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductResponse
     */
    public function setRatingMethods($RatingMethods)
    {
      $this->RatingMethods = $RatingMethods;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
