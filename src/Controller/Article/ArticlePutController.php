<?php

use Src\Service\Article\ArticleUpdaterService;
use Src\Utils\ControllerUtils;

final readonly class ArticlePutController
{
    private ArticleUpdaterService $service;

    public function __construct() {
        $this->service = new ArticleUpdaterService;
    }

    public function start(int $id): void {
        $price = ControllerUtils::getPost("price");
        $description = ControllerUtils::getPost("description");
        $stock = ControllerUtils::getPost("stock");
        $name = ControllerUtils::getPost("name");
        $imageUrl = ControllerUtils::getPost("imageUrl");


        $article = $this->service->update($price, $description, $stock, $imageUrl,$name $id);
    }


}


