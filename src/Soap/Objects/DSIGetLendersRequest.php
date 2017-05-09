<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetLendersRequest
{

    /**
     * @var int $DealerID
     */
    protected $DealerID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDealerID()
    {
      return $this->DealerID;
    }

    /**
     * @param int $DealerID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetLendersRequest
     */
    public function setDealerID($DealerID)
    {
      $this->DealerID = $DealerID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetLendersRequest
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

}
