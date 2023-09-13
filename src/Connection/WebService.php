<?php

namespace InnovationLatam\SoapTotvs\Connection;

use Laminas\Soap\Client;

class WebService
{
    /**
     * @param string $path
     * @return Client
     */

    public function getClient(string $path) : Client
    {
        try {

            $connection = new Client(config('soap-totvs.host') . $path, [
                'login'                 =>          config('soap-totvs.user'),
                'password'              =>          config('soap-totvs.pass'),
                'soap_version'          =>          SOAP_1_1,
                'cache_wsdl'            =>          WSDL_CACHE_NONE,
                'keep_alive'            =>          false,
                'connection_timeout'    =>          500000
            ]);

        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }

        return $connection;
    }

}
