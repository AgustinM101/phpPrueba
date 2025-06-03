<?php

namespace Src\Service\Client;

use Src\Entity\Client\Client;
use Src\Infrastructure\Repository\Client\ClientRepository;

final readonly class ClientUpdaterService{

    private ClientRepository $repository;

    private ClientFinderService $finderService;

    public function __construct() {
        $this->repository = $Clientrepository();
        $this->finder = new ClientFinderService();
    }
    public function update(int $dni, string $name,string $surname, int $id): void{

        $client = $this->finder->find($id);
        $client->modify($dni, $name, $surname);

        $this->repository->update($client);
    }
    
}