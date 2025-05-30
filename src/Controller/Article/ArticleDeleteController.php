<?php

use Src\Controller\Article\ArticleDeleterService;

final readonly class ArticleDeleteController
{
    private ArticleDeleterService $service;
    private ArticleFinderService $finder;

    public function __construct() {
        $this->service = new ArticleDeleterService;
    }

    public function start(int $id): void {

        $article = $this->service->finder($id);

        $article = $this->service->deleter($imageUrl, $title, $description, $id);
    }


}


