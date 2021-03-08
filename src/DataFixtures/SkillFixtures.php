<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SkillFixtures extends Fixture implements DependentFixtureInterface
{
    private UserRepository $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }
    
    public function load(ObjectManager $manager)
    {
        $user = $this->getReference(User::class);

        $skill = new Skill();
        $skill->setTitle("HTML5")
            ->setPercentage(80)
            ->setUser($user)
            ->setNumber(1);

        $manager->persist($skill);

        $skill1 = new Skill();
        $skill1->setTitle("CSS3")
            ->setPercentage(80)
            ->setUser($user)
            ->setNumber(2);

        $manager->persist($skill1);

        $skill2 = new Skill();
        $skill2->setTitle("Bootstrap")
            ->setPercentage(80)
            ->setUser($user)
            ->setNumber(3);

        $manager->persist($skill2);

        $skill3 = new Skill();
        $skill3->setTitle("HTML5")
            ->setPercentage(70)
            ->setUser($user)
            ->setNumber(4);

        $manager->persist($skill3);

        $skill4 = new Skill();
        $skill4->setTitle("Linux")
            ->setPercentage(60)
            ->setUser($user)
            ->setNumber(5);

        $manager->persist($skill4);

        $skill5 = new Skill();
        $skill5->setTitle("API REST")
            ->setPercentage(60)
            ->setUser($user)
            ->setNumber(6);

        $manager->persist($skill5);

        $skill6 = new Skill();
        $skill6->setTitle("RabbitMQ")
            ->setPercentage(30)
            ->setUser($user)
            ->setNumber(7);

        $manager->persist($skill6);

        $skill7 = new Skill();
        $skill7->setTitle("Solr")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(8);

        $manager->persist($skill7);

        $skill8 = new Skill();
        $skill8->setTitle("ElasticSearch")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(9);

        $manager->persist($skill8);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }
}
