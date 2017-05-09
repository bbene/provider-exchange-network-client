<?php

namespace ProviderExchangeNetwork\Soap\Objects;

use ProviderExchangeNetwork\Soap\Castable;

class Product extends Castable
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $ProductType
     */
    protected $ProductType = null;

    /**
     * @var string $ProviderDealerCodeFormat
     */
    protected $ProviderDealerCodeFormat = null;

    /**
     * @var string $ProviderDealerCodeName
     */
    protected $ProviderDealerCodeName = null;

    /**
     * @var int $ProviderID
     */
    protected $ProviderID = null;

    /**
     * @var ArrayOfRatingMethod $RatingMethods
     */
    protected $RatingMethods = null;

    /**
     * @var string $RegExpValidator
     */
    protected $RegExpValidator = null;

    /**
     * @var string $ValidatorPrompt
     */
    protected $ValidatorPrompt = null;

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDealerCodeFormat()
    {
      return $this->ProviderDealerCodeFormat;
    }

    /**
     * @param string $ProviderDealerCodeFormat
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setProviderDealerCodeFormat($ProviderDealerCodeFormat)
    {
      $this->ProviderDealerCodeFormat = $ProviderDealerCodeFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDealerCodeName()
    {
      return $this->ProviderDealerCodeName;
    }

    /**
     * @param string $ProviderDealerCodeName
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setProviderDealerCodeName($ProviderDealerCodeName)
    {
      $this->ProviderDealerCodeName = $ProviderDealerCodeName;
      return $this;
    }

    /**
     * @return int
     */
    public function getProviderID()
    {
      return $this->ProviderID;
    }

    /**
     * @param int $ProviderID
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setProviderID($ProviderID)
    {
      $this->ProviderID = $ProviderID;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setRatingMethods($RatingMethods)
    {
      $this->RatingMethods = $RatingMethods;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegExpValidator()
    {
      return $this->RegExpValidator;
    }

    /**
     * @param string $RegExpValidator
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setRegExpValidator($RegExpValidator)
    {
      $this->RegExpValidator = $RegExpValidator;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidatorPrompt()
    {
      return $this->ValidatorPrompt;
    }

    /**
     * @param string $ValidatorPrompt
     * @return \ProviderExchangeNetwork\Soap\Objects\Product
     */
    public function setValidatorPrompt($ValidatorPrompt)
    {
      $this->ValidatorPrompt = $ValidatorPrompt;
      return $this;
    }

}
