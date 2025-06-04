<?php 

namespace Src\Entity\Article;

final class Article {
    public function __construct(
        private readonly ?int $id,
        private int $price,
        private string $description,
        private int $stock,
        private int $deleted = 0

    ) {
    }
        public function delete(): void
    {
        $this->deleted = 1;
    }

    public function deleted(): int
    {
        return $this->deleted ? 1 : 0;
    }
    public function modify( int $price, string $description, int $stock): void {
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
    }
    
    public static function create(int $price, string $description, int $stock ): self
    {
        return new self(null, $price, $description, $stock, false);
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function price(): int
    {
        return $this->price;
    }
    public function stock(): int
    {
        return $this->stock;
    }
}