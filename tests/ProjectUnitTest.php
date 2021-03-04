<?php

namespace App\Tests;

use App\Entity\Project;
use PHPUnit\Framework\TestCase;

class ProjectUnitTest extends TestCase
{
    public function testValidProject(): void
    {
        $project = new Project();
        $project->setTitle('title')
            ->setDescription('description')
            ->setImage('image.jpg')
            ->setUrl('www.projet.com');

        $this->assertEquals("title", $project->getTitle());
        $this->assertEquals("description", $project->getDescription());
        $this->assertEquals("image.jpg", $project->getImage());
        $this->assertEquals("www.projet.com", $project->getUrl());
    }

    public function testInvalidProject(): void
    {
        $project = new Project();
        $project->setTitle('')
            ->setDescription('')
            ->setImage('')
            ->setUrl('');

        $this->assertFalse($project->getTitle() === "false");
        $this->assertFalse($project->getDescription() === "false");
        $this->assertFalse($project->getImage() === "false");
        $this->assertFalse($project->getUrl() ==="false" );
    }
}
