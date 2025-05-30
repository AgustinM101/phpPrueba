<?php

namespace Src\Service\Article;

use Src\Entity\Article\Article;
use Src\Infrastructure\Repository\Article\ArticleRepository;

final readonly class ArticleDeleterService{

    private ArticleRepository $repository;

    private ArticleFinderService $finderService;

    public function __construct() {
        $this->repository = $Articlerepository();
        $this->finder = new ArticleDeleterService();
    }
    
    public function delete(int $id): void{

        $article = $this->deleter->delete($id);
        $article->delete();

        $this->repository->update($article);
    }
    
}