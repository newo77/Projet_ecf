<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostulezController extends AbstractController
{
    #[Route('/postulez', name: 'app_postulez')]
    public function index(): Response
    {
        return $this->render('postulez/index.html.twig');
    }
}
