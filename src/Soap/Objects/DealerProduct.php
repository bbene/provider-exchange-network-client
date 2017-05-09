<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DealerProduct
{

    /**
     * @var string $ContractPrefix
     */
    protected $ContractPrefix = null;

    /**
     * @var int $DealerID
     */
    protected $DealerID = null;

    /**
     * @var int $DealerProductID
     */
    protected $DealerProductID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $ProviderDealerCode
     */
    protected $ProviderDealerCode = null;

    /**
     * @var string $ProviderDealerProductCode
     */
    protected $ProviderDealerProductCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getContractPrefix()
    {
      return $this->ContractPrefix;
    }

    /**
     * @param string $ContractPrefix
     * @return \ProviderExchangeNetwork\Soap\Objects\DealerProduct
     */
    public function setContractPrefix($ContractPrefix)
    {
      $this->ContractPrefix = $ContractPrefix;
      return $this;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DealerProduct
     */
    public function setDealerID($DealerID)
    {
      $this->DealerID = $DealerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealerProductID()
    {
      return $this->DealerProductID;
    }

    /**
     * @param int $DealerProductID
     * @return \ProviderExchangeNetwork\Soap\Objects\DealerProduct
     */
    public function setDealerProductID($DealerProductID)
    {
      $this->DealerProductID = $DealerProductID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DealerProduct
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDealerCode()
    {
      return $this->ProviderDealerCode;
    }

    /**
     * @param string $ProviderDealerCode
     * @return \ProviderExchangeNetwork\Soap\Objects\DealerProduct
     */
    public function setProviderDealerCode($ProviderDealerCode)
    {
      $this->ProviderDealerCode = $ProviderDealerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDealerProductCode()
    {
      return $this->ProviderDealerProductCode;
    }

    /**
     * @param string $ProviderDealerProductCode
     * @return \ProviderExchangeNetwork\Soap\Objects\DealerProduct
     */
    public function setProviderDealerProductCode($ProviderDealerProductCode)
    {
      $this->ProviderDealerProductCode = $ProviderDealerProductCode;
      return $this;
    }

}
