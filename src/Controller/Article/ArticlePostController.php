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

        $article = $this->service->create($price, $description, $stock);
        
    }


}


