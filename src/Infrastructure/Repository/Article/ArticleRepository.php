<?php 

namespace Src\Infrastructure\Repository\Article;

use Src\Infrastructure\PDO\PDOManager;
use Src\Entity\Article\Article;

final readonly class ArticleRepository extends PDOManager implements ArticleRepositoryInterface {
    public function find(int $id): ?Article
    {
        $query = <<<HEREDOC
                        SELECT 
                            *
                        FROM
                            articles A
                        WHERE
                            A.id = :id
                    HEREDOC;

        $parameters = [
            "id" => $id,
        ];

        $result = $this->execute($query, $parameters);

        return $this->toArticle($result[0] ?? null);
    }

    /** @return Article[] */
    public function search(): array
    {
        $query = <<<HEREDOC
                        SELECT
                            *
                        FROM
                            articles A
                    HEREDOC;
        
        $results = $this->execute($query);

        $articles = [];
        foreach($results as $result) {
            $articles[] = $this->toArticle($result);
        }

        return $articles;
    }
    public function create(Article $article): void{



        $query = <<< INSERT_QUERY
                        INSERT INTO articles (price, description, stock, deleted)
                        VALUES (:price, :description,:stock, :deleted)
                        INSERT_QUERY;
        
        $parameters = [
            "price" => $article->price(),
            "description" => $article->description(),
            "stock" => $article->stock(),
            "deleted" => $article->deleted()
           
            
        ];

        $this->execute($query, $parameters);
    }

    private function toArticle(?array $primitive): ?Article {
        if ($primitive === null) {
            return null;
        }

        return new Article(
            $primitive["id"],
            $primitive["price"],
            $primitive["description"],
            $primitive["stock"]
        );
    }
}