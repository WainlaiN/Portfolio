<?php

namespace App\Controller\Admin;

use App\Controller\UserController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(BlogPostCrudController::class)->generateUrl());

        // you can also redirect to different pages depending on the current user
        /**if ('jane' === $this->getUser()->getUsername()) {
            return $this->redirect('...');
        }**/

        // you can also render some template to display a proper Dashboard
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //return $this->render('some/path/my-dashboard.html.twig');
    }

    /**public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }**/

    public function configureMenuItems(): iterable
    {
        return [
            yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),

            yield MenuItem::section('Blog'),
            MenuItem::linkToCrud('BlogPost', 'fa fa-file-text', BlogPost::class),

            yield MenuItem::section('Project'),
            MenuItem::linkToCrud('Project', 'fa fa-file-text', Project::class),

            yield MenuItem::section('Skill'),

            MenuItem::linkToLogout('Logout', 'fa fa-exit'),

            // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);


        ];
    }
}
