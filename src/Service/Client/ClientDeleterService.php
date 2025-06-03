<?php

namespace Src\Service\Client;

use Src\Entity\Client\Client;
use Src\Infrastructure\Repository\Client\ClientRepository;

final readonly class ClientDeleterService{

    private ClientRepository $repository;

    private ClientFinderService $finderService;

    public function __construct() {
        $this->repository = $ClientRepository();
        $this->finder = new ClientDeleterService();
    }
    
    public function delete(int $id): void{

        $client = $this->deleter->delete($id);
        $client->delete();

        $this->repository->update($client);
    }
    
}