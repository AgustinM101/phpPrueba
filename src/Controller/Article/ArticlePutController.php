<?php

use Src\Controller\Article\ArticleUpdaterService;
use Src\Controller\ControllerUtils;

final readonly class ArticlePutController
{
    private ArticleUpdaterService $service;

    public function __construct() {
        $this->service = new ArticleUpdaterService;
    }

    public function start(int $id): void {
        $title = ControllerUtils::getPost("title");
        $description = ControllerUtils::getPost("description");
        $imageUrl = ControllerUtils::getPost("imageUrl");


        $article = $this->service->update($title, $description, $imageUrl, $id);
    }


}


