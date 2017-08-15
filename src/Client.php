<?php

namespace ProviderExchangeNetwork;

use ProviderExchangeNetwork\Headers\WsseAuthHeader;
use ProviderExchangeNetwork\Soap\Objects\ArrayOfDSIProductInfo;
use ProviderExchangeNetwork\Soap\Objects\Coverage;
use ProviderExchangeNetwork\Soap\Objects\DSIDealInfo;
use ProviderExchangeNetwork\Soap\Objects\DSIGetRatesRequest;
use ProviderExchangeNetwork\Soap\Objects\DSIProductInfo;
use ProviderExchangeNetwork\Soap\Objects\DSISetDealerProductRequest;
use ProviderExchangeNetwork\Soap\Objects\DSISetDealerRequest;
use ProviderExchangeNetwork\Soap\Objects\DSISetDealerResponse;
use ProviderExchangeNetwork\Soap\Objects\GetProducts;
use ProviderExchangeNetwork\Soap\Objects\GetProviders;
use ProviderExchangeNetwork\Soap\Objects\GetRates;
use ProviderExchangeNetwork\Soap\Objects\Product;
use ProviderExchangeNetwork\Soap\Objects\Provider;
use ProviderExchangeNetwork\Soap\Objects\RegistrationAction;
use ProviderExchangeNetwork\Soap\Objects\SetDealer;
use ProviderExchangeNetwork\Soap\Objects\SetDealerProduct;
use ProviderExchangeNetwork\Soap\Objects\TimeZone;
use Psr\Log\InvalidArgumentException;
use SoapClient;

class Client
{
    private $user;
    private $password;
    private $isQa;
    private $debug;
    private $defaultSoapOptions = [
        'soap_version' => SOAP_1_1,
        'trace' => true,
        'keep_alive' => false,
        'cache_wsdl' => WSDL_CACHE_NONE
    ];

    const REGISTER_NEW = 0;

    /**
     * Client constructor.
     * @param $user
     * @param $password
     * @param bool $isQa
     * @param bool $debug
     */
    public function __construct($user, $password, $isQa = false, $debug = false)
    {
        $this->user = $user;
        $this->password = $password;
        $this->isQa = $isQa;
        $this->debug = $debug;
    }

    /**
     * @param array $options
     * @return SoapClient
     */
    protected function getClient($options = [])
    {
        $wsdl = $this->isQa
          ? 'https://servicesv3.qa.provexchnet.com/DSIRating.svc?wsdl'
          : 'https://servicesv3.provexchnet.com/DSIRating.svc?wsdl'
        ;
        $client = new SoapClient($wsdl, array_merge($this->defaultSoapOptions, $options));
        return $client;
    }

    /**
     * @param $function
     * @param object $params
     * @return mixed
     */
    protected function makeApiRequest($function, $params)
    {
        $client = $this->getClient();
        $wsseHeader = new WsseAuthHeader($this->user, $this->password);
        $client->__setSoapHeaders([$wsseHeader]);
        $bindingLocation = $this->isQa
          ? 'https://servicesv3.qa.provexchnet.com/DSIRating.svc/Basic'
          : 'https://servicesv3.provexchnet.com/DSIRating.svc/Basic'
        ;
        $client->__setLocation($bindingLocation);

        try {
            $request = $client->$function($params);
        } catch (\Exception $e) {
            $this->debugMessage($e);
            $request = false;
        }

        $this->debugMessage($client->__getLastRequest());
        $this->debugMessage($client->__getLastResponse());
        return $request;
    }

    /**
     * Get the list of all possible providers for the logged in account.
     * @return bool|Provider[]
     */
    public function getProviders()
    {
        $providers = $this->makeApiRequest('GetProviders', new GetProviders())->GetProvidersResult->Providers;
        if(!$providers) {
            return false;
        }
        return $this->serializeObjectArray($providers, Provider::class);
    }

    /**
     * Get the list of products available for a provider.
     * @param $providerID
     * @return bool|Product[]
     */
    public function getProducts($providerID)
    {
        $params = new GetProducts($providerID);
        $request = $this->makeApiRequest('GetProducts', $params);
        if(!$request) {
            return false;
        }
        $products = $request->GetProductsResult->Products->Product;
        if(is_array($products)) {
            return $this->serializeObjectArray($products, Product::class);
        } else {
            return $this->serializeObject($products, Product::class);
        }

    }

