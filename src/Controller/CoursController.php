<?php

namespace App\Controller;

use App\class\Search;
use App\Entity\Cours;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }




    #[Route('/nos-cours', name: 'app_cours')]
    public function index(): Response
    {
        //récupère les cours créer sur le dashboard dans la section cours
        $cours = $this->entityManager->getRepository(Cours::class)->findAll();

        //récupère le formulaire de la barre de filtre
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);



        return $this->render('cours/index.html.twig',[
            'cours' => $cours,
            'form' => $form->createView()
        ]);
    }

    #[Route('/cour/{slug}', name: 'app_cour')]
    public function show($slug): Response
    {
        $cour = $this->entityManager->getRepository(Cours::class)->findOneBySlug($slug);

        if (!$cour) {
            return $this->redirectToRoute('app_cours');
        }

        return $this->render('cours/show.html.twig',[
            'cour' => $cour
        ]);
    }
}




