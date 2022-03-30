<?php

namespace App\Controller;

use App\Form\RegisterInstructorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostulezController extends AbstractController
{
    #[Route('/postulez', name: 'app_postulez')]
    public function index(Request $request): Response //request http foundation
    {

        $form = $this->createForm(RegisterInstructorType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->addFlash('notice' , "Merci davoir postulez,notre équipe va vous répondre dans les meilleurs délais.");

        }
        return $this->render('postulez/index.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
