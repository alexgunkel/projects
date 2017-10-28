<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:56
 */

namespace AlexGunkel\Test\Entities;


use AlexGunkel\Entities\Region;
use AlexGunkel\Value\RegionName;
use PHPUnit\Framework\TestCase;

final class RegionTest extends TestCase
{
    public function testName()
    {
        $element = new Region();
        $element->setName(
            new RegionName("Testelement")
        );

        self::assertEquals(
            "Testelement",
            $element->getName()
        );

        self::assertInstanceOf(
            RegionName::class,
            $element->getName()
        );
    }

    public function testToString()
    {
        $region = new Region;
        $region->setName(new RegionName("test"));

        self::assertEquals(
            'test',
            $region
        );
    }
}
