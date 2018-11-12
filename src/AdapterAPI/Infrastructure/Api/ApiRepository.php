<?php

namespace AdapterAPI\Infrastructure\Api;

use Curl\Curl;

class ApiRepository
{
    private $curl;


    public function __construct()
    {
        $this->curl = new Curl();
    }

    public function getAuthorizationBearer(string $token, array $fields, string $url)
    {
        $this->curl->setHeader('Authorization', 'Bearer ' . $token);
        $this->curl->setHeader('Content-Type', 'application/json');
        $this->curl->post($url, $fields);
        return $this->curl->response;
    }

    public function getClientCredentialToken(string $url, string $apiKey, string $apiSecret, array $fields)
    {
        $this->curl->setHeader('Authorization', 'Basic ' . base64_encode($apiKey . ':' . $apiSecret));
        $this->curl->post($url, $fields);
        return $this->curl->response;
    }

}