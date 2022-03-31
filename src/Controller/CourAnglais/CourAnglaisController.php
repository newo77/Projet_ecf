<?php

namespace App\Controller\CourAnglais;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourAnglaisController extends AbstractController
{
    #[Route('/courAnglais', name: 'app_courAnglais')]
    public function index(): Response
    {
        return $this->render('cour_anglais/index.html.twig');
    }
}
