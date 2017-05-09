<?php

namespace ProviderExchangeNetwork\Soap\Objects;

class DSIRating extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfRatingMethod' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfRatingMethod',
      'ArrayOfint' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfint',
      'DSISetDealerRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSISetDealerRequest',
      'DSISetDealerResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSISetDealerResponse',
      'Error' => 'ProviderExchangeNetwork\\Soap\\Objects\\Error',
      'DSISetDealerProductRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSISetDealerProductRequest',
      'DSISetDealerProductResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSISetDealerProductResponse',
      'DSIGetProvidersResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetProvidersResponse',
      'ArrayOfProvider' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfProvider',
      'Provider' => 'ProviderExchangeNetwork\\Soap\\Objects\\Provider',
      'DSIGetProductsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetProductsResponse',
      'ArrayOfProduct' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfProduct',
      'Product' => 'ProviderExchangeNetwork\\Soap\\Objects\\Product',
      'DSIGetLendersRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetLendersRequest',
      'DSIGetLendersResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetLendersResponse',
      'ArrayOfLender' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfLender',
      'Lender' => 'ProviderExchangeNetwork\\Soap\\Objects\\Lender',
      'DSIGetRateBookCodesRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetRateBookCodesRequest',
      'DSIGetRateBookCodesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetRateBookCodesResponse',
      'ArrayOfRateBookCode' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfRateBookCode',
      'RateBookCode' => 'ProviderExchangeNetwork\\Soap\\Objects\\RateBookCode',
      'DSIGetModelsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetModelsResponse',
      'ArrayOfModel' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfModel',
      'Model' => 'ProviderExchangeNetwork\\Soap\\Objects\\Model',
      'DSIGetSurchargesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetSurchargesResponse',
      'ArrayOfSurcharge' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfSurcharge',
      'Surcharge' => 'ProviderExchangeNetwork\\Soap\\Objects\\Surcharge',
      'DSIGetRatesRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetRatesRequest',
      'DSIDealInfo' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIDealInfo',
      'ArrayOfDSIProductInfo' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfDSIProductInfo',
      'DSIProductInfo' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIProductInfo',
      'ArrayOfDSISurcharge' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfDSISurcharge',
      'DSISurcharge' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSISurcharge',
      'DSIGetRatesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetRatesResponse',
      'ArrayOfRate' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfRate',
      'Rate' => 'ProviderExchangeNetwork\\Soap\\Objects\\Rate',
      'ArrayOfCoverage' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfCoverage',
      'Coverage' => 'ProviderExchangeNetwork\\Soap\\Objects\\Coverage',
      'ArrayOfDeductible' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfDeductible',
      'Deductible' => 'ProviderExchangeNetwork\\Soap\\Objects\\Deductible',
      'Form' => 'ProviderExchangeNetwork\\Soap\\Objects\\Form',
      'Market' => 'ProviderExchangeNetwork\\Soap\\Objects\\Market',
      'ArrayOfRedemption' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfRedemption',
      'Redemption' => 'ProviderExchangeNetwork\\Soap\\Objects\\Redemption',
      'ArrayOfSurcharged' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfSurcharged',
      'Surcharged' => 'ProviderExchangeNetwork\\Soap\\Objects\\Surcharged',
      'Vehicle' => 'ProviderExchangeNetwork\\Soap\\Objects\\Vehicle',
      'DSIGetQuoteRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetQuoteRequest',
      'DSICoverageInfo' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSICoverageInfo',
      'DSIGetQuoteResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetQuoteResponse',
      'Quote' => 'ProviderExchangeNetwork\\Soap\\Objects\\Quote',
      'DSIGetBatchRatesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetBatchRatesResponse',
      'ArrayOfLevel' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfLevel',
      'Level' => 'ProviderExchangeNetwork\\Soap\\Objects\\Level',
      'DSIGetDealersResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetDealersResponse',
      'ArrayOfDealer' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfDealer',
      'Dealer' => 'ProviderExchangeNetwork\\Soap\\Objects\\Dealer',
      'DSIGetDealerProductsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetDealerProductsResponse',
      'ArrayOfDealerProduct' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfDealerProduct',
      'DealerProduct' => 'ProviderExchangeNetwork\\Soap\\Objects\\DealerProduct',
      'DSIGetAnnouncementRequest' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetAnnouncementRequest',
      'DSIGetAnnouncementResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\DSIGetAnnouncementResponse',
      'ArrayOfAnnouncement' => 'ProviderExchangeNetwork\\Soap\\Objects\\ArrayOfAnnouncement',
      'Announcement' => 'ProviderExchangeNetwork\\Soap\\Objects\\Announcement',
      'SetDealer' => 'ProviderExchangeNetwork\\Soap\\Objects\\SetDealer',
      'SetDealerResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\SetDealerResponse',
      'SetDealerProduct' => 'ProviderExchangeNetwork\\Soap\\Objects\\SetDealerProduct',
      'SetDealerProductResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\SetDealerProductResponse',
      'GetProviders' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetProviders',
      'GetProvidersResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetProvidersResponse',
      'GetProducts' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetProducts',
      'GetProductsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetProductsResponse',
      'GetLenders' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetLenders',
      'GetLendersResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetLendersResponse',
      'GetRateBookCodes' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetRateBookCodes',
      'GetRateBookCodesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetRateBookCodesResponse',
      'GetModels' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetModels',
      'GetModelsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetModelsResponse',
      'GetSurcharges' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetSurcharges',
      'GetSurchargesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetSurchargesResponse',
      'GetRates' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetRates',
      'GetRatesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetRatesResponse',
      'GetQuote' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetQuote',
      'GetQuoteResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetQuoteResponse',
      'GetBatchRates' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetBatchRates',
      'GetBatchRatesResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetBatchRatesResponse',
      'GetDealers' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetDealers',
      'GetDealersResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetDealersResponse',
      'GetDealerProducts' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetDealerProducts',
      'GetDealerProductsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetDealerProductsResponse',
      'GetAnnouncements' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetAnnouncements',
      'GetAnnouncementsResponse' => 'ProviderExchangeNetwork\\Soap\\Objects\\GetAnnouncementsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://servicesv3.qa.provexchnet.com/DSIRating.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SetDealer $parameters
     * @return SetDealerResponse
     */
    public function SetDealer(SetDealer $parameters)
    {
      return $this->__soapCall('SetDealer', array($parameters));
    }

    /**
     * @param SetDealerProduct $parameters
     * @return SetDealerProductResponse
     */
    public function SetDealerProduct(SetDealerProduct $parameters)
    {
      return $this->__soapCall('SetDealerProduct', array($parameters));
    }

    /**
     * @param GetProviders $parameters
     * @return GetProvidersResponse
     */
    public function GetProviders(GetProviders $parameters)
    {
      return $this->__soapCall('GetProviders', array($parameters));
    }

    /**
     * @param GetProducts $parameters
     * @return GetProductsResponse
     */
    public function GetProducts(GetProducts $parameters)
    {
      return $this->__soapCall('GetProducts', array($parameters));
    }

    /**
     * @param GetLenders $parameters
     * @return GetLendersResponse
     */
    public function GetLenders(GetLenders $parameters)
    {
      return $this->__soapCall('GetLenders', array($parameters));
    }

    /**
     * @param GetRateBookCodes $parameters
     * @return GetRateBookCodesResponse
     */
    public function GetRateBookCodes(GetRateBookCodes $parameters)
    {
      return $this->__soapCall('GetRateBookCodes', array($parameters));
    }

    /**
     * @param GetModels $parameters
     * @return GetModelsResponse
     */
    public function GetModels(GetModels $parameters)
    {
      return $this->__soapCall('GetModels', array($parameters));
    }

    /**
     * @param GetSurcharges $parameters
     * @return GetSurchargesResponse
     */
    public function GetSurcharges(GetSurcharges $parameters)
    {
      return $this->__soapCall('GetSurcharges', array($parameters));
    }

    /**
     * @param GetRates $parameters
     * @return GetRatesResponse
     */
    public function GetRates(GetRates $parameters)
    {
      return $this->__soapCall('GetRates', array($parameters));
    }

    /**
     * @param GetQuote $parameters
     * @return GetQuoteResponse
     */
    public function GetQuote(GetQuote $parameters)
    {
      return $this->__soapCall('GetQuote', array($parameters));
    }

    /**
     * @param GetBatchRates $parameters
     * @return GetBatchRatesResponse
     */
    public function GetBatchRates(GetBatchRates $parameters)
    {
      return $this->__soapCall('GetBatchRates', array($parameters));
    }

    /**
     * @param GetDealers $parameters
     * @return GetDealersResponse
     */
    public function GetDealers(GetDealers $parameters)
    {
      return $this->__soapCall('GetDealers', array($parameters));
    }

    /**
     * @param GetDealerProducts $parameters
     * @return GetDealerProductsResponse
     */
    public function GetDealerProducts(GetDealerProducts $parameters)
    {
      return $this->__soapCall('GetDealerProducts', array($parameters));
    }

    /**
     * @param GetAnnouncements $parameters
     * @return GetAnnouncementsResponse
     */
    public function GetAnnouncements(GetAnnouncements $parameters)
    {
      return $this->__soapCall('GetAnnouncements', array($parameters));
    }

}
