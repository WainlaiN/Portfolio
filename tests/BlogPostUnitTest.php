<?php

namespace App\Tests;

use App\Entity\BlogPost;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testValidPost(): void
    {
        {
            $blog = new BlogPost();
            $blog->setTitle('title')
                ->setDescription('description')
                ->setContent('content')
                ->setImage('image.jpg')
                ->setSlug('titre-du-post')
                ->setDate(new DateTime());
    
    
            $this->assertEquals("title", $blog->getTitle());
            $this->assertEquals("description", $blog->getDescription());
            $this->assertEquals("content", $blog->getContent());
            $this->assertEquals("image.jpg", $blog->getImage());
        }
    }
}
