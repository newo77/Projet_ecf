<?php

namespace App\Controller\CourAnglais;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourAnglais3Controller extends AbstractController
{
    #[Route('/cour/anglais3', name: 'app_cour_anglais3')]
    public function index(): Response
    {
        return $this->render('cour_anglais/cour_anglais3/index.html.twig');
    }
}
