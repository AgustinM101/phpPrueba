<?php

namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Infrastructure\Repository\Category\CategoryRepository;

final readonly class CategoryDeleterService{

    private CategoryRepository $repository;

    private CategoryFinderService $finderService;

    public function __construct() {
        $this->repository = $Categoryrepository();
        $this->finder = new CategoryDeleterService();
    }
    public function delete(int $id): void{

        $category = $this->deleter->delete($id);
        $category->delete();

        $this->repository->update($category);
    }
    
}