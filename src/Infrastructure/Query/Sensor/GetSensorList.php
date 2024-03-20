<?php

namespace App\Infrastructure\Query\Sensor;

use App\Domain\Entity\Sensor;
use App\Domain\Repository\SensorRepositoryInterface;
use App\Domain\View\Sensor\SensorView;
use Doctrine\Common\Collections\Collection;

readonly class GetSensorList implements GetSensorListInterface
{
    public function __construct(
        private SensorRepositoryInterface $sensorRepository
    ) {
    }

    public function execute(): array
    {
        /** @var Sensor|Collection $sensorList */
        $sensorList = $this->sensorRepository->listAll();
        $sensorViewList = [];
        foreach ($sensorList as $sensor) {
            $sensorViewList[] = SensorView::fromEntity($sensor);
        }
        return $sensorViewList;
    }
}
