<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetAnnouncementRequest
{

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
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param int $ProductID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetAnnouncementRequest
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

}
