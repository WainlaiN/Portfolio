<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SkillFixtures extends Fixture implements DependentFixtureInterface
{
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

        $skill21 = new Skill();
        $skill21->setTitle("PHP")
            ->setPercentage(60)
            ->setUser($user)
            ->setNumber(4);

        $manager->persist($skill21);

        $skill22 = new Skill();
        $skill22->setTitle("MySQL")
            ->setPercentage(60)
            ->setUser($user)
            ->setNumber(5);

        $manager->persist($skill22);

        $skill23 = new Skill();
        $skill23->setTitle("Twig")
            ->setPercentage(80)
            ->setUser($user)
            ->setNumber(6);

        $manager->persist($skill23);

        $skill24 = new Skill();
        $skill24->setTitle("Git")
            ->setPercentage(70)
            ->setUser($user)
            ->setNumber(7);

        $manager->persist($skill24);

        $skill3 = new Skill();
        $skill3->setTitle("Symfony")
            ->setPercentage(70)
            ->setUser($user)
            ->setNumber(8);

        $manager->persist($skill3);

        $skill31 = new Skill();
        $skill31->setTitle("Gitlab CI")
            ->setPercentage(40)
            ->setUser($user)
            ->setNumber(9);

        $manager->persist($skill31);

        $skill4 = new Skill();
        $skill4->setTitle("Linux")
            ->setPercentage(60)
            ->setUser($user)
            ->setNumber(10);

        $manager->persist($skill4);

        $skill5 = new Skill();
        $skill5->setTitle("API REST")
            ->setPercentage(60)
            ->setUser($user)
            ->setNumber(11);

        $manager->persist($skill5);

        $skill6 = new Skill();
        $skill6->setTitle("RabbitMQ")
            ->setPercentage(30)
            ->setUser($user)
            ->setNumber(12);

        $manager->persist($skill6);

        $skill7 = new Skill();
        $skill7->setTitle("Solr")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(13);

        $manager->persist($skill7);

        $skill8 = new Skill();
        $skill8->setTitle("ElasticSearch")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(14);

        $manager->persist($skill8);

        $skill9 = new Skill();
        $skill9->setTitle("SaltStack")
            ->setPercentage(40)
            ->setUser($user)
            ->setNumber(15);

        $manager->persist($skill9);

        $skill10 = new Skill();
        $skill10->setTitle("SQS/Q3/Cloudfront")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(16);

        $manager->persist($skill10);

        $skill11 = new Skill();
        $skill11->setTitle("Docker")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(17);

        $manager->persist($skill11);

        $skill12 = new Skill();
        $skill12->setTitle("Kibana")
            ->setPercentage(20)
            ->setUser($user)
            ->setNumber(18);

        $manager->persist($skill12);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }
}
