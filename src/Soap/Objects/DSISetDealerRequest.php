<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSISetDealerRequest
{

    /**
     * @var string $Action
     */
    protected $Action = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var int $DealerID
     */
    protected $DealerID = null;

    /**
     * @var string $DealershipName
     */
    protected $DealershipName = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var boolean $IsTestDealer
     */
    protected $IsTestDealer = null;

    /**
     * @var boolean $ObservesDayLightSaving
     */
    protected $ObservesDayLightSaving = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var TimeZone $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @var string $WebSite
     */
    protected $WebSite = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param string $Action
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
      return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setContactName($ContactName)
    {
      $this->ContactName = $ContactName;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setDealerID($DealerID)
    {
      $this->DealerID = $DealerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDealershipName()
    {
      return $this->DealershipName;
    }

    /**
     * @param string $DealershipName
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setDealershipName($DealershipName)
    {
      $this->DealershipName = $DealershipName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTestDealer()
    {
      return $this->IsTestDealer;
    }

    /**
     * @param boolean $IsTestDealer
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setIsTestDealer($IsTestDealer)
    {
      $this->IsTestDealer = $IsTestDealer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getObservesDayLightSaving()
    {
      return $this->ObservesDayLightSaving;
    }

    /**
     * @param boolean $ObservesDayLightSaving
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setObservesDayLightSaving($ObservesDayLightSaving)
    {
      $this->ObservesDayLightSaving = $ObservesDayLightSaving;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return TimeZone
     */
    public function getTimeZone()
    {
      return $this->TimeZone;
    }

    /**
     * @param string|TimeZone $TimeZone
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setTimeZone($TimeZone)
    {
      $this->TimeZone = $TimeZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebSite()
    {
      return $this->WebSite;
    }

    /**
     * @param string $WebSite
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setWebSite($WebSite)
    {
      $this->WebSite = $WebSite;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest
     */
    public function setZipCode($ZipCode)
    {
      $this->ZipCode = $ZipCode;
      return $this;
    }

}
