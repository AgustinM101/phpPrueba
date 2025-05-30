<?php

use Src\Controller\Category\CategoryUpdaterService;

final readonly class CategoryPutController
{
    private CategoryUpdaterService $service;

    public function __construct() {
        $this->service = new CategoryUpdaterService;
    }

    public function start(int $id): void {
        $name = ControllerUtils::getPost("name");
        $code = ControllerUtils::getPost("code");

        $category = $this->service->update($name, $code, $id);
    }


}


