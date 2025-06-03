<?php

namespace Src\Service\Brand;

use Src\Entity\Brand\Brand;
use Src\Infrastructure\Repository\Brand\BrandRepository;

final readonly class BrandUpdaterService{

    private BrandRepository $repository;

    private BrandFinderService $finderService;

    public function __construct() {
        $this->repository = $Brandrepository();
        $this->finder = new BrandFinderService();
    }
    public function update(string $name, string $code, int $id): void{

        $brand = $this->finder->find($id);
        $brand->modify($name, $code);

        $this->repository->update($brand);
    }
    
}