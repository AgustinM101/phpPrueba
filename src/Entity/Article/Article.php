<?php 

namespace Src\Entity\Article;

final readonly class Article {
    public function __construct(
        private ?int $id,
        private string $title,
        private string $description,
        private string $imageUrl,
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
    
    public static function create(string $title, string $description, string $imageUrl ): self
    {
        return new self(null, $title, $description, $imageUrl, false);
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function title(): string
    {
        return $this->title;
    }
    public function imageUrl(): string
    {
        return $this->imageUrl;
    }
}