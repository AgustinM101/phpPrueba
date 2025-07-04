<?php

use Src\Utils\ControllerUtils;
use Src\Service\Article\ArticleCreatorService;

final readonly class ArticlePostController
{
    private ArticleCreatorService $service;

    public function __construct() {
        $this->service = new ArticleCreatorService();
    }

    public function start(): void {
        $price = ControllerUtils::getPost("price");
        $description = ControllerUtils::getPost("description");
        $stock = ControllerUtils::getPost("stock");
        $name = ControllerUtils::getPost("name");
        $imageUrl = ControllerUtils::getPost("imageUrl");

        $article = $this->service->create($price, $description, $stock, $name, $imageUrl);
        
    }


}


