<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class GetAnnouncements
{

    /**
     * @var DSIGetAnnouncementRequest $request
     */
    protected $request = null;

    /**
     * @param DSIGetAnnouncementRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DSIGetAnnouncementRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DSIGetAnnouncementRequest $request
     * @return \ProviderExchangeNetwork\Soap\Objects\GetAnnouncements
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
