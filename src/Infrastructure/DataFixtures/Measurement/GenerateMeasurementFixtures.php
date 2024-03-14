<?php

namespace App\Infrastructure\DataFixtures\Measurement;

use App\Domain\Entity\Measurement;
use App\Domain\Entity\Sensor;

readonly class GenerateMeasurementFixtures implements GenerateMeasurementFixturesInterface
{
    public function __construct(
    ) {
    }

    public function getMeasurement(Sensor $sensor, string $pm10, string $pm25): ?Measurement
    {
        $measurement = new Measurement();
        $measurement->setSensor($sensor);
        $measurement->setPm10($pm10);
        $measurement->setPm25($pm25);
        return $measurement;
    }
}
