<?php 

declare(strict_types = 1);

namespace Src\Infrastructure\Repository\Category;

use Src\Infrastructure\PDO\PDOManager;
use Src\Entity\Category\Category;

final readonly class CategoryRepository extends PDOManager implements CategoryRepositoryInterface {

    public function find(int $id): ?Category
    {
        $query = "SELECT * FROM category WHERE id = :id AND deleted = 0";

        $parameters = [
            "id" => $id
        ];

        $result = $this->execute($query, $parameters);
        
        return $this->primitiveToCategory($result[0] ?? null);
    }

    public function search(): array
    {
        $query = "SELECT * FROM category WHERE deleted = 0";
        $results = $this->execute($query);

        $categoryResults = [];
        foreach ($results as $result) {
            $categoryResults[] = $this->primitiveToCategory($result);
        }

        return $categoryResults;
    }


    public function create(Category $category): void{

        var_dump($category); 
        exit(); // linea para debuguear
        // Chequea si el objeto Category tiene los valores correctos
        

        $query = <<< INSERT_QUERY
                        INSERT INTO category (name, code)
                        VALUES (:name, :code, :deleted)
                        INSERT_QUERY;
        
        $parameters = [
            "name" => $category->name(),
            "code" => $category->code(),
            "deleted" => $category->deleted()
            
        ];

        $this->execute($query, $parameters);
    }
    public function update(Category $category): void
    {
        $query = <<< UPDATE_QUERY
                        UPDATE category
                        SET name = :name, code = :code, deleted = :deleted
                        WHERE id = :id
                        UPDATE_QUERY;

        $parameters = [
            "name" => $category->name(),
            "code" => $category->code(),
            "deleted" => $category->deleted(),
            "id" => $category->id()
        ];

        $this->execute($query, $parameters);
    }
 
    private function primitiveToCategory(?array $primitive): ?Category
    {
        if ($primitive === null) {
            return null;
        }

        return new Category(
            $primitive["id"],
            $primitive["name"],
            $primitive["code"],
            $primitive["deleted"] ?? false
        );
    }
}