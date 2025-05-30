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
        $title = ControllerUtils::getPost("title");
        $description = ControllerUtils::getPost("description");
        $imageUrl = ControllerUtils::getPost("imageUrl");

        $article = $this->service->create($title, $description, $imageUrl);
        
    }


}


