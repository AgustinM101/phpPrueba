<?php

namespace Src\Service\Article;

use Src\Entity\Article\Article;
use Src\Infrastructure\Repository\Article\ArticleRepository;

final readonly class ArticleUpdaterService{

    private ArticleRepository $repository;

    private ArticleFinderService $finderService;

    public function __construct() {
        $this->repository = $Articlerepository();
        $this->finder = new ArticleFinderService();
    }
    public function update(string $title, string $description,string $imageUrl, int $id): void{

        $article = $this->finder->find($id);
        $article->modify($title, $description, $imageUrl);

        $this->repository->update($article);
    }
    
}