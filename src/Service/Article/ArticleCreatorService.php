<?php

namespace Src\Service\Article;

use Src\Entity\Article\Article;
use Src\Infrastructure\Repository\Article\ArticleRepository;

final readonly class ArticleCreatorService{

    private ArticleRepository $repository;

    public function __construct() {
        $this->repository = new Articlerepository();
    }
    public function create(string $title, string $description, string $imageUrl): void{
        $article = Article::create($title, $description, $imageUrl);
        $this->repository->create($article);
    }
    
}