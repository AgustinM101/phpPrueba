<?php

use Src\Controller\Category\CategoryCreatorService;

final readonly class CategoryPostController
{
    private CategoryCreatorService $service;

    public function __construct() {
        $this->service = new CategoryCreatorService;
    }

    public function start(): void {
        $name = ControllerUtils::getPost("name");
        $name = ControllerUtils::getPost("code");

        $category = $this->service->create($name, $code);
    }


}


