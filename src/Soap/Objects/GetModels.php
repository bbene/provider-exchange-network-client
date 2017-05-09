<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetModels
{

    /**
     * @var int $productID
     */
    protected $productID = null;

    /**
     * @param int $productID
     */
    public function __construct($productID)
    {
      $this->productID = $productID;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
      return $this->productID;
    }

    /**
     * @param int $productID
     * @return \ProviderExchangeNetwork\Soap\Objects\GetModels
     */
    public function setProductID($productID)
    {
      $this->productID = $productID;
      return $this;
    }

}
