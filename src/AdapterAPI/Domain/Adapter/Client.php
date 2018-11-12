<?php

namespace AdapterAPI\Domain\Adapter;

use AdapterAPI\Domain\Adapter\ValueObject\ApiKeyClient;
use AdapterAPI\Domain\Adapter\ValueObject\ApiSecretClient;
use AdapterAPI\Domain\Adapter\ValueObject\ParametersClients;
use AdapterAPI\Domain\Adapter\ValueObject\ParametersPost;
use AdapterAPI\Domain\Adapter\ValueObject\UrlApiClient;
use AdapterAPI\Domain\Adapter\ValueObject\UrlAuthorizationClient;

class Client
{
    /* @var ApiKeyClient */
    private $apiKeyClient;
    /* @var ApiSecretClient */
    private $apiSecretClient;
    /* @var UrlApiClient */
    private $urlApiClient;
    /* @var UrlAuthorizationClient */
    private $urlAuthorizationClient;
    /* @var ParametersClients */
    private $parametersClient;
    /* @var ParametersPost */
    private $parametersPost;

    /**
     * Client constructor.
     * @param ApiKeyClient $apiKeyClient
     * @param ApiSecretClient $apiSecretClient
     * @param UrlApiClient $urlApiClient
     * @param UrlAuthorizationClient $urlAuthorizationClient
     * @param ParametersClients $parametersClient
     * @param ParametersPost $parametersPost
     */
    public function __construct(ApiKeyClient $apiKeyClient, ApiSecretClient $apiSecretClient, UrlApiClient $urlApiClient, UrlAuthorizationClient $urlAuthorizationClient, ParametersClients $parametersClient, ParametersPost $parametersPost)
    {
        $this->apiKeyClient = $apiKeyClient;
        $this->apiSecretClient = $apiSecretClient;
        $this->urlApiClient = $urlApiClient;
        $this->urlAuthorizationClient = $urlAuthorizationClient;
        $this->parametersClient = $parametersClient;
        $this->parametersPost = $parametersPost;
    }

    /**
     * @return ApiKeyClient
     */
    public function getApiKeyClient(): ApiKeyClient
    {
        return $this->apiKeyClient;
    }

    /**
     * @return ApiSecretClient
     */
    public function getApiSecretClient(): ApiSecretClient
    {
        return $this->apiSecretClient;
    }

    /**
     * @return UrlApiClient
     */
    public function getUrlApiClient(): UrlApiClient
    {
        return $this->urlApiClient;
    }

    /**
     * @return UrlAuthorizationClient
     */
    public function getUrlAuthorizationClient(): UrlAuthorizationClient
    {
        return $this->urlAuthorizationClient;
    }

    /**
     * @return ParametersClients
     */
    public function getParametersClient(): ParametersClients
    {
        return $this->parametersClient;
    }

    /**
     * @return ParametersPost
     */
    public function getParametersPost(): ParametersPost
    {
        return $this->parametersPost;
    }


}