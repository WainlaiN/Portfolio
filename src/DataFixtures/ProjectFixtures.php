<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /** @var User $user */
        $user = $this->getReference(User::class);

        $project = new Project();
        $project->setTitle("Chalets & Caviar")
            ->setDescription("Wordpress CMS")
            ->setUser($user)
            ->setUrl("http://chalet.nicodev.ovh/")
            ->setImage("chalets.png");

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Les Films de plein Air")
            ->setDescription("Cahier des charges / HTML / CSS")
            ->setUser($user)
            ->setUrl("http://pleinair.nicodev.ovh/")
            ->setImage("pleinair.png");

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Express Food")
            ->setDescription("Solution technique d'une application")
            ->setUser($user)
            ->setImage("expressfood.png");

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Mon Blog")
            ->setDescription("PHP / MVC")
            ->setUser($user)
            ->setUrl("http://monblog.nicodev.ovh/")
            ->setImage("monblog.png");

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("SnowTricks")
            ->setDescription("Site communautaire sous Symfony")
            ->setUser($user)
            ->setUrl("http://snowtricks.nicodev.ovh/")
            ->setImage("snowtricks.png");

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Bilemo")
            ->setDescription("Web Service API REST")
            ->setUser($user)
            ->setUrl("http://bilemo.nicodev.ovh/api/doc")
            ->setImage("bilemo.png");

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Todo & Co")
            ->setDescription("Améliorez une application symfony existante")
            ->setUser($user)
            ->setUrl("http://todo.nicodev.ovh/api/doc")
            ->setImage("todo.png");

        $manager->persist($project);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }
}
