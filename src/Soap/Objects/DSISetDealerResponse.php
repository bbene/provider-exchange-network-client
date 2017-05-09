<?php

namespace ProviderExchangeNetwork\Soap\Objects;

use ProviderExchangeNetwork\Soap\Castable;

class DSISetDealerResponse extends Castable
{

    /**
     * @var int $DealerID
     */
    protected $DealerID = null;

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @return int
     */
    public function getDealerID()
    {
      return $this->DealerID;
    }

    /**
     * @param int $DealerID
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerResponse
     */
    public function setDealerID($DealerID)
    {
      $this->DealerID = $DealerID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerResponse
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
