<?php 

namespace Src\Entity\Client;

final readonly class Client {
    public function __construct(
        private ?int $id,
        private int $dni,
        private string $name,
        private string $surname,
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
    
    public static function create(int $dni, string $name, string $surname ): self
    {
        return new self(null, $dni, $name, $surname, false);
    }

    public function id(): ?int
    {
        return $this->id;
    }
    public function name(): string
    {
        return $this->name;
    }

    public function dni(): int
    {
        return $this->dni;
    }
    public function surname(): string
    {
        return $this->surname;
    }

}