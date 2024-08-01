<?php

namespace Vinicius\PhpUnit;

class Product
{

    public function __construct(
        protected ?string $id = null,
        protected ?string $name = null,
        protected ?float $price = null,
    ) {
        $this->setId(uniqid());
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');

        return $this;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
