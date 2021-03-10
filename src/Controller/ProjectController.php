<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project/{slug}", name="project_show")
     * @param ProjectRepository $repo;
     * @param $slug;
     * @return Response
     */
    public function projectShow(ProjectRepository $repo, $slug): Response
    {
        $project = $repo->findOneBySlug($slug);

        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
            'project' => $project

        ]);
    }
}
