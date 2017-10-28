<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:56
 */

namespace AlexGunkel\Test\Entities;


use AlexGunkel\Entities\Project;
use AlexGunkel\Entities\Topic;
use AlexGunkel\Entities\WskElement;
use AlexGunkel\Value\ProjectTitle;
use AlexGunkel\Value\TopicTitle;
use AlexGunkel\Value\WskTitle;
use PHPUnit\Framework\TestCase;

final class ProjectTest extends TestCase
{
    public function testTitle()
    {
        $project = new Project();
        $project->setTitle(
            new ProjectTitle("Testprojekt")
        );

        self::assertEquals(
            "Testprojekt",
            $project->getTitle()
        );

        self::assertInstanceOf(
            ProjectTitle::class,
            $project->getTitle()
        );
    }

    public function testToString()
    {
        $project = new Project;
        $project->setTitle(new ProjectTitle("Testtitle"));

        self::assertEquals(
            'Testtitle',
            $project
        );
    }

    public function testTitleIfNotSet()
    {
        $project = new Project();

        self::assertInstanceOf(
            ProjectTitle::class,
            $project->getTitle()
        );

        self::assertEquals(
            '',
            $project->getTitle()
        );
    }

    public function testTopic()
    {
        $project = new Project();
        $project->setTopic(
            (new Topic())->setTitle(
                new TopicTitle("Thema")
            )
        );

        self::assertInstanceOf(
            Topic::class,
            $project->getTopic()
        );
    }

    public function testWskWlements()
    {
        $project = new Project();
        $project->setWskElement(
            (new WskElement())->setTitle(new WskTitle("Wertstoffkette"))
        );

        self::assertInstanceOf(
            WskElement::class,
            $project->getWskElement()
        );

        self::assertEquals(
            'Wertstoffkette',
            $project->getWskElement()
        );
    }
}