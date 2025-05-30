<?php

use Src\Controller\Category\CategoryDeleterService;

final readonly class CategoryDeleteController
{
    private CategoryDeleterService $service;
    private CategoryFinderService $finder;

    public function __construct() {
        $this->service = new CategoryDeleterService;
    }

    public function start(int $id): void {

        $category = $this->service->finder($id);

        $category = $this->service->deleter($name, $code, $id);
    }


}


