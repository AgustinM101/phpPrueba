<?php 

namespace Src\Infrastructure\Repository\Client;

use Src\Entity\Client\Client;

interface ClientRepositoryInterface {
    public function find(int $id): ?Client;

    /** @return Client[] */
    public function search(): array;
}

