<?php

namespace AdapterAPI\Infrastructure\Clients;

use AdapterAPI\Domain\Adapter\Client;
use AdapterAPI\Domain\Adapter\ClientRepository;
use AdapterAPI\Infrastructure\Api\ApiRepository;

class SendClientWithCredentialRepository implements ClientRepository
{

    public function send(Client $client)
    {
        $apiRepository =new ApiRepository();
        $token=$apiRepository->getClientCredentialToken(
            $client->getUrlAuthorizationClient()->getValue(),
            $client->getApiKeyClient()->getValue(),
            $client->getApiSecretClient()->getValue(),
            $client->getParametersClient()->getArray()
        );
        $apiRepository->getAuthorizationBearer(
            $token,
            $client->getUrlApiClient(),
            $client->getParametersPost()->getArray()
        );
    }
}