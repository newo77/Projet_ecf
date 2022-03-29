<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Cours;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    //code permettant d'accéder à easyadmin 4
    public function  __construct(private AdminUrlGenerator $adminUrlGenerator){

    }

    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator->
        setController(UserCrudController::class)
            ->generateUrl();

            return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ecoit');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('Category', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Cours', 'fab fa-studiovinari', Cours::class);
    }

}
