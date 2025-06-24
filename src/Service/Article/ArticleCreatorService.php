<?php

namespace Src\Service\Article;

use Src\Entity\Article\Article;
use Src\Infrastructure\Repository\Article\ArticleRepository;

final readonly class ArticleCreatorService{

    private ArticleRepository $repository;

    public function __construct() {
        $this->repository = new Articlerepository();
    }
    public function create(int $price, string $description, int $stock, string $imageUrl): void{
        $article = Article::create($price, $description, $stock, $imageUrl);
        $this->repository->create($article);
    }
    
}