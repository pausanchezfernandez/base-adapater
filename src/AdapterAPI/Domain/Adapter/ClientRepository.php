<?php

namespace AdapterAPI\Domain\Adapter;

interface ClientRepository
{
    public function send(Client $client);
}