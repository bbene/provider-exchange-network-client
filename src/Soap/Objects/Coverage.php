<?php

namespace ProviderExchangeNetwork\Soap\Objects;

use ProviderExchangeNetwork\Soap\Castable;

class Coverage extends Castable
{

    /**
     * @var string $CoverageName
     */
    protected $CoverageName = null;

    /**
     * @var ArrayOfDeductible $Deductibles
     */
    protected $Deductibles = null;

    /**
     * @var string $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var string $ExpirationMiles
     */
    protected $ExpirationMiles = null;

    /**
     * @var Form $Form
     */
    protected $Form = null;

    /**
     * @var Coverage $LimitedWarranty
     */
    protected $LimitedWarranty = null;

    /**
     * @var Market $Market
     */
    protected $Market = null;

    /**
     * @var string $NewUsed
     */
    protected $NewUsed = null;

    /**
     * @var string $ProductType
     */
    protected $ProductType = null;

    /**
     * @var ArrayOfRedemption $Redemptions
     */
    protected $Redemptions = null;

    /**
     * @var ArrayOfSurcharged $Surcharges
     */
    protected $Surcharges = null;

    /**
     * @var string $TermMiles
     */
    protected $TermMiles = null;

    /**
     * @var string $TermMonths
     */
    protected $TermMonths = null;

    /**
     * @return string
     */
    public function getCoverageName()
    {
      return $this->CoverageName;
    }

    /**
     * @param string $CoverageName
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setCoverageName($CoverageName)
    {
      $this->CoverageName = $CoverageName;
      return $this;
    }

    /**
     * @return ArrayOfDeductible
     */
    public function getDeductibles()
    {
      return $this->Deductibles;
    }

    /**
     * @param ArrayOfDeductible $Deductibles
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setDeductibles($Deductibles)
    {
      $this->Deductibles = $Deductibles;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationMiles()
    {
      return $this->ExpirationMiles;
    }

    /**
     * @param string $ExpirationMiles
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setExpirationMiles($ExpirationMiles)
    {
      $this->ExpirationMiles = $ExpirationMiles;
      return $this;
    }

    /**
     * @return Form
     */
    public function getForm()
    {
      return $this->Form;
    }

    /**
     * @param Form $Form
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setForm($Form)
    {
      $this->Form = $Form;
      return $this;
    }

    /**
     * @return Coverage
     */
    public function getLimitedWarranty()
    {
      return $this->LimitedWarranty;
    }

    /**
     * @param Coverage $LimitedWarranty
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setLimitedWarranty($LimitedWarranty)
    {
      $this->LimitedWarranty = $LimitedWarranty;
      return $this;
    }

    /**
     * @return Market
     */
    public function getMarket()
    {
      return $this->Market;
    }

    /**
     * @param Market $Market
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setMarket($Market)
    {
      $this->Market = $Market;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewUsed()
    {
      return $this->NewUsed;
    }

    /**
     * @param string $NewUsed
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setNewUsed($NewUsed)
    {
      $this->NewUsed = $NewUsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param string $ProductType
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return ArrayOfRedemption
     */
    public function getRedemptions()
    {
      return $this->Redemptions;
    }

    /**
     * @param ArrayOfRedemption $Redemptions
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setRedemptions($Redemptions)
    {
      $this->Redemptions = $Redemptions;
      return $this;
    }

    /**
     * @return ArrayOfSurcharged
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param ArrayOfSurcharged $Surcharges
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setSurcharges($Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermMiles()
    {
      return $this->TermMiles;
    }

    /**
     * @param string $TermMiles
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setTermMiles($TermMiles)
    {
      $this->TermMiles = $TermMiles;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermMonths()
    {
      return $this->TermMonths;
    }

    /**
     * @param string $TermMonths
     * @return \ProviderExchangeNetwork\Soap\Objects\Coverage
     */
    public function setTermMonths($TermMonths)
    {
      $this->TermMonths = $TermMonths;
      return $this;
    }

}
