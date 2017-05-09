<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetDealerProductsResponse
{

    /**
     * @var ArrayOfDealerProduct $DealerProducts
     */
    protected $DealerProducts = null;

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
     * @return ArrayOfDealerProduct
     */
    public function getDealerProducts()
    {
      return $this->DealerProducts;
    }

    /**
     * @param ArrayOfDealerProduct $DealerProducts
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetDealerProductsResponse
     */
    public function setDealerProducts($DealerProducts)
    {
      $this->DealerProducts = $DealerProducts;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetDealerProductsResponse
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetDealerProductsResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
