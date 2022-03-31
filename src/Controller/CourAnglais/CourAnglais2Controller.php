<?php

namespace App\Controller\CourAnglais;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourAnglais2Controller extends AbstractController
{
    #[Route('/cour/anglais2', name: 'app_cour_anglais2')]
    public function index(): Response
    {
        return $this->render('cour_anglais/cour_anglais2/index.html.twig');
    }
}
