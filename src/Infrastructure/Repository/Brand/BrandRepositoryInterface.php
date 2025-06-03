<?php 

namespace Src\Infrastructure\Repository\Brand;

use Src\Entity\Brand\Brand;

interface BrandRepositoryInterface {
    public function find(int $id): ?Brand;

    /** @return Brand[] */
    public function search(): array;
}

