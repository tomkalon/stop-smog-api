<?php

namespace App\Infrastructure\DataFixtures\Measurement;

use App\Domain\Entity\Measurement;
use App\Domain\Entity\Sensor;

interface GenerateMeasurementFixturesInterface
{
    public function getMeasurement(Sensor $sensor, string $pm10, string $pm25): ?Measurement;
}