    /**
     * Get the GAP product ID for a given provider ID.
     * @param $providerID
     * @return bool|int
     */
    public function getGapProductId($providerID)
    {
        $products = $this->getProducts($providerID);
        if(!$products || count($products) === 0) {
            return false;
        }
        if(is_array($products)) {
            /** @var Product $product */
            foreach ($products as $product) {
                if ($product->ProductType === "GAP") {
                    return $product->ProductID;
                }
            }
        } else {
            /** @var Product $products */
            if ($products->getProductType() === "GAP") {
                return $products->getProductID();
            }
        }
        return false;
    }

    /**
     * Create a dealer in the PEN system.  The new dealer's ID will be returned and needs
     * to be saved in the app using it.
     * @param $name
     * @param string $timezone
     * @param bool $isTestDealer
     * @return int|bool
     */
    public function createDealer($name, $timezone = TimeZone::Central, $isTestDealer = false)
    {
        return $this->callSetDealer(self::REGISTER_NEW, $name, $timezone, $isTestDealer);
    }

    /**
     * Update a dealer in the PEN system.
     * @param $dealerID
     * @param $name
     * @param string $timezone
     * @param bool $isTestDealer
     * @return int|bool
     */
    public function updateDealer($dealerID, $name, $timezone = TimeZone::Central, $isTestDealer = false)
    {
        return $this->callSetDealer($dealerID, $name, $timezone, $isTestDealer);
    }

    /**
     * @param $dealerID
     * @param $name
     * @param string $timezone
     * @param bool $isTestDealer
     * @return int|bool
     */
    private function callSetDealer($dealerID, $name, $timezone = TimeZone::Central, $isTestDealer = false)
    {
        $dealer = new DSISetDealerRequest();
        if($dealerID === 0) {
            $dealer->setAction(RegistrationAction::REGISTER);
        } else {
            $dealer->setAction(RegistrationAction::UPDATE);
        }
        $dealer->setDealershipName($name);
        $dealer->setDealerID($dealerID);
        $dealer->setTimeZone($timezone);
        $dealer->setIsTestDealer($isTestDealer);

        $request = new SetDealer($dealer);

        $response = $this->makeApiRequest('SetDealer', $request);
        if(!$response) {
            return false;
        }
        /** @var DSISetDealerResponse $dealerResponse */
        $dealerResponse = $this->serializeObject($response->SetDealerResult, DSISetDealerResponse::class);
        return $dealerResponse->getDealerID();
    }


    /**
     * Assign a product to a dealer.  A dealer can't get rates for a product until it is assigned.
     * @param $dealerID
     * @param $productID
     * @param string $dealerCode
     * @return bool
     */
    public function assignProductToDealer($dealerID, $productID, $dealerCode = '01550')
    {
        $requestObject = new DSISetDealerProductRequest();
        $requestObject->setAction(RegistrationAction::REGISTER);
        $requestObject->setDealerID($dealerID);
        $requestObject->setProductID($productID);
        $requestObject->setProviderDealerCode($dealerCode);
        $request = new SetDealerProduct($requestObject);

        $response = $this->makeApiRequest('SetDealerProduct', $request);
        if(!$response) {
            return false;
        }
        return (bool)$response->SetDealerProductResult->Success;
    }

