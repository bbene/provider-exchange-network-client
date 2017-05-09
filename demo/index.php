<?php
require('/application/vendor/autoload.php');

$GLOBALS['user'] = '';
$GLOBALS['password'] = '';
$GLOBALS['vin'] = '';

function dump($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function pr($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function getProvidersExample() {
    $client = new \ProviderExchangeNetwork\Client($GLOBALS['user'], $GLOBALS['password'], true, true);
    $providers = $client->getProviders();
    /** @var \ProviderExchangeNetwork\Soap\Objects\Provider $provider */
    foreach ($providers as $provider) {
        echo "<li>{$provider->getName()} - ID: {$provider->getProviderID()}";
        $products = $client->getProducts((int)$provider->getProviderID());
        echo "<ul>";
        /** @var \ProviderExchangeNetwork\Soap\Objects\Product $product */
        foreach ($products as $product) {
            echo "<li>{$product->getName()} || {$product->getProductType()} || {$product->getProductID()}</li>";
        }
        echo "</ul></li>";
    }
}

function createDealer() {
    $client = new \ProviderExchangeNetwork\Client($GLOBALS['user'], $GLOBALS['password'], true, true);
    //$dealerID = $client->createDealer('DI Test'); //137464
    $dealerId = $client->updateDealer(137464,'DI Test');
    echo "Dealer Updated: {$dealerId}";
}

function assignProduct() {
    $client = new \ProviderExchangeNetwork\Client($GLOBALS['user'], $GLOBALS['password'], true, true);
    $assignedResult = $client->assignProductToDealer(137464, $client->getGapProductId(27));
    print_r($assignedResult);
}

function getTestRate() {
    $client = new \ProviderExchangeNetwork\Client($GLOBALS['user'], $GLOBALS['password'], true, true);
    $today = new \DateTime();
    $dealInfo = $client->createDealInfo(
        137464,
        $GLOBALS['vin'],
        100,
        'NEW',
        $today,
        $today,
        38009,
        33813,
        true,
        'LOAN',
        2.99,
        34000,
        [72]
    );
    $productInfo = $client->createProductInfoArray($client->getGapProductId(27), 'LT');
    $result = $client->getGapRate($dealInfo, $productInfo, true);
    print_r($result);
}
?>

<html>
    <head><title>Examples</title></head>
    <body>
        <h1>Providers</h1>
        <ul>
            <?php //getProvidersExample(); ?>
        </ul>
        <p>
            <?php //createDealer(); ?>
        </p>
        <p>
            <?php //assignProduct(); ?>
        </p>
        <p>
            <?php //getTestRate(); ?>
        </p>
    </body>
</html>
