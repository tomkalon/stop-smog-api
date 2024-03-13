<?php

namespace App\Domain\Entity;

use App\Domain\Trait\IdTrait;
use App\Domain\Trait\LifecycleTrait;

class Sensor
{
    use IdTrait;
    use LifecycleTrait;

    private string $name;
    private string $address;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

}
