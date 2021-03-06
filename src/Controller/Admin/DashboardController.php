<?php

namespace App\Controller\Admin;

use App\Entity\BlogPost;
use App\Entity\Project;
use App\Entity\Skill;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Menu\RouteMenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     * @IsGranted("ROLE_USER")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Users');
        yield MenuItem::linkToCrud('User', 'fas fa-users', User::class);

        yield MenuItem::section('Blogs');
        yield MenuItem::linkToCrud('BlogPost', 'fas fa-newspaper', BlogPost::class);

        yield MenuItem::section('Projets');
        yield MenuItem::linkToCrud('Project', 'fas fa-project-diagram', Project::class);

        yield MenuItem::section('Skills');
        yield MenuItem::linkToCrud('Skill', 'fas fa-tasks', Skill::class);

        yield MenuItem::linkToRoute('Home', 'fas fa-home', 'home');
                
    }
}
