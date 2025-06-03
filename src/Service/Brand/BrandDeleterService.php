<?php

namespace Src\Service\Brand;

use Src\Entity\Brand\Brand;
use Src\Infrastructure\Repository\Brand\BrandRepository;

final readonly class BrandDeleterService{

    private BrandRepository $repository;

    private BrandFinderService $finderService;

    public function __construct() {
        $this->repository = $BrandRepository();
        $this->finder = new BrandDeleterService();
    }
    
    public function delete(int $id): void{

        $brand = $this->deleter->delete($id);
        $brand->delete();

        $this->repository->update($brand);
    }
    
}