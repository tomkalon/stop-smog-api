<?php

namespace App\UI\Web\Controller\FrontPage;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FrontPageController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('FrontPage/index.html.twig', [

        ]);
    }
}
