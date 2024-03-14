<?php

namespace App\Infrastructure\DataFixtures;

use App\Domain\Entity\City;
use App\Domain\Entity\Sensor;
use App\Infrastructure\DataFixtures\City\GenerateCityFixturesInterface;
use App\Infrastructure\DataFixtures\Sensor\GenerateMeasurementFixturesInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\Collection;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    const NUMBER_OF_CITIES = 3;
    const NUMBER_OF_SENSORS = 6;
    const MEASUREMENTS_PER_SENSOR = 100;
    const MEASUREMENTS_INTERVAL = 100;

    public function __construct(
        private readonly GenerateCityFixturesInterface        $cityFixtures,
        private readonly GenerateMeasurementFixturesInterface $sensorFixtures,
    )
    {
    }


    public function load(ObjectManager $manager): void
    {
        /**
         * @var Collection|City[] $citiesList
         */
        $citiesList = [];
        $sensorsList = [];

        // GENERATE CITY LIST
        for ($i = 0; $i < self::NUMBER_OF_CITIES; $i++) {
            $city = $this->cityFixtures->getCity();
            if ($city) {
                $citiesList[] = $city;
                $manager->persist($city);
                $manager->flush();
            }
        }

        // GENERATE SENSORS LIST
        for ($i = 0; $i < self::NUMBER_OF_SENSORS; $i++) {
            $sensor = $this->sensorFixtures->getSensor($citiesList);
            if ($sensor) {
                $sensorsList[] = $sensor;
                $manager->persist($sensor);
                $manager->flush();
            }
        }
    }
}
