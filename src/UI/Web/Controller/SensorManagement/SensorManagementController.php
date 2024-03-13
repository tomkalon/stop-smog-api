<?php

namespace App\UI\Web\Controller\SensorManagement;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SensorManagementController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('SensorManagement/index.html.twig', [

        ]);
    }
}
