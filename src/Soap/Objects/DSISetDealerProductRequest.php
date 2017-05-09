<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSISetDealerProductRequest
{

    /**
     * @var RegistrationAction $Action
     */
    protected $Action = null;

    /**
     * @var string $ContractPrefixOverride
     */
    protected $ContractPrefixOverride = null;

    /**
     * @var int $DealerID
     */
    protected $DealerID = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $ProviderDealerCode
     */
    protected $ProviderDealerCode = null;

    /**
     * @var string $ProviderProductCode
     */
    protected $ProviderProductCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RegistrationAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param string|RegistrationAction $Action
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getContractPrefixOverride()
    {
      return $this->ContractPrefixOverride;
    }

    /**
     * @param string $ContractPrefixOverride
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest
     */
    public function setContractPrefixOverride($ContractPrefixOverride)
    {
      $this->ContractPrefixOverride = $ContractPrefixOverride;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest
     */
    public function setProviderDealerCode($ProviderDealerCode)
    {
      $this->ProviderDealerCode = $ProviderDealerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderProductCode()
    {
      return $this->ProviderProductCode;
    }

    /**
     * @param string $ProviderProductCode
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest
     */
    public function setProviderProductCode($ProviderProductCode)
    {
      $this->ProviderProductCode = $ProviderProductCode;
      return $this;
    }

}
