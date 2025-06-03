<?php 

namespace Src\Entity\Brand;

final readonly class Brand {
    public function __construct(
        private ?int $id,
        private string $name,
        private string $code,
      

    ) { }
    
    public static function create(string $name, string $code ): self
    {
        return new self(null, $name, $code, false);
    }

    public function id(): ?int
    {
        return $this->id;
    }
    public function name(): string
    {
        return $this->name;
    }

    public function code(): string
    {
        return $this->code;
    }

}