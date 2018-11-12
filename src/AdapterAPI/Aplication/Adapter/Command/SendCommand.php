<?php

namespace AdapterAPI\Aplication\Adapter\Command;

class SendCommand
{
    /* @var string */
    private $apiKey;
    /* @var string */
    private $apiSecret;
    /* @var string */
    private $urlAPI;
    /* @var string */
    private $urlAuthorization;
    /* @var string */
    private $parameters;
    /* @var string */
    private $parametersPost;

    /**
     * SendCommand constructor.
     * @param string $apiKey
     * @param string $apiSecret
     * @param string $urlAPI
     * @param string $urlAuthorization
     * @param string $parameters
     * @param string $parametersPost
     */
    public function __construct(string $apiKey, string $apiSecret, string $urlAPI, string $urlAuthorization, string $parameters, string $parametersPost)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->urlAPI = $urlAPI;
        $this->urlAuthorization = $urlAuthorization;
        $this->parameters = $parameters;
        $this->parametersPost = $parametersPost;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }

    /**
     * @return string
     */
    public function getUrlAPI(): string
    {
        return $this->urlAPI;
    }

    /**
     * @return string
     */
    public function getUrlAuthorization(): string
    {
        return $this->urlAuthorization;
    }

    /**
     * @return string
     */
    public function getParameters(): string
    {
        return $this->parameters;
    }

    /**
     * @return string
     */
    public function getParametersPost(): string
    {
        return $this->parametersPost;
    }


}