<?php

use Src\Controller\Client\ClientDeleterService;

final readonly class ClientDeleteController
{
    private ClientDeleterService $service;
    private ClientFinderService $finder;

    public function __construct() {
        $this->service = new ClientDeleterService;
    }

    public function start(int $id): void {

        $client = $this->service->finder($id);

        $client = $this->service->deleter($dni, $name, $surname, $id);
    }


}


