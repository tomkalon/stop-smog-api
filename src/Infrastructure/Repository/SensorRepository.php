<?php

namespace App\Infrastructure\Repository;

use App\Domain\Repository\SensorRepositoryInterface;
use App\Domain\Entity\Sensor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class SensorRepository extends ServiceEntityRepository implements SensorRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sensor::class);
    }
}
