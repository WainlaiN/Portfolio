<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testValidUser(): void
    {
        $user = new User();
        $user->setEmail('test@test.com')
            ->setNom('nom')
            ->setPrenom('prenom')
            ->setPassword('password');

        $this->assertEquals("test@test.com", $user->getEmail());
        $this->assertEquals("nom", $user->getNom());
        $this->assertEquals("prenom", $user->getPrenom());
        $this->assertEquals("password", $user->getPassword());
    }

    public function testInvalidUser(): void
    {
        $user = new User();
        $user->setEmail('test@test.com')
            ->setNom('nom')
            ->setPrenom('prenom')
            ->setPassword('password');

        $this->assertFalse($user->getEmail() === "false@test.com");
        $this->assertFalse($user->getNom() === "false");
        $this->assertFalse($user->getPrenom() === "false");
        $this->assertFalse($user->getPassword() ==="false" );
    }
}
