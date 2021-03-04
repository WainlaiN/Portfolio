<?php

namespace App\Tests;

use App\Entity\Skill;
use PHPUnit\Framework\TestCase;

class SkillUnitTest extends TestCase
{
    public function testValidProject(): void
    {
        $skill = new Skill();
        $skill->setTitle('title')
            ->setPercentage('50');

        $this->assertEquals("title", $skill->getTitle());
        $this->assertEquals("50", $skill->getPercentage());
    }

    public function testInvalidProject(): void
    {
        $skill = new Skill();
        $skill->setTitle('')
            ->setPercentage('');

        $this->assertFalse($skill->getTitle() === "false");
        $this->assertFalse($skill->getPercentage() === "false");
    }
}

