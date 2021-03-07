<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        //create User to access EasyAdmin
        $user = new User();
        $user->setEmail("nicodupriez@hotmail.com")
            ->setPassword($this->encoder->encodePassword($user, "admin"))
            ->setPrenom("nicolas")
            ->setNom("dupriez");

        $manager->persist($user);

        $this->addReference(User::class, $user);

        $manager->flush();
    }
}
