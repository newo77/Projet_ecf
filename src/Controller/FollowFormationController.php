<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FollowFormationController extends AbstractController
{
    #[Route('/suivre-une-formation', name: 'app_follow_formation')]
    public function index(): Response
    {
        return $this->render('follow_formation/index.html.twig');
    }
}
