<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:56
 */

namespace AlexGunkel\Test\Entities;


use AlexGunkel\Entities\Topic;
use AlexGunkel\Value\TopicTitle;
use PHPUnit\Framework\TestCase;

final class TopicTest extends TestCase
{
    public function testTitle()
    {
        $element = new Topic();
        $element->setTitle(
            new TopicTitle("Testelement")
        );

        self::assertEquals(
            "Testelement",
            $element->getTitle()
        );

        self::assertInstanceOf(
            TopicTitle::class,
            $element->getTitle()
        );
    }
}
