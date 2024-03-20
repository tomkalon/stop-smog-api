<?php

namespace App\UI\Web\Controller\SensorManagement;

use App\Infrastructure\Query\Sensor\GetSensorListInterface;
use App\Infrastructure\Query\Sensor\GetSensorViewInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SensorManagementController extends AbstractController
{
    public function index(
        GetSensorListInterface $sensorListQuery
    ): Response
    {
        $sensorViewList = $sensorListQuery->execute();
        return $this->render('SensorManagement/index.html.twig', [
            'sensors' => $sensorViewList
        ]);
    }

    public function show(
        GetSensorViewInterface $sensorViewQuery,
        int $id
    ): Response
    {
        $sensorView = $sensorViewQuery->execute($id);
        return $this->render('SensorManagement/show.html.twig', [
            'sensor' => $sensorView
        ]);
    }
}
