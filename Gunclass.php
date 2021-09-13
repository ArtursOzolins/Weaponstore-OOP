<?php

class Gun
{
    protected string $name;
    protected int $caliber;
    protected string $type;
    protected int $trajectory = 0;

    public function __construct(string $type, string $name, int $caliber)
    {
        $this->type = $type;
        $this->name = $name;
        $this->caliber = $caliber;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCaliber(): int
    {
        return $this->caliber;
    }

    public function setTrajectory(int $formula): void
    {
        $this->trajectory = $formula;
    }

    public function getTrajectory(): int
    {
        return $this->trajectory;
    }
}
