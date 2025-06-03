<?php

use Src\Controller\Client\ClientUpdaterService;
use Src\Controller\ControllerUtils;

final readonly class ClientPutController
{
    private ClientUpdaterService $service;

    public function __construct() {
        $this->service = new ClientUpdaterService;
    }

    public function start(int $id): void {
        
        $dni = ControllerUtils::getPost("dni");
        $name = ControllerUtils::getPost("name");
        $surname = ControllerUtils::getPost("surname");

        $client = $this->service->update($dni, $name, $surname, $id);
    }


}


