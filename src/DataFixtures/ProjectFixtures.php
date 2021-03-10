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
            ->setUser($user);

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Les Films de plein Air")
            ->setDescription("Cahier des charges / HTML / CSS")
            ->setUser($user);

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Express Food")
            ->setDescription("Solution technique d'une application")
            ->setUser($user);

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Mon Blog")
            ->setDescription("PHP / MVC")
            ->setUser($user);

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("SnowTricks")
            ->setDescription("Site communautaire sous Symfony")
            ->setUser($user);

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Bilemo")
            ->setDescription("Web Service API REST")
            ->setUser($user);

        $manager->persist($project);

        $project = new Project();
        $project->setTitle("Todo & Co")
            ->setDescription("Améliorez une application symfony existante")
            ->setUser($user);

        $manager->persist($project);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class];
    }
}
