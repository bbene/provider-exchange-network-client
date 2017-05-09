<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class Announcement
{

    /**
     * @var string $AnnouncementText
     */
    protected $AnnouncementText = null;

    /**
     * @var AnnouncementType $AnnouncementType
     */
    protected $AnnouncementType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAnnouncementText()
    {
      return $this->AnnouncementText;
    }

    /**
     * @param string $AnnouncementText
     * @return \ProviderExchangeNetwork\Soap\Objects\Announcement
     */
    public function setAnnouncementText($AnnouncementText)
    {
      $this->AnnouncementText = $AnnouncementText;
      return $this;
    }

    /**
     * @return AnnouncementType
     */
    public function getAnnouncementType()
    {
      return $this->AnnouncementType;
    }

    /**
     * @param AnnouncementType $AnnouncementType
     * @return \ProviderExchangeNetwork\Soap\Objects\Announcement
     */
    public function setAnnouncementType($AnnouncementType)
    {
      $this->AnnouncementType = $AnnouncementType;
      return $this;
    }

}