    /**
     * Create a DSIDealInfo object for getting rates.
     * @param int $dealerId
     * @param string $vin
     * @param int $mileage
     * @param string {"NEW", "USED", "USEDWITHFACTORY", "CERTIFIEDPREOWNED"} $carStatus
     * @param \DateTime $effectiveDate
     * @param \DateTime $inServiceDate
     * @param double $msrp
     * @param double $purchasePrice
     * @param bool $isNewVehicle
     * @param string {"LOAN", "LEASE", "CASH", "BALLOON"} $dealType
     * @param double $apr
     * @param double $financedAmount
     * @param int[] $financeMonths Max of two.
     * @param int[] $financeMiles Max of two, and applies to lease.
     * @param string {"ENGLISH", "SPANISH", "FRENCH"} $language
     * @param string {"FI_MANAGER", "SERVICE_DRIVE"} $userRole
     * @return DSIDealInfo
     */
    public function createDealInfo(
        $dealerId,
        $vin,
        $mileage,
        $carStatus,
        \DateTime $effectiveDate,
        \DateTime $inServiceDate,
        $msrp,
        $purchasePrice,
        $isNewVehicle,
        $dealType,
        $apr,
        $financedAmount,
        $financeMonths = [],
        $financeMiles = [],
        $language = 'ENGLISH',
        $userRole = 'FI_MANAGER'
    ) {
        $obj = new DSIDealInfo();
        $obj->setDealerID($dealerId);
        $obj->setVIN($vin);
        // JM&A doesn't seem to like a 0 mileage, so we put 1 mile on a 0 mile car.
        if($mileage === 0) {
            $mileage = 1;
        }
        $obj->setMileage($mileage);

        if(!in_array($carStatus, ["NEW", "USED", "USEDWITHFACTORY", "CERTIFIEDPREOWNED"])) {
            throw new InvalidArgumentException("Invalid status: {$carStatus}");
        }
        $obj->setCarStatus($carStatus);

        $obj->setEffectiveDate($effectiveDate->format('m-d-Y'));
        $obj->setInServiceDate($inServiceDate->format('m-d-Y'));
        $obj->setVehicleMSRP($msrp);
        $obj->setVehiclePurchasePrice($purchasePrice);
        $obj->setFirstOwner($isNewVehicle);

        if(!in_array($dealType, ["LOAN", "LEASE", "CASH", "BALLOON"])) {
            throw new InvalidArgumentException("Invalid deal type: {$dealType}");
        }
        $obj->setDealType($dealType);

        $obj->setFinanceTerms($financeMonths);
        $obj->setFinanceTermsMileage($financeMiles);
        $obj->setAPR($apr);
        $obj->setFinancedAmount($financedAmount);

        if(!in_array($language, ["ENGLISH", "SPANISH", "FRENCH"])) {
            throw new InvalidArgumentException("Invalid language: {$language}");
        }
        $obj->setLanguage($language);

        if(!in_array($userRole, ["FI_MANAGER", "SERVICE_DRIVE"])) {
            throw new InvalidArgumentException("Invalid user role: {$userRole}");
        }
        $obj->setUserRole($userRole);

        return $obj;
    }

    /**
     * Creates an ArrayOfDSIProductInfo object.
     * @param $productID
     * @param string $vehicleTrim
     * @return ArrayOfDSIProductInfo
     */
    public function createProductInfoArray($productID, $vehicleTrim = '')
    {
        $info = new DSIProductInfo();
        $info->setProductID($productID);
        $info->setIncludeWrapRates(true);
        $info->setVehicleTrim($vehicleTrim);

        $obj = new ArrayOfDSIProductInfo();
        $obj->setDSIProductInfo([$info]);
        return $obj;
    }

    /**
     * Get the list of possible coverage for the given dealInfo and ArrayOfDSIProductInfo
     * @param DSIDealInfo $dealInfo
     * @param ArrayOfDSIProductInfo $productInfo
     * @param bool $isTest
     * @return Coverage[]
     */
    public function getGapRate(DSIDealInfo $dealInfo, ArrayOfDSIProductInfo $productInfo, $isTest = false)
    {

        $request = new DSIGetRatesRequest();
        $request->setDealInfo($dealInfo);
        $request->setProducts($productInfo);
        $request->setTestRequest($isTest);
        $requestObj = new GetRates($request);

        $response = $this->makeApiRequest('GetRates', $requestObj);
        if(!isset($response->GetRatesResult->Rates->Rate->Coverages->Coverage)) {
            return [];
        }
        $coverages = $this->serializeObjectArray($response->GetRatesResult->Rates->Rate->Coverages->Coverage, Coverage::class);
        return $coverages;
    }

    /**
     * @param $objects
     * @param $class
     * @return array
     */
    private function serializeObjectArray($objects, $class)
    {
        $collection = [];
        foreach ($objects as $object) {
            $collection[] = new $class($object);
        }
        return $collection;
    }

    /**
     * @param $object
     * @param $class
     * @return mixed
     */
    private function serializeObject($object, $class)
    {
        return new $class($object);
    }

    private function debugMessage($obj)
    {
        if($this->debug) {
            print_r($obj);
        }
    }
}