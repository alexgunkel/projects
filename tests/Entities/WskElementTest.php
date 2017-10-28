<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:56
 */

namespace AlexGunkel\Test\Entities;


use AlexGunkel\Entities\WskElement;
use AlexGunkel\Value\WskTitle;
use PHPUnit\Framework\TestCase;

final class WskElementTest extends TestCase
{
    public function testTitle()
    {
        $element = new WskElement();
        $element->setTitle(
            new WskTitle("Testelement")
        );

        self::assertEquals(
            "Testelement",
            $element->getTitle()
        );

        self::assertInstanceOf(
            WskTitle::class,
            $element->getTitle()
        );
    }

    public function testToString()
    {
        $element = new WskElement;
        $element->setTitle(new WskTitle('test'));

        self::assertEquals(
            'test',
            $element
        );
    }
}
