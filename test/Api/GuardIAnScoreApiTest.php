<?php

namespace GuardianScoreSimulacion\Client;

use \GuardianScoreSimulacion\Client\Configuration;
use \GuardianScoreSimulacion\Client\ApiException;
use \GuardianScoreSimulacion\Client\ObjectSerializer;

class GuardIAnScoreApiTest extends \PHPUnit_Framework_TestCase
{
    public function setUp() {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \GuardianScoreSimulacion\Client\Api\GuardIAnScoreApi($client,$config);
    }
    
    public function testCreditreport() {
        $x_api_key = "your_api_key";

        $requestBody = new \GuardianScoreSimulacion\Client\Model\CreditReport();
        $requestBody->setIdFolioConsultaReporte('folio_consulta');
        $requestBody->setFolioOtorgante('folio_otorgante');

        $request = new \GuardianScoreSimulacion\Client\Model\RequestBody();
        $request->setCreditReport($requestBody);

        try {
            $result = $this->apiInstance->creditreport($x_api_key, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling GuardIAnScoreApi->creditreport: ', $e->getMessage(), PHP_EOL;
        }
    }
}
