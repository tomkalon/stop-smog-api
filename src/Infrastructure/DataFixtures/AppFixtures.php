<?php

namespace App\Infrastructure\DataFixtures;

use App\Domain\Entity\Sensor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sensor1 = new Sensor();
        $sensor1->setName('Szkoła w Rzezawie');
        $sensor1->setAddress('ul. Matejki 10');
        $manager->persist($sensor1);

        $sensor2 = new Sensor();
        $sensor2->setName('Szkoła w Jodłowce');
        $sensor2->setAddress('ul. Majora Nornicy 15');
        $manager->persist($sensor2);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
