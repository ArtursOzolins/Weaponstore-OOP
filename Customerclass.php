<?php

class Customer
{
    protected string $name;
    protected array $license;

}

class Details extends Customer
{
    public function __construct(string $name, array $license)
    {
        $this->name = $name;
        $this->license = $license;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLicense(): array
    {
        return $this->license;
    }

    public function choose($weaponCount): int
    {
        return rand(0, $weaponCount - 1);
    }
}

