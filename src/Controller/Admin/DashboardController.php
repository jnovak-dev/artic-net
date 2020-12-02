<?php

namespace App\Controller\Admin;

use App\Entity\Answer;
use App\Entity\Application;
use App\Entity\Article;
use App\Entity\Organization;
use App\Entity\Question;
use App\Entity\Recruitment;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Artic Net');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Články', 'fas fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Organizace', 'fas fa-building', Organization::class);
        yield MenuItem::linkToCrud('Uživatelé', 'fas fa-user', User::class);

        yield MenuItem::section('Srekrut', 'fas fa-user');
        yield MenuItem::linkToCrud('Nábory', 'fas fa-user', Recruitment::class);
        yield MenuItem::linkToCrud('Otázky', 'fas fa-user', Question::class);
        yield MenuItem::linkToCrud('Odpovědi', 'fas fa-user', Answer::class);
        yield MenuItem::linkToCrud('Přihlášky', 'fas fa-user', Application::class);

        yield MenuItem::section('Smail', 'fas fa-user');
    }
}