<?php 


declare(strict_types = 1);

namespace Src\Service\Category;

use Src\Entity\Category\Category;
use Src\Entity\Category\Exception\CategoryNotFoundException;
use Src\Infrastructure\Repository\Category\CategoryRepository;

final readonly class CategoryFinderService {

    private CategoryRepository $categoryRepository;

    public function __construct() 
    {
        $this->categoryRepository = new CategoryRepository();
    }

    public function find(int $id): Category
    {
        $category = $this->categoryRepository->find($id);

        if ($category === null) {
            throw new CategoryNotFoundException($id);
        }

        return $category;
    }

}
