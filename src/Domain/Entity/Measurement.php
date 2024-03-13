<?php

namespace App\Domain\Entity;

use App\Domain\Trait\IdTrait;
use DateTimeImmutable;

class Measurement
{
    use IdTrait;

    private string $pm10;
    private string $pm25;
    private Sensor $sensor;
    private DateTimeImmutable $createdAt;

    public function getPm10(): string
    {
        return $this->pm10;
    }

    public function setPm10(string $pm10): void
    {
        $this->pm10 = $pm10;
    }

    public function getPm25(): string
    {
        return $this->pm25;
    }

    public function setPm25(string $pm25): void
    {
        $this->pm25 = $pm25;
    }

    public function getSensor(): Sensor
    {
        return $this->sensor;
    }

    public function setSensor(Sensor $sensor): void
    {
        $this->sensor = $sensor;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function onPrePersist(): void
    {
        $this->createdAt = new DateTimeImmutable();
    }
}
