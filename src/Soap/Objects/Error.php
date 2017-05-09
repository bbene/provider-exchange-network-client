<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Error
{

    /**
     * @var int $DSILogId
     */
    protected $DSILogId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDSILogId()
    {
      return $this->DSILogId;
    }

    /**
     * @param int $DSILogId
     * @return \ProviderExchangeNetwork\Soap\Objects\Error
     */
    public function setDSILogId($DSILogId)
    {
      $this->DSILogId = $DSILogId;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\Error
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \ProviderExchangeNetwork\Soap\Objects\Error
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

}
