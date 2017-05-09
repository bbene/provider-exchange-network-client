<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetAnnouncementsResponse
{

    /**
     * @var DSIGetAnnouncementResponse $GetAnnouncementsResult
     */
    protected $GetAnnouncementsResult = null;

    /**
     * @param DSIGetAnnouncementResponse $GetAnnouncementsResult
     */
    public function __construct($GetAnnouncementsResult)
    {
      $this->GetAnnouncementsResult = $GetAnnouncementsResult;
    }

    /**
     * @return DSIGetAnnouncementResponse
     */
    public function getGetAnnouncementsResult()
    {
      return $this->GetAnnouncementsResult;
    }

    /**
     * @param DSIGetAnnouncementResponse $GetAnnouncementsResult
     * @return \ProviderExchangeNetwork\Soap\Objects\GetAnnouncementsResponse
     */
    public function setGetAnnouncementsResult($GetAnnouncementsResult)
    {
      $this->GetAnnouncementsResult = $GetAnnouncementsResult;
      return $this;
    }

}
