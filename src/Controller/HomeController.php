<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ProjectRepository;
use App\Repository\SkillRepository;
use App\Services\Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer as MailerMailer;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param ProjectRepository $projectRepo
     * @param SkillRepository $skillRepo
     * @param Request $request
     * @param Mailer $mailer
     * @return Response
     */
    public function index(
        ProjectRepository $projectRepo,
        SkillRepository $skillRepo,
        Request $request,
        Mailer $mailer
    ): Response {

        $tricks = $projectRepo->findAll();
        $skills = $skillRepo->findAll();

        $message = new Contact();

        $form = $this->createForm(ContactType::class, $message);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mailer->setMessage(
                $message->getName(),
                $this->renderView(
                    'email/contact.html.twig',
                    [
                        'name' => $message->getName(),
                        'message' => $message->getMessage(),
                        'email' =>$message->getEmail()
                    ]
                ),
                true
            );

            $this->addFlash('success', 'Votre message a bien été envoyé !');
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'projects' => $tricks,
            'skills' => $skills,
            'formContact' => $form->createView()
        ]);
    }
}
