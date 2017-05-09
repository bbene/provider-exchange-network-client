<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIGetAnnouncementResponse
{

    /**
     * @var ArrayOfAnnouncement $Announcements
     */
    protected $Announcements = null;

    /**
     * @var Error $Error
     */
    protected $Error = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAnnouncement
     */
    public function getAnnouncements()
    {
      return $this->Announcements;
    }

    /**
     * @param ArrayOfAnnouncement $Announcements
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetAnnouncementResponse
     */
    public function setAnnouncements($Announcements)
    {
      $this->Announcements = $Announcements;
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetAnnouncementResponse
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
     * @return \ProviderExchangeNetwork\Soap\Objects\DSIGetAnnouncementResponse
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}
