<?php

namespace App\Infrastructure\Query\Sensor;

interface GetSensorListInterface
{
    public function execute(): array;
}
