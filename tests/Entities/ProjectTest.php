<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:56
 */

namespace AlexGunkel\Test\Entities;


use AlexGunkel\Entities\Project;
use AlexGunkel\Value\ProjectTitle;
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
}