<?php

namespace AdapterAPI\Domain\Adapter\ValueObject;

use AdapterAPI\Domain\Adapter\Exception\EmptyApiClient;

class ApiSecretClient
{
    /* @var string */
    private $api;


    /**
     * ApiKeyClient constructor.
     * @param string $api
     * @throws EmptyApiClient
     */
    public function __construct(string $api)
    {
        $this->guardApiIsNotEmpty($api);
        $this->api = $api;
    }

    public function getValue()
    {
        return $this->api;
    }

    /**
     * @param $api
     * @throws EmptyApiClient
     */
    public function guardApiIsNotEmpty($api)
    {
        if(empty($api)){
            throw new EmptyApiClient();
        }
    }
}