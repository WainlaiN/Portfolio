<?php

namespace App\Tests;

use App\Entity\BlogPost;
use App\Entity\Project;
use App\Entity\Skill;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testValidUser(): void
    {
        $user = new User();
        $project = new Project();
        $skill = new Skill();
        $post = new BlogPost();

        $user->setEmail('test@test.com')
            ->setNom('nom')
            ->setPrenom('prenom')
            ->setPassword('password')
            ->addProject($project)
            ->addSkill($skill)
            ->addBlogPost($post);


        $this->assertEquals("test@test.com", $user->getEmail());
        $this->assertEquals("nom", $user->getNom());
        $this->assertEquals("prenom", $user->getPrenom());
        $this->assertEquals("password", $user->getPassword());
        $this->assertEquals($user, $project->getUser());
        $this->assertEquals($user, $skill->getUser());
        $this->assertEquals($user, $post->getUser());
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
        $this->assertFalse($user->getPassword() === "false" );
    }

    public function testAddValidProject(): void
    {
        $user = new User();
        $project = new Project();

        $user->addProject($project);

        $this->assertSame($user, $project->getUser());

    }

    public function testAddValidSkill(): void
    {
        $user = new User();
        $skill = new Skill();

        $user->addSkill($skill);

        $this->assertSame($user, $skill->getUser());

    }
}
