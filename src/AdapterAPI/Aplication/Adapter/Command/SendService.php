<?php

namespace AdapterAPI\Aplication\Adapter\Command;

use AdapterAPI\Domain\Adapter\Client;
use AdapterAPI\Domain\Adapter\ClientRepository;

class SendService
{
    /**@var ClientRepository */
    private $clientRepository;
    /**
     * AddProductService constructor.
     * @param ClientRepository $clientRepository
     */
    public function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }
    public function send(Client $client)
    {
        $this->clientRepository->send($client);
    }

}