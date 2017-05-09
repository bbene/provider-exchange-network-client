<?php
require('/application/vendor/autoload.php');

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://servicesv3.qa.provexchnet.com/DSIRating.svc?wsdl',
        'outputDir' => '/application/src/Soap/Objects',
        'namespaceName' => 'ProviderExchangeNetwork\\Soap\\Objects'
    ))
);