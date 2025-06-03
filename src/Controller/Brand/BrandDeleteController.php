<?php

use Src\Controller\Brand\BrandDeleterService;

final readonly class BrandDeleteController
{
    private BrandDeleterService $service;
    private BrandFinderService $finder;

    public function __construct() {
        $this->service = new BrandDeleterService;
    }

    public function start(int $id): void {

        $brand = $this->service->finder($id);

        $brand = $this->service->deleter($price, $stock, $description, $id);
    }


}


