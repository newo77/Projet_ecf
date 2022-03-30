<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Header;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   private $entityManager;

   public function __construct(EntityManagerInterface $entityManager){
       $this->entityManager = $entityManager;
   }


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $cours = $this->entityManager->getRepository(Cours::class)->findByIsBest(1);
        $headers = $this->entityManager->getRepository(Header::class)->findAll();


        return $this->render('home/index.html.twig',[
            'cours' => $cours,
            'headers' => $headers
        ]);
    }
}
