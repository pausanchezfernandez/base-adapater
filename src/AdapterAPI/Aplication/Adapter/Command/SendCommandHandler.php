<?php

namespace AdapterAPI\Aplication\Adapter\Command;

use AdapterAPI\Domain\Adapter\Client;
use AdapterAPI\Domain\Adapter\ValueObject\ApiKeyClient;
use AdapterAPI\Domain\Adapter\ValueObject\ApiSecretClient;
use AdapterAPI\Domain\Adapter\ValueObject\ParametersClients;
use AdapterAPI\Domain\Adapter\ValueObject\ParametersPost;
use AdapterAPI\Domain\Adapter\ValueObject\UrlApiClient;
use AdapterAPI\Domain\Adapter\ValueObject\UrlAuthorizationClient;

class SendCommandHandler
{

    /**@var SendService */
    private $service;
    /**
     * AddProductCommandHandler constructor.
     * @param SendService $service
     */
    public function __construct(SendService $service)
    {
        $this->service = $service;
    }
    public function handle(SendCommand $command)
    {
        $this->service->send(
           new Client(
               new ApiKeyClient($command->getApiKey()),
               new ApiSecretClient($command->getApiSecret()),
               new UrlApiClient($command->getUrlAPI()),
               new UrlAuthorizationClient($command->getUrlAuthorization()),
               new ParametersClients($command->getParameters()),
               new ParametersPost($command->getParametersPost())
           )
        );
    }

}