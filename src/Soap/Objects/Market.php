<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Market
{

    /**
     * @var string $BrochureUrl
     */
    protected $BrochureUrl = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $VideoUrl
     */
    protected $VideoUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBrochureUrl()
    {
      return $this->BrochureUrl;
    }

    /**
     * @param string $BrochureUrl
     * @return \ProviderExchangeNetwork\Soap\Objects\Market
     */
    public function setBrochureUrl($BrochureUrl)
    {
      $this->BrochureUrl = $BrochureUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \ProviderExchangeNetwork\Soap\Objects\Market
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl()
    {
      return $this->VideoUrl;
    }

    /**
     * @param string $VideoUrl
     * @return \ProviderExchangeNetwork\Soap\Objects\Market
     */
    public function setVideoUrl($VideoUrl)
    {
      $this->VideoUrl = $VideoUrl;
      return $this;
    }

}
